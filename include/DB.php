<?php
$conn=mysqli_connect("localhost",'root', '', 'shoesstore');
if(!$conn)
{
    die("could not connect to the database".mysqli_error($conn));
}

?>