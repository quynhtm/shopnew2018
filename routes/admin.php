<?php

Route::get('logout', array('as' => 'admin.logout','uses' => Admin.'\AdminLoginController@logout'));
Route::get('dashboard', array('as' => 'admin.dashboard','uses' => Admin.'\AdminDashBoardController@dashboard'));
Route::get('dashboard/infoEdit', array('as' => 'admin.infoEdit','uses' => Admin.'\AdminSystemSettingController@getInfoEdit'));
Route::post('dashboard/infoEdit/{id?}', array('as' => 'admin.infoEdit','uses' => Admin.'\AdminSystemSettingController@postInfoEdit'));

/*thông tin tài khoản*/
Route::match(['GET','POST'],'user/view', array('as' => 'admin.user_view','uses' => Admin.'\AdminUserController@view'));
Route::get('user/edit/{id}',array('as' => 'admin.user_edit','uses' => Admin.'\AdminUserController@editInfo'));
Route::post('user/edit/{id}',array('as' => 'admin.user_edit','uses' => Admin.'\AdminUserController@edit'));
Route::get('user/change/{id}',array('as' => 'admin.user_change','uses' => Admin.'\AdminUserController@changePassInfo'));
Route::post('user/change/{id}',array('as' => 'admin.user_change','uses' => Admin.'\AdminUserController@changePass'));
Route::post('user/remove/{id}',array('as' => 'admin.user_remove','uses' => Admin.'\AdminUserController@remove'));
Route::get('user/getInfoSettingUser', array('as' => 'admin.getInfoSettingUser','uses' => Admin.'\AdminUserController@getInfoSettingUser'));//ajax
Route::post('user/submitInfoSettingUser', array('as' => 'admin.submitInfoSettingUser','uses' => Admin.'\AdminUserController@submitInfoSettingUser'));//ajax

/*thông tin quyền*/
Route::match(['GET','POST'],'permission/view',array('as' => 'admin.permission_view','uses' => Admin.'\AdminPermissionController@view'));
Route::get('permission/addPermit',array('as' => 'admin.addPermit','uses' => Admin.'\AdminPermissionController@addPermit'));
Route::get('permission/create',array('as' => 'admin.permission_create','uses' => Admin.'\AdminPermissionController@createInfo'));
Route::post('permission/create',array('as' => 'admin.permission_create','uses' => Admin.'\AdminPermissionController@create'));
Route::get('permission/edit/{id}',array('as' => 'admin.permission_edit','uses' => Admin.'\AdminPermissionController@editInfo'))->where('id', '[0-9]+');
Route::post('permission/edit/{id}',array('as' => 'admin.permission_edit','uses' => Admin.'\AdminPermissionController@edit'))->where('id', '[0-9]+');
Route::post('permission/deletePermission', array('as' => 'admin.deletePermission','uses' => Admin.'\AdminPermissionController@deletePermission'));//ajax


/*thông tin nhóm quyền*/
Route::match(['GET','POST'],'groupUser/view',array('as' => 'admin.groupUser_view','uses' => Admin.'\AdminGroupUserController@view'));
Route::get('groupUser/create',array('as' => 'admin.groupUser_create','uses' => Admin.'\AdminGroupUserController@createInfo'));
Route::post('groupUser/create',array('as' => 'admin.groupUser_create','uses' => Admin.'\AdminGroupUserController@create'));
Route::get('groupUser/edit/{id?}',array('as' => 'admin.groupUser_edit','uses' => Admin.'\AdminGroupUserController@editInfo'))->where('id', '[0-9]+');
Route::post('groupUser/edit/{id?}',array('as' => 'admin.groupUser_edit','uses' => Admin.'\AdminGroupUserController@edit'))->where('id', '[0-9]+');
Route::post('groupUser/remove/{id}',array('as' => 'admin.groupUser_remove','uses' => Admin.'\AdminGroupUserController@remove'));
/*thông tin quyền theo role */
Route::get('groupUser/viewRole',array('as' => 'admin.viewRole','uses' => Admin.'\AdminGroupUserController@viewRole'));
Route::get('groupUser/editRole/{id?}', array('as' => 'admin.editRole','uses' => Admin.'\AdminGroupUserController@getRole'));
Route::post('groupUser/editRole/{id?}', array('as' => 'admin.editRole','uses' => Admin.'\AdminGroupUserController@postRole'));

/*thông tin role */
Route::get('role/view',array('as' => 'admin.roleView','uses' => Admin.'\AdminRoleController@view'));
Route::post('role/addRole/{id?}',array('as' => 'admin.addRole','uses' => Admin.'\AdminRoleController@addRole'));
Route::get('role/deleteRole',array('as' => 'admin.deleteRole','uses' => Admin.'\AdminRoleController@deleteRole'));
Route::post('role/ajaxLoadForm',array('as' => 'admin.loadForm','uses' => Admin.'\AdminRoleController@ajaxLoadForm'));

