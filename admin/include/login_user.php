<?php
include "DB.php";
?>
<?php session_start();?>
<?php
//when the user press login
if(isset($_POST['SubmitLogin'])) {


    $username = $_POST['username'];
    $password = $_POST['password'];
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);
    $querys = "SELECT * FROM users WHERE username='{$username}'";
    $select_user_query = mysqli_query($conn, $querys);
    if (!$select_user_query) {
        die("query faild" . mysqli_error($conn));
    }
        while ($row = mysqli_fetch_array($select_user_query)) {
           $user_id = $row['user_id'];
           $db_role = $row['user_role'];
          $db_firstname = $row['user_firstname'];
          $db_username = $row['username'];
         $db_lastname=$row['user_lastname'];
           $db_password = $row['user_password'];

        }
}
if($username ===$db_username &&$password ===$db_password)
{
    $_SESSION['username']=$db_username;
    $_SESSION['password']=$db_password;
    $_SESSION['firsname']=$db_firstname;
    $_SESSION['lastname']=$db_lastname;
    $_SESSION['role']=$db_role;
    header("Location:../index.php");

}
else
{
    header("Location:../../index.php");
}
?>