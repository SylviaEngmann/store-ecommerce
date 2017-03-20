<!--Page to view books available -->
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Home</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>           
      <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>  -->
   
      
<style type="text/css">

form {
    
    vertical-align: middle;
}

</style>
  
  </head>
<body>
 <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="admin.html" class="brand-logo">BOOKSTOUR</a>
    
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
    <div class="container">
	<div class="col s12 card-panel" style="margin-left:8em">
	<center><h2 style="font-family:Comic Sans MS">List Of Books</h2></center>
  <ul class="collection">
<?php


include_once "func.php";

	$obj= new func();
    $result=$obj->Blist();
	if($result==false){
		echo "result is false";
	}else{
		$row=$obj->fetch();
		
		while($row){
	  echo "<li class='collection-item avatar'>";
	  echo "<span class='title' style='font-size:20px;margin-left:2em'>Title: {$row['pname']}</span>"; 
      		  echo "</br>";
	  echo "<span class='title' style='font-size:20px;margin-left:2em'>Quantity: {$row['qoh']}</span>"; 
	  		  echo "</br>";
	  echo "<span class='title' style='font-size:20px;margin-left:2em'>Price: {$row['price']}</span>"; 
      		  echo "</br>";
	  echo "<span class='title' style='font-size:20px;margin-left:2em'>Order level: {$row['olevel']}</span>"; 

		  echo "</br>";
	  echo "</br>";
	  echo '<a href="http://35.166.18.143/~gifty.mate-kole/store/edit.php?pno='.$row['pno'].'&pname='.$row['pname'].'&qoh='.$row['qoh'].'&price='.$row['price'].'&olevel='.$row['olevel'].'"><button id="btn_menu" class="btn waves-effect waves-teal" style="margin-left:2em">Edit</button></a>';
	  echo "</li>";
	
	  $row=$obj->fetch();
		}
	}
	
?>

</ul>
 
  </div>
</div>
  


  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">

      </script>
  
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>