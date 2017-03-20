<?php
include_once 'dbconfig.php';

$file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="img/";
$name=$_REQUEST['name'];
$quant=$_REQUEST['quant'];
$price=$_REQUEST['price'];
$olevel=$_REQUEST['olevel'];

$new_size = $file_size/1024;  
	// new file size in KB
	
	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case
	
	$final_file=str_replace(' ','-',$new_file_name);
	
	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
$sql="INSERT INTO parts(pname,qoh,price,olevel,picture) VALUES('$name','$quant','$price','$olevel','$final_file')";
mysql_query($sql);
	}
?>

<script>
		alert('successfully added');
        window.location.href='add.php';
        </script>