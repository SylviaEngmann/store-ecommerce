<!--Page to edit products -->
<?php
if (isset($_REQUEST['pno'])){
$pno=$_REQUEST['pno'];
$pname=$_REQUEST['pname'];
$qoh=$_REQUEST['qoh'];
$price=$_REQUEST['price'];
$olevel=$_REQUEST['olevel'];

}
?>

<html lang="en">
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
	<div class="col s12  card-panel">
      <br><br>
       <form action="eList.php" method="post" enctype="multipart/form-data">
        <center><h4>Edit</h4></center>
	    <input  id="pno" name="pno" type="text" value="<?php echo $pno ?>" hidden>
        <div class="row margin">
          <div class="input-field col l12 s12">
		  <p style="color:blue">Title</p>
        <input class="validate" required id="pname" name="pname" type="text" value="<?php echo $pname ?>">
          </div>
        </div>
		<div class="row margin">
          <div class="input-field col l12 s12">
				  <p style="color:blue">Quantity</p>
		  <input class="validate" required id="qoh" name="qoh" type="number" value="<?php echo $qoh ?>">
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col l12 s12">
            <p style="color:blue">Price</p>
			<input class="validate" required id="price" name="price" type="number" step="0.01" value="<?php echo $price ?>">
          </div>
        </div>
		
        <div class="row margin">
          <div class="input-field col s12">
          <p style="color:blue">Order Level</p>
		  <input id="olevel" name="olevel" type="number" class="validate" required value="<?php echo $olevel ?>">
          </div>
        </div>
		
        <div class="row">
          <div class="input-field col s12">
            <center><button type="submit" name="btn-upload" class="btn waves-effect waves-teal" onclick="add()">Edit</button></center> 
		</div>
        </div>
        

      </form>
      <br><br>
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

