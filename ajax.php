<?php
$cmd=$_REQUEST['cmd'];

	switch($cmd){
		
		case 1:
			add();		
			break;
			
		case 2:
			remove();		
			break;
		
		
		default:
			echo "wrong cmd";
			break;
	}
	
	
	function add(){
		
		include_once("func.php");
		$obj=new func();
		
		$pid=$_REQUEST['pid'];
		
		$obj->order($pid);
		
	}
	
	function remove(){
		
		include_once("func.php");
		$obj=new func();
		
		$pid=$_REQUEST['pid'];
		
		$obj->remove($pid);
		
	}
	
?>