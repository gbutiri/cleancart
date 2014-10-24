<h2>Products</h2>

<?php 
$sql_p = "SELECT * FROM products";
$prd_data = sqlGet($sql_p,'',array());

foreach ($prd_data as $product) {
    ?>
    <li><?php var_dump($product); ?></li>
    <?php
}
?>

<form class="ajaxform" data-action="add_new_product" data-module="admin_products">
    <div class="row">
        <div class="field-wrapper">
            <label class="arrow-right w160">Product Name</label>
            <input type="text" name="prod_name" placeholder="Product Name">
            <div class="err" id="prod_name_err"></div>
        </div>
    </div>
    <div class="row">
        <div class="">
            <input type="submit" value="Add Product" />
        </div>
    </div>
</form>