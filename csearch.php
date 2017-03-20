<!--Page to search for customers -->
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <meta name="theme-color" content="#2196F3">
    <title>Admin Page</title>

  <!-- CSS  -->
  <link href="min/plugin-min.css" type="text/css" rel="stylesheet">
    <link href="min/custom-min.css" type="text/css" rel="stylesheet" >
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/angular_material/0.8.3/angular-material.min.css">
	 <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

</head>
<body>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="admin.html" class="brand-logo">THE BOOKSTOUR</a>
    </div>
  </nav>
  
  <div id="wrap">
  <form action="" autocomplete="on">
  <input id="search" name="search" type="text" placeholder="Who are you looking for ?"><input id="search_submit" value="Search" type="submit">
  </form>
</div> 

<div class="container">
	<div class="col s12 card-panel" style="margin-left:8em">
	<center><h2 style="font-family:Comic Sans MS">Customers</h2></center>
  <ul class="collection">
<?php	
include_once "func.php";  
	  if(isset($_REQUEST['search'])){
	$sr=$_REQUEST['search'];
    $object= new func();
    $ob= new func();
	
	$result=$object->sch($sr);
	if($result==false){
		echo "result is false";
	}else{
		$row=$object->fetch();

    while($row){
			
		 echo "<li class='collection-item avatar'>";
	  echo "<span class='title' style='font-size:20px;margin-left:2em'>Name: {$row['cname']}</span>"; 
     	  echo "<p>Street: {$row['street']}</p>";
		  echo "<p>Number: {$row['phone']}</p>";
		  echo "</br>";
		  echo "</li>";
		
			
			$row=$object->fetch();
				}
	}
}
?>
</ul>
</div>
</div> 
 
<!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>    
<script type="text/javascript">
           
        </script> 

  <script src="min/plugin-min.js"></script>
    <script src="min/custom-min.js"></script>
	    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.6/angular.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.6/angular-animate.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.5/angular-aria.min.js"></script>

    <script src="//ajax.googleapis.com/ajax/libs/angular_material/0.8.3/angular-material.min.js"></script>
    
    <script src="//cdn.jsdelivr.net/angular-material-icons/0.4.0/angular-material-icons.min.js"></script>

    </body>
</html>
