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
$route['default_controller'] = 'app/home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['register-email'] = 'app/register_email';
$route['verify-email'] = 'app/verify_email';
$route['register-details'] = 'app/registration_details';
// $route['home'] = 'app/home';
$route['sitter-registration'] = 'app/home/sitter_registration';
$route['sitter-examination'] = 'app/home/sitter_examination';
$route['add-services'] = 'app/home/add_services';
$route['add-availability'] = 'app/home/add_availability';
$route['add-images'] = 'app/home/add_images';
$route['sign-in'] = 'app/user_signin';
$route['logout'] = 'app/logout';

// ***** Beome a sitter ******
$route['become-sitter'] = 'app/becomesitter';
$route['become-sitter-service'] = 'app/becomesitter/select_service';


// ***** Normal User Profile
$route['profile'] = 'app/profile';
$route['profile/basic-profile'] = 'app/profile/basic_info';
$route['profile/phone'] = 'app/profile/phone_number';
$route['profile/payment'] = 'app/profile/payment';


// ***** Sitter User Profile
$route['sitter-profile'] = 'app/sitterprofile';
$route['sitter-profile/service/(:any)'] = 'app/sitterprofile/service_settings/$1';
$route['sitter-profile/basic-info'] = 'app/sitterprofile/basic_info';
$route['sitter-profile/phone-number'] = 'app/sitterprofile/phone_number';
$route['sitter-profile/details'] = 'app/sitterprofile/details';
$route['sitter-profile/photos'] = 'app/sitterprofile/photos';
$route['sitter-profile/your-pets'] = 'app/sitterprofile/your_pets';
$route['sitter-profile/add-pets'] = 'app/sitterprofile/add_pet_details';
$route['sitter-profile/testimonials'] = 'app/sitterprofile/testimonials';
$route['sitter-profile/safety-quiz'] = 'app/sitterprofile/safety_quiz';
$route['sitter-profile/background-check'] = 'app/sitterprofile/background_check';
$route['sitter-profile/my-profile'] = 'app/sitterprofile/my_profile';


// ***** Sitter User Profile
$route['search-result'] = 'app/searchresult';