/*thông tin menu */
Route::get('menu/view',array('as' => 'admin.menuView','uses' => Admin.'\AdminManageMenuController@view'));
Route::get('menu/edit/{id?}', array('as' => 'admin.menuEdit','uses' => Admin.'\AdminManageMenuController@getItem'));
Route::post('menu/edit/{id?}', array('as' => 'admin.menuEdit','uses' => Admin.'\AdminManageMenuController@postItem'));
Route::post('menu/deleteMenu', array('as' => 'admin.deleteMenu','uses' => Admin.'\AdminManageMenuController@deleteMenu'));//ajax

/*Cài đặt hệ thống */
Route::get('systemSetting/view',array('as' => 'admin.systemSettingView','uses' => Admin.'\AdminSystemSettingController@view'));
Route::post('systemSetting/view/{id?}', array('as' => 'admin.systemSettingView','uses' => Admin.'\AdminSystemSettingController@postItem'));
Route::get('systemSetting/edit/{id?}', array('as' => 'admin.systemSettingEdit','uses' => Admin.'\AdminSystemSettingController@getItem'));
Route::post('systemSetting/edit/{id?}', array('as' => 'admin.systemSettingEdit','uses' => Admin.'\AdminSystemSettingController@postItem'));
Route::post('systemSetting/deleteSystemSetting', array('as' => 'admin.deleteSystemSetting','uses' => Admin.'\AdminSystemSettingController@deleteSystemSetting'));//ajax\
Route::post('systemSetting/importString', array('as' => 'admin.importStringSystemSetting','uses' => Admin.'\AdminSystemSettingController@importString'));//ajax\

/*Cài đặt nhà mạng */
Route::get('carrierSetting/view',array('as' => 'admin.carrierSettingView','uses' => Admin.'\AdminCarrierSettingController@view'));
Route::get('carrierSetting/edit/{id?}', array('as' => 'admin.carrierSettingEdit','uses' => Admin.'\AdminCarrierSettingController@getItem'));
Route::post('carrierSetting/edit/{id?}', array('as' => 'admin.carrierSettingEdit','uses' => Admin.'\AdminCarrierSettingController@postItem'));
Route::post('carrierSetting/deleteCarrierSetting', array('as' => 'admin.deleteCarrierSetting','uses' => Admin.'\AdminCarrierSettingController@deleteCarrierSetting'));//ajax

/*Cài đặt thiết bị */
Route::get('deviceToken/view',array('as' => 'admin.deviceTokenView','uses' => Admin.'\AdminDeviceTokenController@view'));
Route::get('deviceToken/edit/{id?}', array('as' => 'admin.deviceTokenEdit','uses' => Admin.'\AdminDeviceTokenController@getItem'));
Route::post('deviceToken/edit/{id?}', array('as' => 'admin.deviceTokenEdit','uses' => Admin.'\AdminDeviceTokenController@postItem'));
Route::post('deviceToken/deleteDeviceToken', array('as' => 'admin.deleteDeviceToken','uses' => Admin.'\AdminDeviceTokenController@deleteDeviceToken'));//ajax

/*Cài đặt modem */
Route::get('modem/view',array('as' => 'admin.modemView','uses' => Admin.'\AdminModemController@view'));
Route::get('modem/edit/{id?}', array('as' => 'admin.modemEdit','uses' => Admin.'\AdminModemController@getItem'));
Route::post('modem/edit/{id?}', array('as' => 'admin.modemEdit','uses' => Admin.'\AdminModemController@postItem'));
Route::post('modem/deleteModem', array('as' => 'admin.deleteModem','uses' => Admin.'\AdminModemController@deleteModem'));//ajax

/*send SMS*/
Route::get('sendSms', array('as' => 'admin.sendSms','uses' => Admin.'\AdminSendSmsController@getSendSms'));
Route::post('sendSms', array('as' => 'admin.sendSms','uses' => Admin.'\AdminSendSmsController@postSendSms'));
Route::get('sendSms/uploadFileExcelPhone', array('as' => 'admin.uploadFileExcelPhone','uses' => Admin.'\AdminSendSmsController@uploadFileExcelPhone'));

