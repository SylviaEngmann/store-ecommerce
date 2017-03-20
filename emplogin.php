<?php

require('/opt/lampp/htdocs/store/proj/lib/smarty/Smarty.class.php');

$smarty = new Smarty;

$smarty->template_dir = '/opt/lampp/htdocs/store/proj/lib/smarty/templates';
$smarty->compile_dir = '/opt/lampp/htdocs/store/proj/lib/smarty/templates_c';
$smarty->cache_dir= '/opt/lampp/htdocs/store/proj/lib/smarty/cache';
$smarty->config_dir= '/opt/lampp/htdocs/store/proj/lib/smarty/config';

$smarty->assign("page_title", "Employee Login Page");
$smarty->assign("nav_title", "THE BOOKSTour"); 
$smarty->assign("page_header", "Login");
$smarty->assign("name_placeholder", "Employee Name");
$smarty->assign("password_placeholder", "Password");


$smarty->display('emplogin.tpl');

?>