<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['import/cars']='import/cars';
$route['topcars']='topcars';

$route['import']='import';

$route['cars/create']='cars/create';
$route['cars/update']='cars/update';

$route['trucks/create']='trucks/create';
$route['trucks/update']='trucks/update';

$route['trains/create']='trains/create';
$route['trains/update']='trains/update';

$route['motorcycles/create']='motorcycles/create';
$route['motorcycles/update']='motorcycles/update';


$route['cars/(:any)'] = 'cars/view/$1';
$route['trucks/(:any)'] = 'trucks/view/$1';
$route['motorcycles/(:any)'] = 'motorcycles/view/$1';
$route['trains/(:any)'] = 'trains/view/$1';

$route['import/']='import/';

$route['cars']='cars/index';


$route['trucks']='trucks/index';

$route['motorcycles']='motorcycles/index';

$route['trains']='trains/index';


$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