/*thông sms chờ xử lý*/
Route::match(['GET','POST'], 'waittingSms/view',array('as' => 'admin.waittingSmsView','uses' => Admin.'\AdminWaittingProcessSmsController@view'));
Route::match(['GET','POST'], 'waittingSms/viewSend',array('as' => 'admin.waittingSendSmsView','uses' => Admin.'\AdminWaittingProcessSmsController@viewSend'));
Route::get('waittingSms/edit/{type_page?}/{id?}', array('as' => 'admin.waittingSmsEdit','uses' => Admin.'\AdminWaittingProcessSmsController@getItem'));
Route::post('waittingSms/edit/{type_page?}/{id?}', array('as' => 'admin.waittingSmsEdit','uses' => Admin.'\AdminWaittingProcessSmsController@postItem'));
Route::post('waittingSms/changeUserWaittingProcessSms', array('as' => 'admin.changeUserWaittingProcessSms','uses' => Admin.'\AdminWaittingProcessSmsController@changeUserWaittingProcessSms'));//ajax
Route::get('waittingSms/getSettingContentAttach', array('as' => 'admin.getSettingContentAttach','uses' => Admin.'\AdminWaittingProcessSmsController@getSettingContentAttach'));//ajax
Route::get('waittingSms/getContentGraftedSms', array('as' => 'admin.getContentGraftedSms','uses' => Admin.'\AdminWaittingProcessSmsController@getContentGraftedSms'));//ajax
Route::get('waittingSms/submitContentGraftedSms', array('as' => 'admin.submitContentGraftedSms','uses' => Admin.'\AdminWaittingProcessSmsController@submitContentGraftedSms'));//ajax
//waittingSendSMS
Route::post('waittingSms/changeModemWaittingSendSms', array('as' => 'admin.changeModemWaittingSendSms','uses' => Admin.'\AdminWaittingProcessSmsController@changeModemWaittingSendSms'));//ajax
Route::post('waittingSms/refuseModem', array('as' => 'admin.refuseModem','uses' => Admin.'\AdminWaittingProcessSmsController@refuseModem'));//ajax

/*Document API Client*/
Route::get('dashboard/clientAPIView', array('as' => 'admin.clientAPIView','uses' => Admin.'\AdminSystemSettingController@getApiClient'));
Route::get('dashboard/client_api_edit/{id?}', array('as' => 'admin.client_api_edit','uses' => Admin.'\AdminSystemSettingController@getApiClientEdit'));
Route::post('dashboard/client_api_edit/{id?}', array('as' => 'admin.client_api_edit','uses' => Admin.'\AdminSystemSettingController@postApiClientEdit'));

/*Document API Customer*/
Route::get('dashboard/customerAPIView', array('as' => 'admin.customerAPIView','uses' => Admin.'\AdminSystemSettingController@getApiCustomer'));
Route::get('dashboard/customer_api_edit/{id?}', array('as' => 'admin.customer_api_edit','uses' => Admin.'\AdminSystemSettingController@getApiCustomerEdit'));
Route::post('dashboard/customer_api_edit/{id?}', array('as' => 'admin.customer_api_edit','uses' => Admin.'\AdminSystemSettingController@postApiCustomerEdit'));

/*Cài đặt station */
Route::get('stationSetting/view',array('as' => 'admin.stationSettingView','uses' => Admin.'\AdminStationSettingController@view'));
Route::post('stationSetting/view/{id?}', array('as' => 'admin.stationSettingEdit','uses' => Admin.'\AdminStationSettingController@postItem'));

/*Station List*/
Route::get('stationList/view',array('as' => 'admin.stationListView','uses' => Admin.'\AdminStationListController@view'));

/*Station Report*/
Route::get('stationReport/view',array('as' => 'admin.stationReportView','uses' => Admin.'\AdminStationReportController@view'));

/*SMS History*/
Route::get('smsHistory/view',array('as' => 'admin.smsHistoryView','uses' => Admin.'\AdminSendSMSHistory@view'));
Route::get('smsHistory/details',array('as' => 'admin.smsHistoryDetailsView','uses' => Admin.'\AdminSendSMSHistory@viewDetails'));

/*Report Chart*/
Route::get('reportChart/view',array('as' => 'admin.reportChart','uses' => Admin.'\AdminReportChartController@view'));

/*SMS Report Chart*/
Route::get('smsMonthChart/view',array('as' => 'admin.smsMonthChart','uses' => Admin.'\AdminSMSReportChartController@view'));

/*SMS Month Report Chart*/
Route::get('smsMonthReportChart/view',array('as' => 'admin.smsMonthReportChart','uses' => Admin.'\AdminSMSMonthReportChartController@view'));

/*SMS Day Report Chart*/
Route::get('smsDayReportChart/view',array('as' => 'admin.smsDayReportChart','uses' => Admin.'\AdminSMSDayReportChartController@view'));

/*SMS Year Report Chart*/
Route::get('smsYearReportChart/view',array('as' => 'admin.smsYearReportChart','uses' => Admin.'\AdminSMSYearReportChartController@view'));

/*SMS Hours Report Chart*/
Route::get('smsHoursReportChart/view',array('as' => 'admin.smsHoursReportChart','uses' => Admin.'\AdminSMSHoursReportChartController@view'));

/*SMS graphSuccessful Report Chart*/
Route::get('graphSuccessful/view',array('as' => 'admin.graphSuccessful','uses' => Admin.'\AdminSMSGraphReportChartController@view'));

/*SMS History*/
Route::get('smsTeplate/view',array('as' => 'admin.smsTemplate','uses' => Admin.'\AdminSMSTemplateController@view'));
Route::post('smsTeplate/addTemplate',array('as' => 'admin.addTemplate','uses' => Admin.'\AdminSMSTemplateController@addTemplate'));
Route::get('smsTeplate/deleteTemplate',array('as' => 'admin.deleteTemplate','uses' => Admin.'\AdminSMSTemplateController@deleteTemplate'));


