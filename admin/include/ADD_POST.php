<?php
//$_FILES IS A SUPER GLOBAL VARIABLE THAT HOLDS THE NAME OF THE IMAGE
//TEMP MEANS TEMPRORY LOCATION
if(isset($_POST['create_post']))
{
    $product_status=  escape($_POST['status']);
    $product_title=  escape($_POST['title']);
    $product_author=  escape($_POST['author']);
    $product_catagory_id=  escape($_POST['product_catagory_id']);
    $product_image=$_FILES['image']['name'];
    $product_image_temp=$_FILES['image']['tmp_name'];
    $product_content=  escape($_POST['product_content']);
    $product_date=date('d-m-y');
    $product_count=4;
    $product_size=  escape($_POST['product_size']);
    $product_price=  escape($_POST['product_price']);
move_uploaded_file($product_image_temp,"../upload/categories_pic/$product_image");
    $query="INSERT INTO posts( post_status, post_title, Author,post_date,post_image, post_content, post_comment_count, price, size)";
    $query .=" VALUES(' $product_status','  $product_title','$product_author','$product_date','$product_image','$product_content','$product_count','$product_price','$product_size')";
$execute=mysqli_query($conn,$query);

    if(!$execute)
    {
        die("فشل فى الاتصال ىى الداتا بيس".mysqli_error($conn));
    }
}
?>
<form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="title">عنوان القطعة</label>
        <input type="text" class="form-control" name="title">
    </div>
    <div class="form-group">
        <label for="title">رقم الفئة</label>
        <input type="text" class="form-control" name="product_catagory_id">
    </div>
    <div class="form-group">
        <label for="post_catagory">الفئة</label>
        <select class="form-control" name="status">
            <?php

            $sql="SELECT * FROM categories";
            $result=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_assoc($result))
            {
                $catagory=$row['cat_title'];
                echo "<option >$catagory</option>";
            }
            ?>
        </select>
    </div>
    
    <div class="form-group">
        <label for="author">البائع</label>
        <input type="text" class="form-control" name="author">
    </div>

    <div class="form-group">
        <label for="post_image">صورة القطعة</label>
        <input type="file"  name="image">
    </div>

    </div>
    <div class="form-group">
        <label for="product_size">مقاس القطعة</label>
       <input type="text" name="product_size" class="form-control">
    </div>
    <div class="form-group">
        <label for="post_content">شرح عن القطعة</label>
        <textarea class="form-control" name="product_content"  id="body" cols="30" rows="10"></textarea>
    </div>
    <div class="form-group">
        <label for="product_price">سعر الفطعة</label>
        <input type="text" class="form-control" name="product_price">
    </div>

    <input type="submit" class="btn btn-primary" value="نشر المنتج" name="create_post">
</form>
