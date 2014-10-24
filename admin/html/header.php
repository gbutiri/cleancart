<!DOCTYPE html>
<html>
<head>
    <?php
    $more_css = '';
    $more_js = '';
    if (strrpos($_SERVER['SCRIPT_FILENAME'],'/modular.php') !== false) {
        // module was built in the modular.php file.
        $more_css .= ',/modules/admin_'.$module.'/admin_'.$module.'-main.css';
        $more_js .= ',/modules/admin_'.$module.'/admin_'.$module.'-main.js';
    }
    ?>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="/cache.css-/css/vbox.css,/admin/css/main.css<?php echo $more_css; ?>" />
    
	<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="/cache.js-/js/vbox.js,/js/ajax-controller.js,/admin/js/main.js<?php echo $more_js; ?>"></script>
</head>

<body>
<div class="header">
    <?php 
    //var_dump($_SERVER['SCRIPT_FILENAME']);
    $strpos_slash = strrpos($_SERVER['SCRIPT_FILENAME'],"/");
    $strpos_dot = strrpos($_SERVER['SCRIPT_FILENAME'],".");
    $length = $strpos_dot - $strpos_slash;
    $class = substr($_SERVER['SCRIPT_FILENAME'],$strpos_slash+1,$length-1);
    if ($class == 'modular') {
        //var_dump($_GET['query']);
        $moduleBits = explode("/",$_GET['query']);
        //$moduleClass = 
        $class = $moduleBits[0];
    }
    //var_dump($class);
    
    
    ?>
	<nav class="<?php echo $class; ?>">
		<a class="index" href="/admin/">Dashboard</a>
        
        <?php if (_SITEADMIN == '') { ?>
        <a class="tmbtn" data-action="show_admin_login" href="#">Login</a>
        <?php } else { ?>
        <a class="users" href="/admin/section/users">Users</a>
        <a class="products" href="/admin/section/products">Products</a>
        <a class="orders" href="/admin/section/orders">Orders</a>
        <a class="categories" href="/admin/section/categories">Categories</a>
        <a class="reports" href="/admin/section/reports">Reports</a>
        <a class="tmbtn" data-action="logout" href="#">Logout</a>
        <?php } ?>
        <div class="clearfix"></div>
	</nav>
</div>
<div class="page">
	<div class="main-content">