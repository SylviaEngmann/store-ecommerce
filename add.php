
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>ADMIN PAGE</title>

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
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">BOOKSTOUR</a>
    
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
    <div class="container">
	<div class="col s12  card-panel">
      <br><br>
       <form action="upload.php" method="post" enctype="multipart/form-data">
        <center><h4 style="font-family:Comic Sans MS">Add Books</h4></center>
        <div class="row margin">
          <div class="input-field col l12 s12">
        <input class="validate" required id="name" name="name" type="text">
            <label for="name">Title</label>
          </div>
        </div>
		<div class="row margin">
          <div class="input-field col l12 s12">
          <input class="validate" required id="quant" name="quant" type="number">
            <label for="quant">Quantity</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col l12 s12">
            <input class="validate" required id="price" name="price" type="number" step="0.01">
            <label for="price">Price</label>
          </div>
        </div>
		
        <div class="row margin">
          <div class="input-field col s12">
          <input id="olevel" name="olevel" type="number" class="validate" required>
          <label for="olevel">Order Level</label>
          </div>
        </div>
		
		<div class="row margin">
          <div class="input-field col s12">
          
            <input id="file" name="file" type="file" class="validate" >
            
          </div>
        </div>
		
        <div class="row">
          <div class="input-field col s12">
            <center><button type="submit" name="btn-upload" class="btn waves-effect waves-teal" onclick="add()"><i class="material-icons left">add</i>Add</button></center> 
			
		  </div>
        </div>
        

      </form>
      <br><br>
	</div>
    </div>
  


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      
      </div>

    </div>
    <br><br>

    <div class="section">

    </div>
  </div>

  <!-- <footer class="page-footer orange"> -->
    <!-- <div class="container"> -->
      <!-- <div class="row"> -->
        
      <!-- </div> -->
    <!-- </div> -->
    
  <!-- </footer> -->


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">

      </script>
  
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
