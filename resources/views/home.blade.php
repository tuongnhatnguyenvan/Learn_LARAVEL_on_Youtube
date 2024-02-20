<h1 style="text-align: center;">Tường Nhật tập tành học Laravel</h1>
<?php 
echo date('Y-m-d H:i:s');
?>
<a href="<?php echo route('admin.show-form')?>">show more</a>
<a href="<?php echo route('admin.product.add')?>">show product</a>
<a href="<?php echo route('admin.unicode', ['id'=>1, 'slug'=>'tin-tuc-the-gioi'])?>">show unicode</a>