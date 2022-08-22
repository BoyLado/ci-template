<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'NavigationController/login';
$route['404_override'] = 'NavigationController/page404';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'NavigationController/login';
$route['users'] = 'portal/NavigationController/users';
$route['dashboard'] = 'portal/NavigationController/dashboard';

