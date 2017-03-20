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
      <form>
        <div class="input-field">
          <input placeholder="{$name_placeholder}" id="ename" type="text" required>
        </div>
        <div class="input-field">
          <input placeholder="{$password_placeholder}" id="pword" type="password" required>
        </div>
        </form>
      <div class="row center">
      <button onclick= "emplogin()" class="btn">Login</button>
      </div>
    </div>

    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
  
    <script>    
    function loginComplete(xhr,status){
                if(status!="success"){
                    //divStatus.innerHTML="error sending request";
                    alert("error ");
                    return;
                }
                divStatus=xhr.responseText;
                var obj=JSON.parse(xhr.responseText);
                if(obj.result==0){
                    divStatus=obj.message;
                }else{
                    //divStatus.innerHTML= "Log in Success";
                      alert("Log in Success");
                      window.location="empdashboard.php";
                }
                currentObject=null;
            }
            
            function emplogin()
            {
              var username = document.getElementById("ename").value;
              var password = document.getElementById("pword").value;
             
                $.ajax("functions.php?cmd=5&username="+username+"&password="+password,{
                  async:true,complete:loginComplete
                });    
            }
        
        </script>    
    
    

</body>
</html>