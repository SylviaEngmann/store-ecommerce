<!DOCTYPE html>
<html>
<head> 
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>

  <title>{$page_title}</title>
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>

<body>
	<nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">{$nav_title}</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Settings</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Settings</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div class="container">
      <br>
      <h5><center>{$page_header}</center></h5>

     {foreach $rows as $order} 
     <li class='collection-item avatar'>";
      <span class='title' style='font-size:20px;margin-left:2em'>Order{$order.ono}</span>"; 
      <p>Book name: {$order.pname}</p>
      <p>Shipping info: {$order.address}</p>
      {/foreach} 

      </br>
      </li>
  </div>

    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
  
    <script>        
    </script>    
    
    

</body>
</html>

