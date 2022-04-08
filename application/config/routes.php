<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['login'] = 'login/check_login';
$route['logout'] = 'login/logout';
//general
$route['general'] = 'settings/general';
$route['general_add'] = 'settings/general/add_data';
$route['general_add_logo'] = 'settings/general/general_logo';
$route['general_add_favicon'] = 'settings/general/general_favicon';
$route['general_load_edit/(:num)'] = 'settings/general/load_edit/$1';
//database
$route['backup'] = 'settings/database';
$route['backup_db'] = 'settings/database/backup_db';
$route['restore_db'] = 'settings/database/restore_db';
$route['download_db/(:any)'] = 'settings/database/download_db/$1';
$route['delete_db/(:any)'] = 'settings/database/delete_db/$1';
//module
$route['module'] = 'settings/module';
$route['module_add'] = 'settings/module/add_data';
$route['module_edit/(:num)'] = 'settings/module/edit_data/$1';
$route['module_update'] = 'settings/module/update_data';
$route['module_delete'] = 'settings/module/delete_data';
$route['module_status'] = 'settings/module/change_status';
$route['module_check'] = 'settings/module/update_checkbox';
//operation
$route['operations'] = 'settings/operations';
$route['operations_add'] = 'settings/operations/add_data';
$route['operations_edit/(:num)'] = 'settings/operations/edit_data/$1';
$route['operations_update'] = 'settings/operations/update_data';
$route['operations_delete'] = 'settings/operations/delete_data';
//roles
$route['roles'] = 'settings/roles';
$route['roles_add'] = 'settings/roles/add_data';
$route['roles_update'] = 'settings/roles/update_data';
$route['roles_delete'] = 'settings/roles/delete_data';
$route['roles_edit/(:num)'] = 'settings/roles/edit_data/$1';
$route['roles_permissions/(:num)'] = 'settings/permissions/index/$1';
$route['roles_permission_edit'] = 'settings/permissions/edit_data';
//users
$route['users'] = 'settings/users';
$route['users_add'] = 'settings/users/add_data';
$route['users_update'] = 'settings/users/update_data';
$route['users_edit/(:num)'] = 'settings/users/edit_data/$1';
$route['users_delete'] = 'settings/users/delete_data';
$route['users_load_edit/(:num)'] = 'settings/users/load_edit/$1';
$route['users_load_pass/(:num)'] = 'settings/users/load_edit/$1';
$route['users_change_pass'] = 'settings/users/change_pass';
$route['users_status'] = 'settings/users/change_status';
$route['reset_password/(:num)'] = 'settings/users/reset_password/$1';
$route['users_check'] = 'settings/users/update_checkbox';
//profile
$route['profile'] = 'settings/profile';
$route['profile_edit'] = 'settings/profile/edit_data';
$route['profile_change_pass'] = 'settings/profile/change_pass';
//satuan
$route['satuan'] = 'data_master/satuan';
$route['satuan_add'] = 'data_master/satuan/add_data';
$route['satuan_edit/(:num)'] = 'data_master/satuan/edit_data/$1';
$route['satuan_update'] = 'data_master/satuan/update_data';
$route['satuan_check'] = 'data_master/satuan/update_checkbox';
//laporan
$route['lappenjualan'] = 'laporan/laporan';
$route['lappenjualan_list'] = 'laporan/laporan/laporan_list';
$route['lappenjualan_pdf/(:num)'] = 'laporan/laporan/laporan_pdf/$1';
//error
$route['404_override'] = 'error404';
$route['translate_uri_dashes'] = FALSE;
