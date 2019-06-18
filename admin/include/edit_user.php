<?php
if(isset($_GET['edit_user'])) {
    $the_user_id = $_GET['edit_user'];

    $query = "SELECT * From users where user_id='$the_user_id'";
    $select_user_query = mysqli_query($conn, $query);
    if (!$select_user_query) {
        echo "Error in the query" . mysqli_error($conn);
    }

    while ($row = mysqli_fetch_assoc($select_user_query)) {
        $userid = $row['user_id'];
$username = $row['username'];
        $user_firstname = $row['user_firstname'];
        $lastname = $row['user_lastname'];
        $user_email = $row['user_email'];
        $userimage = $row['user_image'];
        $role = $row['user_role'];
        $user_password=$row['user_password'];
         $query="SELECT randsolt FROM users";
     $select_rand_query=  mysqli_query($conn, $query);
     if(!$select_rand_query)
     {
         die("query failed".mysqli_error($conn));
     }
   $row=  mysqli_fetch_assoc($select_rand_query);
   $salt=$row['randsolt'];
   $user_password=  crypt($user_password,$salt);

    }
}
if(isset($_POST['edit_user']))
{
    $first=$_POST['user_fname'];
    $last=$_POST['user_lname'];
    $email=$_POST['user_email'];
    $user=$_POST['USERNAME'];
    $email=$_POST['user_email'];
    $pass=$_POST['user_password'];
    $query="UPDATE users SET user_firstname='$first',user_lastname='$last',username='  $user',
   user_email=' $email',user_role='$role,',user_password=' $pass' WHERE user_id='$the_user_id'";
    $execte=mysqli_query($conn,$query);
    if(!$execte)
    {
        echo "error in the query".mysqli_error($conn);
    }
}

?>
<form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="title">الاسم الاول</label>
        <input type="text"  value="<?php echo  $user_firstname?>" class="form-control" name="user_fname">
    </div>
    <div class="form-group">
        <label for="title">اسم العائلة</label>
        <input type="text" value="<?php echo $lastname?>"  class="form-control" name="user_lname">
    </div>
    <div class="form-group">
        <label for="post_catagory">الفئة</label>
        <select class="form-control" name="user_role">
            <option value="<?php echo $role?>"><?php echo $role?></option>
            <?php
if($role=='admin')
{
    echo "<option value='employee'>employee</option>";
}
else
{
    echo "<option value='admin'>admin</option>";

}
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="author">اسم المستخدم</label>
        <input type="text" value="<?php echo $username?>" class="form-control" name="USERNAME">
    </div>

    <div class="form-group">
        <label for="post_image">صورة الموطف</label>
        <input type="file"  name="image">
    </div>

    </div>
    <div class="form-group">
        <label for="user_email">البريد</label>
        <input type="text" class="form-control" value="<?php echo $user_email?>"name="user_email">
    </div>

    <div class="form-group">
        <label for="product_price">كلمة السر</label>
        <input type="text" value="<?php echo $user_password?>"  class="form-control" name="user_password">
    </div>
    <input type="submit" class="btn btn-primary large" value="تحديث مستخدم" name="edit_user" style="margin-left: 500px">
</form>