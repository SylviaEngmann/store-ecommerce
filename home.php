

<!DOCTYPE html>
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
@import url(http://fonts.googleapis.com/css?family=Lato:100,300,400,700);
@import url(https://raw.github.com/FortAwesome/Font-Awesome/master/docs/assets/css/font-awesome.min.css);

<!-- body { -->
	<!-- background: #DDD; -->
	<!-- font-size: 15px; -->
<!-- } -->
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

#toast-container {
	top: auto !important;
	right: auto !important;
	bottom: 10%;
	left: 7%;
}

.badge {
    
    margin-top:-30px;
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
				<li><a href="cart.php"><i class="material-icons">shopping_cart</i></a></li>
				<li><a href="#contact">Sign In</a></li>
				<li><a href="#">Sign Up</a></li>
		    </ul>
			<ul id="nav-mobile" class="side-nav">
				<li><a href="cart.php"><i class="material-icons">shopping_cart</i></a></li>
				<li><a href="#contact">Sign In</a></li>
				<li><a href="#">Sign Up</a></li>
			</ul>
         <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
	   </div>
	</div>
</nav>
</div>
<div id="wrap">
  <form action="" autocomplete="on">
  <input id="search" name="search" type="text" placeholder="What're you looking for ?"><input id="search_submit" value="Rechercher" type="submit">
  </form>
</div> 

<!--Work-->
<div class='section scrollspy' id='work'>
    <div class='container'>
			<div class='row'>	
        
			<?php
include_once "func.php";

if(isset($_REQUEST['search'])){
	$sr=$_REQUEST['search'];
    $object= new func();
    $ob= new func();
	
	$result=$object->search($sr);
	if($result==false){
		echo "result is false";
	}else{
		$row=$object->fetch();

    while($row){
		$files=$row['picture'];
	  $file="img/".$files;
			$price=$row['price'];
			$prices="GHc ".$price;		
		
		echo "<br>";
            echo "<div class='col s12 m4 l4'>";
               echo "<div class='card'>";
                echo "<div class='card-image waves-effect waves-block waves-light'>";
                  echo  "<img class='activator' src=$file>";
                echo    "</div>";
                echo    "<div class='card-content'>";


                        echo "<span class='card-title activator grey-text text-darken-4'>{$row['pname']}<i class='mdi-navigation-more-vert right'></i></span>";
						echo "<p>$prices</p";
						echo "</br>";
                    echo "</div>";
                    echo "<div class='card-reveal'>";
                    echo "<span class='card-title grey-text text-darken-4'>{$row['pname']}<i class='mdi-navigation-close right'></i></span>";
					echo "<span>{$row['description']}</span>";

						
echo "<div class='fixed-action-btn horizontal click-to-toggle'>";
echo "<a class='btn-floating btn-large red'>";
      echo "<i class='material-icons'>menu</i>";
   echo "</a>";
    echo "<ul>";
     echo "<li><a class='btn-floating red' id='add'><i class='material-icons'>shopping_cart</i></a></li>";
      echo "<li><a class='btn-floating yellow darken-1'><i class='material-icons'>favorite</i></a></li>";
    echo "</ul>";
  echo "</div>";
                   echo "</div>";
                echo "</div>";
            echo "</div>";
			
			
			$row=$object->fetch();
				}
	}
}
else{
	$num=0;
$obj= new func();
    $result=$obj->Blist();
	if($result==false){
		echo "result is false";
	}else{
		$row=$obj->fetch();
		while($row){
			$files=$row['picture'];
	  $file="img/".$files;
			$price=$row['price'];
			$prices="GHc ".$price;
			
		echo "<br>";
            echo "<div class='col s12 m4 l4'>";
               echo "<div class='card'>";
                echo "<div class='card-image waves-effect waves-block waves-light'>";
                  echo  "<img class='activator' src=$file>";
                echo    "</div>";
                echo    "<div class='card-content'>";


                        echo "<span class='card-title activator grey-text text-darken-4'>{$row['pname']}<i class='mdi-navigation-more-vert right'></i></span>";
					   echo "<p>$prices</p";
					
						echo "</br>";
                    echo "</div>";
                    echo "<div class='card-reveal'>";
                    echo "<span class='card-title grey-text text-darken-4'>{$row['pname']}<i class='mdi-navigation-close right'></i></span>";
			        echo "<span>{$row['description']}</span>";
					
					
echo "<div class='fixed-action-btn horizontal click-to-toggle'>";
echo "<a class='btn-floating btn-large red'>";
      echo "<i class='material-icons'>menu</i>";
   echo "</a>";
    echo "<ul>";
     echo "<li><a class='btn-floating red'><i data-position='bottom' class='material-icons' onclick='add({$row['pno']})'>shopping_cart</i></a></li>";
      echo "<li><a class='btn-floating yellow darken-1'><i class='material-icons'>favorite</i></a></li>";
    echo "</ul>";
  echo "</div>";
                   echo "</div>";
                echo "</div>";
            echo "</div>";
			
			$num++;
			$row=$obj->fetch();
				}
	}
}
  ?>          
</div>

<br>
  <ul class="pagination" align="middle">
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
    <li class="active"><a href="#!">1</a></li>
    <li class="waves-effect"><a href="#!">2</a></li>
    <li class="waves-effect"><a href="#!">3</a></li>
    <li class="waves-effect"><a href="#!">4</a></li>
    <li class="waves-effect"><a href="#!">5</a></li>
	<li class="waves-effect"><a href="#!">6</a></li>
    <li class="waves-effect"><a href="#!">7</a></li>
    <li class="waves-effect"><a href="#!">8</a></li>
    <li class="waves-effect"><a href="#!">9</a></li>
	    <li class="waves-effect"><a href="#!">10</a></li>
    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
  </ul>
</div>
</div>


<script type="text/javascript">

   function addComplete(){
	   
   }
  
 function add(pid){  
			Materialize.toast('Added to cart', 3000, 'rounded')
				var ajaxPageUrl="http://35.166.18.143/~gifty.mate-kole/store/ajax.php?cmd=1&pid="+pid;
				$.ajax(ajaxPageUrl,
{async:true,complete:addComplete});
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
