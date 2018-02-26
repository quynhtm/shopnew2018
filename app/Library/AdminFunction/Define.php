<?php
/**
 * Created by JetBrains PhpStorm.
 * User: QuynhTM
 */

namespace App\Library\AdminFunction;
class Define
{
    /***************************************************************************************************************
     * //Database
     ***************************************************************************************************************/
    const DB_CONNECTION_MYSQL = 'mysql';
    const DB_CONNECTION_SQLSRV = 'sqlsrv';
    const DB_CONNECTION_PGSQL = 'pgsql';
    const DB_SOCKET = '';
    //local
    const DB_HOST = 'localhost';
    const DB_PORT = '3306';
    const DB_DATABASE = 'nhansu';
    const DB_USERNAME = 'root';
    const DB_PASSWORD = '';
    //server

    const TABLE_USER = 'hr_user';
    const TABLE_GROUP_USER = 'hr_group_user';
    const TABLE_PERMISSION = 'hr_permission';
    const TABLE_MENU_SYSTEM = 'hr_menu_system';
    const TABLE_ROLE_MENU = 'hr_role_menu';
    const TABLE_ROLE = 'hr_role';
    const TABLE_PROVINCE = 'hr_province';
    const TABLE_DISTRICTS = 'hr_districts';
    const TABLE_WARDS = 'hr_wards';
    const TABLE_MEMBER = 'hr_member';
    const TABLE_GROUP_USER_PERMISSION = 'hr_group_user_permission';
    const TABLE_HR_CATEGORY = 'hr_category';
    const TABLE_HR_PERSON = 'hr_personnel';
    const TABLE_HR_DEFINE = 'hr_define';
    const TABLE_HR_DEPARTMENT = 'hr_department';
    const TABLE_HR_DEVICE = 'hr_device';
    const TABLE_HR_LOG = 'hr_log';
    const TABLE_HR_BONUS = 'hr_bonus';//khen thưởng
    const TABLE_HR_RELATIONSHIP = 'hr_relationship';
    const TABLE_HR_CONTRACTS = 'hr_contracts';
    const TABLE_HR_CURRICULUM_VITAE = 'hr_curriculum_vitae';//lý lịch 2C: thông tin đào tạo, công tác
    const TABLE_HR_DOCUMENT = 'hr_document';//van ban
    const TABLE_HR_MAIL = 'hr_mail';// mail
    const TABLE_HR_JOB_ASSIGNMENT = 'hr_job_assignment';// bổ nhiệm chức vụ
    const TABLE_HR_RETIREMENT = 'hr_retirement';// Nghi hưu
    const TABLE_HR_QUIT_JOB = 'hr_quit_job';// Nghi việc
    const TABLE_HR_PASSPORT = 'hr_passport';// Hộ chiếu mã số thuế

    /***************************************************************************************************************
     * //Memcache
     ***************************************************************************************************************/
    const CACHE_ON = 1;// 0: khong dung qua cache, 1: dung qua cache
    const CACHE_TIME_TO_LIVE_5 = 300; //Time cache 5 phut
    const CACHE_TIME_TO_LIVE_15 = 900; //Time cache 15 phut
    const CACHE_TIME_TO_LIVE_30 = 1800; //Time cache 30 phut
    const CACHE_TIME_TO_LIVE_60 = 3600; //Time cache 60 phut
    const CACHE_TIME_TO_LIVE_ONE_DAY = 86400; //Time cache 1 ngay
    const CACHE_TIME_TO_LIVE_ONE_WEEK = 604800; //Time cache 1 tuan
    const CACHE_TIME_TO_LIVE_ONE_MONTH = 2419200; //Time cache 1 thang
    const CACHE_TIME_TO_LIVE_ONE_YEAR = 29030400; //Time cache 1 nam
    //user customer
    const CACHE_DEBUG = 'cache_debug';
    const CACHE_CUSTOMER_ID = 'cache_customer_id_';
    const CACHE_ALL_PARENT_MENU = 'cache_all_parent_menu_';
    const CACHE_TREE_MENU = 'cache_tree_menu_';
    const CACHE_LIST_MENU_PERMISSION = 'cache_list_menu_permission';
    const CACHE_ALL_PARENT_CATEGORY = 'cache_all_parent_category_';
    const CACHE_USER_NAME = 'haianhem';
    const CACHE_USER_KEY = 'admin!@133';
    const CACHE_EMAIL_NAME = 'manager@gmail.com';

