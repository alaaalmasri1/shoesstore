<?php include "include/header.php" ?>
<?php
if(isset($_SESSION['username']))
{
    $username=$_SESSION['username'];
    $query="SELECT * FROM users WHERE username='$username'";
    $selet_user_query=mysqli_query($conn,$query);
    while($row=mysqli_fetch_array($selet_user_query))
    {
        $userid = $row['user_id'];
        $username = $row['username'];
        $user_firstname = $row['user_firstname'];
        $lastname = $row['user_lastname'];
        $user_email = $row['user_email'];
        $userimage = $row['user_image'];
        $role = $row['user_role'];
        $user_password=$row['user_password'];

    }
}
if(isset($_POST['edit_user']))
{
    $first=$_POST['user_fname'];
    $last=$_POST['user_lname'];
    $user=$_POST['USERNAME'];
    $email=$_POST['user_email'];
    $pass=$_POST['user_password'];
    $query="UPDATE users SET user_firstname='$first',user_lastname='$last',username='  $user',
   user_email=' $email',user_role='$role,',user_password=' $pass' WHERE username='{$username}'";
    $execte=mysqli_query($conn,$query);
    if(!$execte)
    {
        echo "error in the query".mysqli_error($conn);
    }
}



?>
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">لوحة التحكم</a>
            </div>
            <?php include "include/navbar.php"?>

            <div id="page-wrapper">

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header" align="center">
                                الملف الشخصى
                            </h1>

                           <form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="title">الاسم الاول</label>
        <input type="text"  value="<?php echo  $user_firstname?>" class="form-control" name="user_fname">
    </div>
    <div class="form-group">
        <label for="title">اسم العائلة</label
        <input type="text" value="<?php echo $lastname?>"  class="form-control" name="user_lname">
    </div>
    <div class="form-group">
        <label for="post_catagory">الفئة</label>
        <select class="form-control" name="user_role">
            <option value="employee"><?php echo $role?></option>
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
    <input type="submit" class="btn btn-primary large" value="ملف المستخدم" name="edit_user" style="margin-left: 500px">
</form>

                        </div>
                    </div>
                </div>
            </div>

    </div>
    <!-- /.row -->

    </div>
    <!-- /.container-fluid -->
    </div>
    </div>
    </nav>

    <!-- /#page-wrapper -->

<?php include "include/footer.php"?>