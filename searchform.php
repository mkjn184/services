<form method="get" action="<?php echo home_url('cars-search'); ?>">
    <label for="">Service Name</label>
    <input type="text" name="sname" id="">
    <br>

    <label for="">Service Price</label>
    <input type="text" name="sprice" id="">
    <br>

    <?php
    $serve_cats = get_terms('ssw_taxsonomies');
    ?>

    <label for="">Service category</label>
    <select name="serv_cat" id="">
        <option value="">Select Service category</option>
        <?php
        foreach($serve_cats as $serve_cat){
            ?>
            <option value="<?php echo $serve_cat->term_id; ?>"><?php echo $serve_cat->name; ?></option>
            <?php
        }
        ?>

    </select>
    <br>
    <input type="submit" value="Search">
</form>