<h1>Upload file</h1>
<form action="<?php echo route('categories.upload') ?>?id=1" method="post" enctype="multipart/form-data">
    <div>
        <input type="file" name="photo" id="" />
    </div>
    <?php echo csrf_field() ?>
    <!-- <input type="hiden" name="_token" value="<?php echo csrf_token() ?>" /> -->
    <button type="submit">Upload</button>
</form>