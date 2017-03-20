<!--Page to view order details -->
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <meta name="theme-color" content="#2196F3">
    <title>The BooksTour</title>

    <!-- CSS  -->
    <link href="min/plugin-min.css" type="text/css" rel="stylesheet">
    <link href="min/custom-min.css" type="text/css" rel="stylesheet" >
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/angular_material/0.8.3/angular-material.min.css">
	 <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

	<style>

#wrap {
  margin: 10px 400px;
  display: inline-block;
  position: relative;
  height: 60px;
  float: right;
  padding: 0;
  position: relative;
}

input[type="text"] {
  height: 60px;
  font-size: 55px;
  display: inline-block;
  font-family: "Lato";
  font-weight: 100;
  border: none;
  outline: none;
  color: #555;
  padding: 3px;
  padding-right: 60px;
  width: 0px;
  position: absolute;
  top: 0;
  right: 0;
  background: none;
  z-index: 3;
  transition: width .4s cubic-bezier(0.000, 0.795, 0.000, 1.000);
  cursor: pointer;
}

input[type="text"]:focus:hover {
  border-bottom: 1px solid #BBB;
}

input[type="text"]:focus {
  width: 700px;
  z-index: 1;
  border-bottom: 1px solid #BBB;
  cursor: text;
}
input[type="submit"] {
  height: 67px;
  width: 63px;
  display: inline-block;
  color:red;
  float: right;
  background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAADNQTFRFU1NT9fX1lJSUXl5e1dXVfn5+c3Nz6urqv7+/tLS0iYmJqampn5+fysrK39/faWlp////Vi4ZywAAABF0Uk5T/////////////////////wAlrZliAAABLklEQVR42rSWWRbDIAhFHeOUtN3/ags1zaA4cHrKZ8JFRHwoXkwTvwGP1Qo0bYObAPwiLmbNAHBWFBZlD9j0JxflDViIObNHG/Do8PRHTJk0TezAhv7qloK0JJEBh+F8+U/hopIELOWfiZUCDOZD1RADOQKA75oq4cvVkcT+OdHnqqpQCITWAjnWVgGQUWz12lJuGwGoaWgBKzRVBcCypgUkOAoWgBX/L0CmxN40u6xwcIJ1cOzWYDffp3axsQOyvdkXiH9FKRFwPRHYZUaXMgPLeiW7QhbDRciyLXJaKheCuLbiVoqx1DVRyH26yb0hsuoOFEPsoz+BVE0MRlZNjGZcRQyHYkmMp2hBTIzdkzCTc/pLqOnBrk7/yZdAOq/q5NPBH1f7x7fGP4C3AAMAQrhzX9zhcGsAAAAASUVORK5CYII=) center center no-repeat;
  text-indent: -10000px;
  border: none;
  position: absolute;
  top: 0;
  right: 0;
  z-index: 2;
  cursor: pointer;
  opacity: 0.4;
  cursor: pointer;
  transition: opacity .4s ease;
}

input[type="submit"]:hover {
  opacity: 0.8;
}

.product-quantity {
  margin-left:30em;
  width: 12%;
  margin-top:-2em;
}

.det, .quantity, .price {
	margin-left:11.5em;
	font-size:20px;
	color: black;
}

.badge {
    
  
    display: inline-block;
    font-size: 12px;
    line-height: 1;
    padding: 3px 7px;
    text-align: center;
    vertical-align: middle;
    white-space: nowrap;
}



</style>
</head>
<body id="top" class="scrollspy">

<!-- Pre Loader -->
<div id="loader-wrapper">
    <div id="loader"></div>
 
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
 
</div>

<!--Navigation-->
 <div class="navbar-fixed">
 <ul id="dropdown1" class="dropdown-content">
	<li><a href="#!">Comic</a></li>
    <li class="divider"></li>
	<li><a href="#!">Fiction</a></li>
	<li class="divider"></li>
    <li><a href="#!">Horror</a></li>
	<li class="divider"></li>
    <li><a href="#!">Science fiction</a></li>
	<li class="divider"></li>
	<li><a href="#!">Romance</a></li>
	<li class="divider"></li>
    <li><a href="#!">Mystery</a></li>
	<li class="divider"></li>
	<li><a href="#!">Religion, Spirituality & New Age</a></li>
    <li class="divider"></li>
    <li><a href="#!">Series</a></li>
	<li class="divider"></li>
    <li><a href="#!">Fantasy</a></li>
	<li class="divider"></li>
    <li><a href="#!">Poetry</a></li>

</ul>
<nav>
    <div class="container"> 
	  <div class="nav-wrapper">
		 <a href="home.php" id="logo-container" class="brand-logo">THE BOOKSTOUR</a>
			<ul class="right hide-on-med-and-down">
				<li><a class="dropdown-button" href="#!" data-activates="dropdown1">Categories<i class="material-icons right">arrow_drop_down</i></a></li>
				<li><a><i class="material-icons">shopping_cart</i></a></li>
				<li><a href="#contact">Sign In</a></li>
				<li><a href="#">Sign Up</a></li>
		    </ul>
			<ul id="nav-mobile" class="side-nav">
				<li><a href="home.php"><i class="material-icons">shopping_cart</i></a></li>
				<li><a href="#contact">Sign In</a></li>
				<li><a href="#">Sign Up</a></li>
			</ul>
         <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
	   </div>
	</div>
</nav>
</div>


    <div class="container">
	<div class="col s12 card-panel">
	<div class="column-labels">
    <label class="det">Book</label>
    <label class="quantity">Quantity</label>
    <label class="price">Total</label>
  </div>

<ul class="collection">
<?php
include_once "func.php";

$obj= new func();
    $result=$obj->odet();
	if($result==false){
		echo "result is false";
	}else{
		$row=$obj->fetch();
		while($row){
		$files=$row['picture'];
	    $file="img/".$files;
			 echo "<li class='collection-item avatar'>";
			  echo "<img src='$file' alt=''  style='width:80px;height:100px;'>";
	  echo "<span class='title' style='font-size:20px;margin-left:2em'>{$row['pname']}</span>";   
	echo "<div class='product-quantity'>";
	echo "<input type='number' value='1' min='1' id='in'>";
	echo "</div>";
    echo "<button class='btn waves-effect red' style='margin-left:40em;margin-top:-5em' onclick='rem({$row['pno']})'> Remove</button>";
	echo "<p id='demo'></p>";
	echo "</br>";
		
 echo "</li>";		
		$row=$obj->fetch();
		}
	}
	
?>
</ul>
</div>
</div>
<script type="text/javascript">

 function remComplete(){
	   
   }
  
 function rem(pid){  
				var ajaxPageUrl="http://35.166.18.143/~gifty.mate-kole/store/ajax.php?cmd=2&pid="+pid;
        
				$.ajax(ajaxPageUrl,
{async:true,complete:remComplete});
}
      </script>



    <!--  Scripts-->
    <script src="min/plugin-min.js"></script>
    <script src="min/custom-min.js"></script>
	    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.6/angular.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.6/angular-animate.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.5/angular-aria.min.js"></script>

    <script src="//ajax.googleapis.com/ajax/libs/angular_material/0.8.3/angular-material.min.js"></script>
    
    <script src="//cdn.jsdelivr.net/angular-material-icons/0.4.0/angular-material-icons.min.js"></script>

    </body>
</html>
