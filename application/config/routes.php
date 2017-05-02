<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
$route['default_controller'] = 'main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['sejarah'] = 'main/sejarah';
$route['warisan'] = 'main/warisan';
$route['sekilas'] = 'main/sekilas';
$route['alam'] = 'main/alam';
$route['detailwisata/:num'] = 'main/detailwisata';
$route['kuliner'] = 'main/kuliner';
$route['belanja'] = 'main/belanja';
$route['penginapan'] = 'main/penginapan';
$route['detailpenginapan/:num'] = 'main/detailpenginapan';
$route['lokasi'] = 'main/lokasi';
$route['allberita'] = 'main/allberita';
$route['detailberita/:num'] = 'main/detailberita';
$route['allevent'] = 'main/allevent';
$route['detailevent/:num'] = 'main/detailevent';
$route['login'] = 'dashboard/login';
$route['dashboard'] = 'dashboard';
$route['admin'] = 'dashboard/admin';
$route['inputlokasi'] = 'dashboard/inputlokasi';
$route['listadmin'] = 'dashboard/listadmin';
$route['listuser'] = 'dashboard/listuser';
$route['user'] = 'dashboard/user';
$route['wisata'] = 'dashboard/wisata';
$route['uploadwisata/:num'] = 'dashboard/uploadwisata';
$route['dpenginapan'] = 'dashboard/penginapan';
$route['uploadpenginapan/:num'] = 'dashboard/uploadpenginapan';
$route['event'] = 'dashboard/event';
$route['uploadevent/:num'] = 'dashboard/uploadevent';
$route['berita'] = 'dashboard/berita';
$route['uploadberita/:num'] = 'dashboard/uploadberita';
$route['upload'] = 'upload';
$route['notifikasi'] = 'dashboard/notifikasi';
