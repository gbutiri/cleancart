<?php 
include($_SERVER['DOCUMENT_ROOT'].'/config.php'); /* Site Configuration */

$action = isset($_GET['action']) ? htmlspecialchars($_GET['action']) : 'bad_call';
if(function_exists($action)){call_user_func($action);}else{echo json_encode(array('error' => $action . " does not exist."));exit(0);}

include(_DOCROOT.'/admin/html/pre-header.php');
include(_DOCROOT.'/inc/sql-core.php');

function show_add_category_form() {
    global $dbi;
    ob_start();
    include(_DOCROOT.'/modules/admin_categories/admin_categories-data.php');
    include(_DOCROOT.'/modules/admin_categories/admin_categories-templates.php');
    render_new_category_form();
    $htmlForm = ob_get_contents();
    ob_end_clean();
    
    echo json_encode(array(
        'vbox' => $htmlForm,
    ));
}

function bad_call() {
	echo json_encode(array(
		'success' => false,
		'message' => 'no function specified'
	));
}

?>