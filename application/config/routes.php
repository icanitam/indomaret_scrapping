<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['get_product_detail'] = 'welcome/get_product_detail';

$route['default_controller'] = 'welcome';
$route['404_override'] = 'welcome/page_404';
$route['translate_uri_dashes'] = FALSE;
