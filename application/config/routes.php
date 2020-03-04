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
$route['default_controller'] = 'pages';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
//visitor
$route['Home']="pages/index";
$route['Logout']="pages/logout";
$route['Verify']="pages/receiveotp";
$route['Party-Logout']="pages/partylogout";
$route['Contact-Us']="pages/contactus";
$route['ChangePassword']="pages/forgot";
$route['About-Us']="pages/aboutus";
$route['News']="pages/news";
$route['Election-Result/(:num)']="pages/result/$1";
$route['Faq']="pages/faq";
$route['Feedback']="pages/feedback";
$route['Login']="pages/login";
$route['Terms-And-Condition']="pages/termsandcondition";
$route['Privacy-Policy']="pages/privacypolicy";
$route['Registration']="pages/registration";
$route['Dashboard']="pages/dashboard";
$route['Change-Password']="pages/changepassword";
$route['Party-Change-Password']="pages/partychangepassword";
$route['Id-Proof']="pages/idproof";
$route['Basic-Info']="pages/basicinfo";
$route['Party-Basic-Info']="pages/partybasicinfo";
$route['Forgot-Password']="pages/forgotpassword";
$route['Verify-Email']="pages/verifyemail";
$route['Add-Party']="pages/partyprofile";
$route['Add-Candidate']="pages/addcandidate";
$route['Candidate']="pages/candidate";
$route['Edit-Candidate/(:any)']="pages/editcandidate/$2";
$route['CandidateInfo']="pages/candidatedata";
$route['Candidate-Review']="pages/candidatereview";
$route['Show-Schedule']="pages/showschedule";
$route['Candidate-Info/(:any)']="pages/candidateinfo/$2";
$route['Practise']="pages/practise";
$route['Add-Enhanced']="pages/addenhance";
$route['Candidate-Dashboard']="pages/candidatedashboard";
$route['Party-Dashboard']="pages/partydashboard";
$route['Party']="pages/party";
$route['Election']="pages/election";
$route['Success-Vote']="pages/successvote";
$route['Give-Election/(:any)']="pages/giveelection/$2";
$route['Cast-Vote/(:any)']="pages/castvote/$2";
$route['Shedule-Candidate/(:any)/(:any)']="pages/shedulecandidate/$2/$3";
$route['Party-Info/(:any)']="pages/partyinfo/$2";
$route['Party-Success']="pages/partysuccess";
$route['Registration-Success']="pages/registrationsuccess";
$route['Block-Candidate']="pages/blockcandidate";
$route['Unblock-Candidate']="pages/unblockcandidate";
$route['delete/(:any)/(:any)']="pages/delete/$2/$3";
//admin

$route['Admin-Home']="authorize/index";
$route['View-Party/(:any)']="authorize/viewparty/$2";
$route['Admin-Logout']="authorize/logout";
$route['Admin-Dashboard']="authorize/dashboard";
$route['Manage-Contact-Us']="authorize/contact";
$route['Manage-Party']="authorize/manageparty";
$route['Manage-Voter']="authorize/managevoter";
$route['Manage-Feedback']="authorize/feedback";
$route['Manage-State']="authorize/state";
$route['Manage-City']="authorize/city";
$route['Manage-Area']="authorize/area";
$route['Manage-Landmark']="authorize/landmark";
$route['Manage-Forgot-Password']="authorize/forgotpassword";
$route['Manage-Email-Subscriber']="authorize/emailsubscriber";
$route['Manage-News']="authorize/news";
$route['Manage-Change-Password']="authorize/changepassword";
$route['Manage-Category']="authorize/category";
$route['Manage-Banner']="authorize/banner";
$route['Manage-Schedule']="authorize/manageschedule";
$route['Delete/(:any)/(:any)']="authorize/delete/$2/$3";
$route['View-Proof/(:any)']="authorize/viewproof/$2";

//update
$route['Edit/(:any)']="edit/state/$2";