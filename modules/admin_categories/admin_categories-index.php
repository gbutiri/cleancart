<h2>Categories</h2>

<?php
include(_DOCROOT.'/modules/admin_categories/admin_categories-templates.php');
    include(_DOCROOT.'/modules/admin_categories/admin_categories-data.php');

$cats = get_all_categories();

?>

<a href="#" class="tmbtn" data-module="admin_categories" data-action="show_add_category_form">Add a category</a>

<ul id="categories">
<?php
foreach ($cats as &$category) {
    ?>
    <li><?php var_dump($category); ?></li>
    <?php
}
?>
</ul>

<?php render_new_category_form(); ?>