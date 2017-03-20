<?php
/* Smarty version 3.1.30, created on 2017-03-16 16:13:36
  from "/opt/lampp/htdocs/store/proj/lib/smarty/templates/emplogin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58caaba09baa76_77499150',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7431f67b6973ea9f397abf5ac7b7b2b8508ddf69' => 
    array (
      0 => '/opt/lampp/htdocs/store/proj/lib/smarty/templates/emplogin.tpl',
      1 => 1489677193,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58caaba09baa76_77499150 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head> 
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>

  <title><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</title>
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>

<body>
	<nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"><?php echo $_smarty_tpl->tpl_vars['nav_title']->value;?>
</a>
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
      <h5><center><?php echo $_smarty_tpl->tpl_vars['page_header']->value;?>
</center></h5>
      <form>
        <div class="input-field">
          <input placeholder="<?php echo $_smarty_tpl->tpl_vars['name_placeholder']->value;?>
" id="ename" type="text" required>
        </div>
        <div class="input-field">
          <input placeholder="<?php echo $_smarty_tpl->tpl_vars['password_placeholder']->value;?>
" id="pword" type="password" required>
        </div>
        </form>
      <div class="row center">
      <button onclick= "emplogin()" class="btn">Login</button>
      </div>
    </div>

    <?php echo '<script'; ?>
 src="js/jquery-2.1.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/materialize.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/init.js"><?php echo '</script'; ?>
>
  
    <?php echo '<script'; ?>
>    
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
        
        <?php echo '</script'; ?>
>    
    
    

</body>
</html><?php }
}
