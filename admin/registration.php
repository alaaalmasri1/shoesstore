<?php  include "include/DB.php"; ?>
<?php include "include/header.php"?>

<style>
    background-color:white
    </style>
    <!-- Navigation -->
    
<?php
if(isset($_POST['submit']))
{
     
  
        $username=  mysqli_real_escape_string($conn,$_POST['username']);
    $email=  mysqli_real_escape_string($conn,$_POST['email']);
     $password=  mysqli_real_escape_string($conn,$_POST['password']);
     $query="SELECT randsolt FROM users";
     $select_rand_query=  mysqli_query($conn, $query);
     if(!$select_rand_query)
     {
         die("query failed".mysqli_error($conn));
     }
   $row=  mysqli_fetch_assoc($select_rand_query);
   $salt=$row['randsolt'];
   $password=  crypt($password,$salt);
    $query="INSERT INTO users (username,user_password,user_email,user_role) values('$username','$password','$email','employee')";
    $executequery=  mysqli_query($conn, $query);

$message="تمت اضافة البيانات بى نجاح";
    if(!$executequery)
    {
        die('query failed'.mysqli_error($conn));
    }
    }
    else
    {
        $message="";
    }

?>
    <style>
        
        background-color:white
    </style>
    <!-- Page Content -->
    <div class="container">
    
<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="form-wrap">
                <h1>Register</h1>
                    <form role="form" action="registration.php" method="post" id="login-form" autocomplete="off">
                        <h6 class="text-center"><?php echo $message?></h6>;
                        <div class="form-group">
                            <label for="username" class="sr-only">username</label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Enter Desired Username">
                        </div>
                         <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="somebody@example.com">
                        </div>
                         <div class="form-group">
                            <label for="password" class="sr-only">Password</label>
                            <input type="password" name="password" id="key" class="form-control" placeholder="Password">
                        </div>
                
                        <input type="submit" name="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Register">
                    </form>
                 	<p>
                            Already a member? <a href="../login.php">Sign in</a>
  	</p>
                </div>
            </div> <!-- /.col-xs-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>


        <hr>



<?php include "include/footer.php";?>
