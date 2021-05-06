<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// $route['api/budaya/(:num)'] = 'api/budaya/id/$1'; // Example 4
$route['api/budaya'] = 'api/budaya';
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = true;

/*
| -------------------------------------------------------------------------
| Sample REST API Routes
| -------------------------------------------------------------------------
*/
$route['api/example/users/(:num)'] = 'api/example/users/id/$1'; // Example 4
$route['api/example/users/(:num)(\.)([a-zA-Z0-9_-]+)(.*)'] = 'api/example/users/id/$1/format/$3$4'; // Example 8

// $route['api/budaya/transaksi/(:num)'] = 'api/budaya/transaksi/id/$1'; // Example 4
// $route['api/budaya/transaksi/(:num)(\.)([a-zA-Z0-9_-]+)(.*)'] = 'api/budaya/transaksi/id/$1/format/$3$4'; // Example 8
