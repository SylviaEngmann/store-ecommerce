<?php
/* Smarty version 3.1.30, created on 2017-03-17 10:29:44
  from "/opt/lampp/htdocs/store/proj/lib/smarty/templates/empdashboard.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58cbac88c1b442_77159514',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '777b5e283859845dab32e48033e35cd6877f0de5' => 
    array (
      0 => '/opt/lampp/htdocs/store/proj/lib/smarty/templates/empdashboard.tpl',
      1 => 1489742979,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58cbac88c1b442_77159514 (Smarty_Internal_Template $_smarty_tpl) {
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

     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'order');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
?> 
     <li class='collection-item avatar'>";
      <span class='title' style='font-size:20px;margin-left:2em'>Order<?php echo $_smarty_tpl->tpl_vars['order']->value['ono'];?>
</span>"; 
      <p>Book name: <?php echo $_smarty_tpl->tpl_vars['order']->value['pname'];?>
</p>
      <p>Shipping info: <?php echo $_smarty_tpl->tpl_vars['order']->value['address'];?>
</p>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 

      </br>
      </li>
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
    <?php echo '</script'; ?>
>    
    
    

</body>
</html>

<?php }
}