    const CACHE_INFO_USER = 'cache_info_user';
    const CACHE_OPTION_USER = 'cache_option_user';
    const CACHE_OPTION_CARRIER = 'cache_option_carrier';

    const CACHE_OPTION_ROLE = 'cache_option_role';

    //Hr nhân sự
    const CACHE_PERSON = 'cache_info_person_id_';

    //Hr key cache
    const CACHE_ROLE_ID = 'cache_admin_role_id_';
    const CACHE_HR_DEFINED_ID = 'cache_hr_defined_id_';
    const CACHE_DEPARTMENT_ID = 'cache_department_id_';
    const CACHE_ALL_DEPARTMENT = 'cache_all_department';
    const CACHE_DEFINED_TYPE = 'cache_defined_type_';
    const CACHE_DEFINED_ALL = 'cache_defined_all';
    const CACHE_DEVICE_ID = 'cache_device_id_';
    const CACHE_HR_DOCUMENT_ID = 'cache_hr_document_id_';
    const CACHE_HR_MAIL_ID = 'cache_hr_mail_id_';
    /***************************************************************************************************************
     * //Define
     ***************************************************************************************************************/
    const ERROR_PERMISSION = 1;

    const VIETNAM_LANGUAGE = 1;
    const ENGLISH_LANGUAGE = 2;
    static $arrLanguage = array(Define::VIETNAM_LANGUAGE => 'vi', Define::ENGLISH_LANGUAGE => 'en');

    const STATUS_SHOW = 1;
    const STATUS_HIDE = 0;
    const STATUS_BLOCK = -2;

    const BONUS_KHEN_THUONG = 1;
    const BONUS_DANH_HIEU = 2;
    const BONUS_KY_LUAT = 3;

    const CURRICULUMVITAE_DAO_TAO = 1;
    const CURRICULUMVITAE_CHUNG_CHI_KHAC = 2;
    const CURRICULUMVITAE_CONG_TAC = 3;
    const CURRICULUMVITAE_HOAT_DONG_DANG = 4;

    const QUITJOB_THOI_VIEC = 1;
    const QUITJOB_CHUYEN_CONGTAC = 2;
    const QUITJOB_CHUYEN_PHONG_BAN = 3;

    //SuperAdmin, Admin, Customer
    const ROLE_TYPE_SUPER_ADMIN = 6;
    const ROLE_TYPE_ADMIN = 7;
    const ROLE_TYPE_CUSTOMER = 10;
    static $arrUserRole = array(
        Define::ROLE_TYPE_SUPER_ADMIN => 'SuperAdmin',
        Define::ROLE_TYPE_ADMIN => 'Admin',
        Define::ROLE_TYPE_CUSTOMER => 'Customer');

    //Type define trong bảng define
    const chuc_vu = 1;
    const hoc_ham = 2;
    const hoc_vi = 3;
    const nghach_bac = 4;
    const trinh_do_ql_nghe_nghiep = 5;
    const trinh_do_ly_luan = 6;
    const loai_phong_ban = 7;
    const chuc_danh_nghe_nghiep = 8;
    const chuc_danh_khoa_hoc_cong_nghe = 9;
    const cap_uy = 10;
    const dan_toc = 11;
    const ton_giao = 12;
    const thanh_phan_gia_dinh = 13;
    const quan_ham = 14;
    const trinh_do_hoc_van = 15;
    const ly_luan_chinh_tri = 16;
    const ngoai_ngu = 17;
    const thang_bang_luong = 18;
    const ngach_cong_chuc = 19;
    const bac_luong = 20;
    const danh_hieu = 21;
    const khen_thuong = 22;
    const ky_luat = 23;
    const tinh_trang_suc_khoe = 24;
    const nhom_mau = 25;
    const hang_thuong_binh = 26;
    const trinh_do_tin_hoc = 27;
    const loai_hop_dong = 28;
    const loai_dao_tao = 29;
    const van_bang_chung_chi = 30;
    const chuc_vu_doan_dang = 31;
    const quan_he_gia_dinh = 32;
    const loai_phu_cap = 33;
    const loai_donvi_phongban = 34;
    const loai_thiet_bi = 35;
    const che_do_thanh_toan = 36;
    const hinh_thuc_hoc = 37;
    const chuyen_nghanh_dao_tao = 38;
    //Phan loai van ban
    const co_quan_ban_hanh = 39;
    const loai_van_ban = 40;
    const linh_vuc = 41;

