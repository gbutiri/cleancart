<?php 
function render_new_category_form() {
    global $dbi;
    ?>
    <form class="ajaxform" data-action="add_new_category" data-module="admin_products">
        <div class="row">
            <div class="field-wrapper">
                <label class="arrow-right w160">Category Name</label>
                <input type="text" name="cat_name" placeholder="Category Name">
                <div class="err" id="cat_name_err"></div>
            </div>
        </div>
        <div class="row">
            <div class="field-wrapper">
                <label class="arrow-right w160">Parent Category</label>
                <?php $cats = get_all_categories(); ?>
                <select name="parent_cat">
                    <option value="">None</option>
                    <?php
                    foreach ($cats as $cat) {
                        ?>
                        <option value="<?php echo $cat['cat_id']; ?>"><?php echo $cat['cat_name']; ?></option>
                        <?php
                    }
                    ?>
                </select>
                <div class="err" id="cat_parent_cat"></div>
            </div>
        </div>
        <div class="row">
            <div class="">
                <input type="submit" value="Add Category" />
            </div>
        </div>
    </form>
    <?php
}
?>