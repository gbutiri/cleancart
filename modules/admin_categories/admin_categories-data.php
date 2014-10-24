<?php 
function get_all_categories() {
    //global $dbi;
    //var_dump($dbi);
    $sql_c = "SELECT * FROM categories";
    $cat_data = sqlGet($sql_c,'',array());
    return $cat_data;
}
?>