<?php
if(isset($_GET['p_id']))
{
    $the_post_id=$_GET['p_id'];
}
$query="SELECT * From posts where post_id='$the_post_id'";
$postresult=mysqli_query($conn,$query);
if(!$postresult)
{
    echo "Error in the query".mysqli_error($conn);
}
if(isset($_POST['update_post']))
{
    $product_status=$_POST['status'];
    $product_title=$_POST['title'];
    $product_author=$_POST['author'];
    $product_catagory_id=$_POST['product_catagory_id'];
    $product_image=$_FILES['image']['name'];
    $product_image_temp=$_FILES['image']['tmp_name'];
    $product_content=$_POST['product_content'];
    $product_size=$_POST['product_size'];
    $product_price=$_POST['product_price'];
    move_uploaded_file($product_image_temp,"../upload/categories_pic/$product_image");
    
     $query="SELECT randsolt FROM users";
     $select_rand_query=  mysqli_query($conn, $query);
     if(!$select_rand_query)
     {
         die("query failed".mysqli_error($conn));
     }
   $row=  mysqli_fetch_assoc($select_rand_query);
   $salt=$row['randsolt'];
   $password=  crypt($password,$salt);
    if(empty($post_image)) {
        $query = "SELECT * FROM posts WHERE post_id=$the_post_id";
        $selectimage = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($selectimage)) {
            $post_image = $row['post_image'];
        }
        if (!$selectimage) {
            echo "image was not found or empty";
        }
    }

    $query="UPDATE posts SET post_status='$product_status',post_catagory_id='$product_catagory_id',post_title=' $product_title',
    Author=' $product_author',post_date='now(),',post_image=' $product_image',post_content=' $product_content',price='$product_price',size='$product_size' WHERE post_id='$the_post_id'";
    $execte=mysqli_query($conn,$query);
    if(!$execte)
    {
        echo "error in the query".mysqli_error($conn);
    }
    echo "<p class='bg-success'>Post upadted.<a href='../posts.php?p_id='{$the_post_id}'>view posts</a></p>";
}
while($row=mysqli_fetch_assoc($postresult)) {
    $post_id = $row['post_id'];
    $author = $row['Author'];
    $post_title = $row['post_title'];
    $post_catagory_id = $row['post_catagory_id'];
    $status = $row['post_status'];
    $post_image = $row['post_image'];
    $post_tags = $row['post_tags'];
    $post_date = $row['post_date'];
    $price = $row['price'];
    $size = $row['size'];
    $post_content=$row['post_content'];
}
?>
<form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="title">عنوان القطعة</label>
        <input type="text" value="<?php echo $post_title?>" class="form-control" name="title">
    </div>
    <div class="form-group">
        <label for="title">رقم الفئة</label>
        <input type="text" value="<?php echo $post_catagory_id?>" class="form-control" name="product_catagory_id">
    </div>
    <div class="form-group">
        <label for="post_catagory">الفئة</label>
        <select class="form-control" name="status">
            <?php

            $sql="SELECT * FROM categories";
            $result=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_assoc($result))
            {
                $cat_id=$row['id'];
                $catagory=$row['cat_title'];
                echo "<option >$catagory</option>";
            }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="author">البائع</label>
        <input type="text" value="<?php echo $author?>" class="form-control" name="author">
    </div>

    <div class="form-group">
        <label for="post_image">صورة القطعة</label>
<input type="file" name="image">
        <img width='100' src='../upload/categories_pic/<?php echo $post_image?>'>
    </div>

    </div>
    <div class="form-group">
        <label for="product_size">مقاس القطعة</label>
        <input type="text" value="<?php echo $size?>" name="product_size" class="form-control">
    </div>
    <div class="form-group">
        <label for="post_content">شرح عن القطعة</label>
        <textarea class="form-control"  name="product_content" id="body" cols="30" rows="10" ><?php echo $post_content?></textarea>
    </div>
    <div class="form-group">
        <label for="product_price">سعر الفطعة</label>
        <input type="text"  value="<?php echo $price?>" class="form-control" name="product_price">
    </div>

    <input type="submit" class="btn btn-primary" value="تحديث المنتج" name="update_post">
</form>
