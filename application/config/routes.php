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
$route['default_controller'] = 'index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

##ADMIN ROUTES
$route['admin/login']     = 'admin/index/login';
$route['admin/logout']    = 'admin/index/logout';
$route['admin/meta-info'] = 'admin/Meta_info/index';
$route['admin/meta-info/manage'] = 'admin/Meta_info/manage';
$route['admin/meta-info/manage/(:any)'] = 'admin/Meta_info/manage/$1';
$route['admin/meta-info/delete/(:any)'] = 'admin/Meta_info/delete/$1';

##FRONT PAGES
$route['about-us']         = 'pages/about_us';
$route['loan-programs']    = 'pages/load_programs';
$route['rate-calculator']  = 'pages/rate_calculator';
$route['closed-loan']      = 'pages/closed_loan';
$route['forms']            = 'pages/forms';
$route['contact-us']          = 'pages/contact';
$route['lender-types']     = 'pages/lender_types';
$route['mortage-types']    = 'pages/mortage_types';
$route['key-concepts']     = 'pages/key_concepts';
$route['qualification']    = 'pages/qualification';
$route['loan-process']     = 'pages/loan_process';
$route['terms-to-know']    = 'pages/terms_and_conditions';
$route['faqs']             = 'pages/faq';