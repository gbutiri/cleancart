<?php 
include($_SERVER['DOCUMENT_ROOT'].'/config.php'); /* Site Configuration */ 
include(_DOCROOT.'/inc/sql-core.php'); /* Database stuff */
include(_DOCROOT.'/admin/html/pre-header.php'); /* Pre Processing (logins, logouts, etc) */
include(_DOCROOT.'/admin/html/header.php'); /* page header <head> <html> */
?>

Welcome to the dashboard. Login up above.

<?php include(_DOCROOT.'/admin/html/footer.php'); ?>