    static $arrOptionDefine = array(
        Define::chuc_vu => 'Chức vụ',
        Define::hoc_ham => 'Học hàm',
        Define::hoc_vi => 'Học vị',
        Define::nghach_bac => 'Ngạch bậc',
        Define::trinh_do_ql_nghe_nghiep => 'Trình độ quản lý nghề nghiệp',
        Define::trinh_do_ly_luan => 'Trình độ lý luận',
        Define::loai_phong_ban => 'Loại phòng ban',
        Define::chuc_danh_nghe_nghiep => 'Chức danh nghề nghiệp',
        Define::chuc_danh_khoa_hoc_cong_nghe => 'Chức danh khoa học công nghệ',
        Define::cap_uy => 'Cấp ủy',
        Define::dan_toc => 'Dân tộc',
        Define::ton_giao => 'Tôn giáo',
        Define::thanh_phan_gia_dinh => 'Thành phần gia đình',
        Define::quan_ham => 'Quân hàm',
        Define::trinh_do_hoc_van => 'Trình độ học vấn',
        Define::ly_luan_chinh_tri => 'Lý luận chính trị',
        Define::ngoai_ngu => 'Ngoại ngữ',
        Define::thang_bang_luong => 'Thang bảng lương',
        Define::ngach_cong_chuc => 'Ngạch công chức',
        Define::bac_luong => 'Bậc lương',
        Define::danh_hieu => 'Danh hiệu',
        Define::khen_thuong => 'Khen thưởng',
        Define::ky_luat => 'Kỷ luật',
        Define::tinh_trang_suc_khoe => 'Tình trang sức khỏe',
        Define::nhom_mau => 'Nhóm máu',
        Define::hang_thuong_binh => 'Hạng thương binh',
        Define::trinh_do_tin_hoc => 'Trình độ tin học',
        Define::loai_hop_dong => 'Loại hợp đồng',
        Define::loai_dao_tao => 'Loại đào tạo',
        Define::van_bang_chung_chi => 'Văn bằng chứng chỉ',
        Define::chuc_vu_doan_dang => 'Chức vụ Đoàn/Đảng',
        Define::quan_he_gia_dinh => 'Quan hệ gia đình',
        Define::loai_phu_cap => 'Loại phụ cấp',
        Define::loai_donvi_phongban => 'Loại đơn vị / phòng ban',
        Define::loai_thiet_bi => 'Loại thiết bị',
        Define::che_do_thanh_toan => 'Chế độ thanh toán',
        Define::hinh_thuc_hoc => 'Hình thức học',
        Define::chuyen_nghanh_dao_tao => 'Chuyên nghành đào tạo',
        Define::co_quan_ban_hanh => 'Cơ quan ban hành',
        Define::loai_van_ban => 'Loại văn bản',
        Define::linh_vuc => 'Lĩnh vực',
    );

    //Folder
    const IMAGE_ERROR = -1000;
    const FOLDER_DEVICE = 'device';
    const FOLDER_DOCUMENT = 'document';
    const FOLDER_MAIL = 'mail';

    const sizeImage_80 = 80;
    const sizeImage_100 = 100;
    const sizeImage_150 = 150;
    const sizeImage_200 = 200;
    const sizeImage_300 = 300;
    const sizeImage_400 = 400;
    const sizeImage_450 = 450;

    public static $arrSizeImage = array(
        self::sizeImage_100 => array('w' => self::sizeImage_100, 'h' => self::sizeImage_100),
        self::sizeImage_200 => array('w' => self::sizeImage_200, 'h' => self::sizeImage_200),
        self::sizeImage_300 => array('w' => self::sizeImage_300, 'h' => self::sizeImage_300),
        self::sizeImage_450 => array('w' => self::sizeImage_450, 'h' => self::sizeImage_450),
    );

}