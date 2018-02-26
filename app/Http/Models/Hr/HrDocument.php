<?php
/*
* @Created by: HaiAnhEm
* @Author    : nguyenduypt86@gmail.com
* @Date      : 02/2018
* @Version   : 1.0
*/
namespace App\Http\Models\Hr;
use App\Http\Models\BaseModel;

use App\Library\AdminFunction\Define;
use App\Library\AdminFunction\FunctionLib;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class HrDocument extends BaseModel{
    protected $table = Define::TABLE_HR_DOCUMENT;
    protected $primaryKey = 'hr_document_id';
    public $timestamps = false;

    protected $fillable = array('hr_document_project', 'hr_document_name', 'hr_document_desc', 'hr_document_content',
        'hr_document_code', 'hr_document_promulgate', 'hr_document_type', 'hr_document_field', 'hr_document_signer',
        'hr_document_date_issued', 'hr_document_effective_date', 'hr_document_date_expired', 'hr_document_delease_date',
        'hr_document_created', 'hr_document_update', 'hr_document_files', 'hr_document_status');

    public static function createItem($data){
        try {
            DB::connection()->getPdo()->beginTransaction();
            $checkData = new HrDocument();
            $fieldInput = $checkData->checkField($data);
            $item = new HrDocument();
            if (is_array($fieldInput) && count($fieldInput) > 0) {
                foreach ($fieldInput as $k => $v) {
                    $item->$k = $v;
                }
            }
            $item->save();

            DB::connection()->getPdo()->commit();
            self::removeCache($item->hr_document_id,$item);
            return $item->hr_document_id;
        } catch (PDOException $e) {
            DB::connection()->getPdo()->rollBack();
            throw new PDOException();
        }
    }
    public static function updateItem($id,$data){
        try {
            DB::connection()->getPdo()->beginTransaction();
            $checkData = new HrDocument();
            $fieldInput = $checkData->checkField($data);
            $item = HrDocument::find($id);
            foreach ($fieldInput as $k => $v) {
                $item->$k = $v;
            }
            $item->update();
            DB::connection()->getPdo()->commit();
            self::removeCache($item->hr_document_id,$item);
            return true;
        } catch (PDOException $e) {
            DB::connection()->getPdo()->rollBack();
            throw new PDOException();
        }
    }
    public static function getItemById($id=0){
        $result = (Define::CACHE_ON) ? Cache::get(Define::CACHE_HR_DOCUMENT_ID . $id) : array();
        try {
            if (empty($result)) {
                $result = HrDocument::where('hr_document_id', $id)->first();
                if ($result && Define::CACHE_ON) {
                    Cache::put(Define::CACHE_HR_DOCUMENT_ID . $id, $result, Define::CACHE_TIME_TO_LIVE_ONE_MONTH);
                }
            }
        } catch (PDOException $e) {
            throw new PDOException();
        }
        return $result;
    }
    public function checkField($dataInput) {
        $fields = $this->fillable;
        $dataDB = array();
        if(!empty($fields)) {
            foreach($fields as $field) {
                if(isset($dataInput[$field])) {
                    $dataDB[$field] = $dataInput[$field];
                }
            }
        }
        return $dataDB;
    }
    public static function deleteItem($id){
        if($id <= 0) return false;
        try {
            DB::connection()->getPdo()->beginTransaction();
            $item = HrDocument::find($id);
            if($item){
                //Remove file
                $arrFile = ($item->hr_document_files != '') ? unserialize($item->hr_document_files) : array();
                if(sizeof($arrFile) > 0){
                    foreach($arrFile as $k=>$v){
                        unset($arrFile[$k]);
                        FunctionLib::deleteFileUpload($v, Define::FOLDER_DOCUMENT, true, $id);
                    }
                }
                //End Remove file
                $item->delete();
            }
            DB::connection()->getPdo()->commit();
            self::removeCache($item->hr_document_id,$item);
            return true;
        } catch (PDOException $e) {
            DB::connection()->getPdo()->rollBack();
            throw new PDOException();
            return false;
        }
    }
    public static function removeCache($id = 0,$data){
        if($id > 0){
            Cache::forget(Define::CACHE_HR_DOCUMENT_ID.$id);
        }
    }
    public static function searchByCondition($dataSearch = array(), $limit =0, $offset=0, &$total){
        try{
            $query = HrDocument::where('hr_document_id','>',0);
            if (isset($dataSearch['hr_document_name']) && $dataSearch['hr_document_name'] != '') {
                $query->where('hr_document_name','LIKE', '%' . $dataSearch['hr_document_name'] . '%');
            }
            if (isset($dataSearch['hr_document_status']) && $dataSearch['hr_document_status'] != -1) {
                $query->where('hr_document_status',$dataSearch['hr_document_status']);
            }
            if (isset($dataSearch['hr_document_promulgate']) && $dataSearch['hr_document_promulgate'] != -1) {
                $query->where('hr_document_promulgate',$dataSearch['hr_document_promulgate']);
            }
            if (isset($dataSearch['hr_document_type']) && $dataSearch['hr_document_type'] != -1) {
                $query->where('hr_document_type',$dataSearch['hr_document_type']);
            }
            if (isset($dataSearch['hr_document_field']) && $dataSearch['hr_document_field'] != -1) {
                $query->where('hr_document_field',$dataSearch['hr_document_field']);
            }

            $total = $query->count();
            $query->orderBy('hr_document_id', 'desc');

            //get field can lay du lieu
            $fields = (isset($dataSearch['field_get']) && trim($dataSearch['field_get']) != '') ? explode(',',trim($dataSearch['field_get'])): array();
            if($limit > 0){
                $query->take($limit);
            }
            if($offset > 0){
                $query->skip($offset);
            }
            if(!empty($fields)){
                $result = $query->get($fields);
            }else{
                $result = $query->get();
            }
            return $result;

        }catch (PDOException $e){
            throw new PDOException();
        }
    }
}
