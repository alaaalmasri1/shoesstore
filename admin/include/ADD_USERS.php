<?php
//$_FILES IS A SUPER GLOBAL VARIABLE THAT HOLDS THE NAME OF THE IMAGE
//TEMP MEANS TEMPRORY LOCATION
if(isset($_POST['create_user']))
{
    $firstname=$_POST['user_fname'];
    $lastname=$_POST['user_lname'];
    $user_role=$_POST['user_role'];
    $username=$_POST['USERNAME'];
    $user_image=$_FILES['image']['name'];
    $product_image_temp=$_FILES['image']['tmp_name'];
   $user_email=$_POST['user_email'];
    $product_date=date('d-m-y');
    $user_password=$_POST['user_password'];
    move_uploaded_file($product_image_temp,"../upload/categories_pic/$user_image");
    $query="INSERT INTO users(user_firstname,user_lastname,user_role,username,	user_image, user_email,user_password)";
    $query .=" VALUES(' $firstname',' $lastname',' $user_role',' $username','$user_image',' $user_email',' $user_password')";
    $adduser=mysqli_query($conn,$query);
    if($adduser)
    {
       header("Location:users.php");
    }
    if(!$adduser)
    {
        die("فشل فى الاتصال ىى الداتا بيس".mysqli_error($conn));
    }
}



?>
<form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="title">الاسم الاول</label>
        <input type="text" class="form-control" name="user_fname">
    </div>
    <div class="form-group">
        <label for="title">اسم العائلة</label>
        <input type="text" class="form-control" name="user_lname">
    </div>
    <div class="form-group">
        <label for="post_catagory">نوع المستخدم</label>
        <select class="form-control" name="user_role">
            <option value="">اختار الفئة</option>
            <option value="admin">admin</option>
            <option value="employee">employee</option>

        </select>
    </div>
    <div class="form-group">
        <label for="author">اسم المستخدم</label>
        <input type="text" class="form-control" name="USERNAME">
    </div>

    <div class="form-group">
        <label for="post_image">صورة  الموطف</label>
        <input type="file"  name="image">
    </div>

    </div>
    <div class="form-group">
        <label for="product_size">البريد</label>
        <input type="text" name="user_email" class="form-control">
    </div>

    <div class="form-group">
        <label for="product_price">كلمة السر</label>
        <input type="password" class="form-control" name="user_password">
    </div>
    <input type="submit" class="btn btn-primary large" value="اضافة مستخدم" name="create_user" style="margin-left: 500px">
</form>