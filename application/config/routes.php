<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['default_controller'] = 'header';
// $route['default_controller'] = 'form';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['header'] = 'header/visa_header';
$route['featured'] = 'header/index';
$route['footer'] = 'header/index';
$route['reviews'] = 'header/customer_reviews';
$route['contact'] = 'header/contact';
$route['form'] = 'header/load_form_data';
$route['destination'] = 'header/load_form_data';
$route['form'] = 'form/index';
$route['nationality/get_countries'] = 'nationality/get_countries';
$route['nature'] = 'header/nature_view';

