<?php

require('/opt/lampp/htdocs/store/proj/lib/smarty/Smarty.class.php');

$smarty = new Smarty;

$smarty->template_dir = '/opt/lampp/htdocs/store/proj/lib/smarty/templates';
$smarty->compile_dir = '/opt/lampp/htdocs/store/proj/lib/smarty/templates_c';
$smarty->cache_dir= '/opt/lampp/htdocs/store/proj/lib/smarty/cache';
$smarty->config_dir= '/opt/lampp/htdocs/store/proj/lib/smarty/config';

$smarty->assign("page_title", "Employee Dashboard");
$smarty->assign("nav_title", "THE BOOKSTour"); 
$smarty->assign("page_header", "Dashboard");

  include_once "objects.php";  
    $obj= new object();
  	$result=$obj->getOrders();
  	$rows=array();
  if($result==false){
    echo "result is false";
  }else{
    $rows=$obj->fetch();
	}

$smarty->assign("rows",$rows);
$smarty->display('empdashboard.tpl');

?>