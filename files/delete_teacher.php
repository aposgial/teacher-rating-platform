<?php
include 'connection.php';

if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $sql="delete from `teachers` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        header('location:show.php');
    } else
    {
        die(mysqli_error($con));
    }
}
?>