


<?php
$error="";

    if(isset($_POST['submit']))
    {

        $catagory=$_POST['catagory'];
        if($catagory==""||empty($catagory))
        {
            $error="يجب تعبئة الحقل";
        }
        else
        {
            $insertsql="INSERT INTO categories(cat_title)values ('$catagory')";
            $result=mysqli_query($conn,$insertsql);
            if(!$result)
            {
                die("error execting the query".mysqli_error($conn));
            }
        }
}

?>
<?php
if(isset($_GET['delete']))
{
    $cat_id=  escape($_GET['delete']);
    $sql="DELETE FROM categories where id='$cat_id'";
    $result=mysqli_query($conn,$sql);
    if(!$result)
    {
        die("error in the query".mysqli_error($conn));
    }
    header("Location:catagory.php");

}
?>
<?php
function escape($data)
{
    global $conn;
   return mysqli_real_escape_string($conn,trim($string));
}
function useronline()
{
    $session=  session_id();
$time=time();
$time_out_in_second=60;
$timeout=$time-$time_out_in_second;
$query="SElECT * FROM user_online where session='$session'";
$send_query=  mysqli_query($conn, $query);
$count=  mysqli_num_rows($send_query);
if($count==NULL)
{
    mysqli_query($conn, "INSERT INTO user_online(session,time) values('$session','$time')");
}
 else {
     mysqli_query($conn, "UPDATE  user_online SETtime='$time' where session='$session'");
}
$user_online_query=  mysqli_query($conn, "SELECT * from user_online where time >'$timeout'");
$user_count=  mysqli_num_rows($user_online_query);
global $user_count;

}
?>

