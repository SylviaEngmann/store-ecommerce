<?php
$dbhost = "localhost";
$dbuser = "gifty.mate-kole";
$dbpass = "8c34293c7b8b4c0e";
$dbname = "dbms_gifty.mate-kole";

mysql_connect($dbhost,$dbuser,$dbpass) or die('cannot connect to the server'); 
mysql_select_db($dbname) or die('database selection problem');
?>