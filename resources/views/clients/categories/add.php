<h1>Them san pham</h1>
<form action="<?php echo route('categories.add')?>" method="post">
    <div>
        <input type="text" name="category_name" placeholder="Ten chuyen muc" />
    </div>
    <?php echo csrf_field()?>
    <!-- <input type="hiden" name="_token" value="<?php echo csrf_token()?>" /> -->
    <button type="submit">Them chuyen muc</button>
</form>