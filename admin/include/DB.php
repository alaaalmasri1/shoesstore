<?php
$conn=mysqli_connect("localhost","root","","shoesstore");
if(!$conn)
{
    echo "could not connect to the database sucssfully".mysqli_error($conn);
}
?>