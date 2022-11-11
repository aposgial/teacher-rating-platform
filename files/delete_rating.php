<?php
include 'connection.php';

if(isset($_GET['id']) and isset($_GET['teacher_id']))
{
    $id=$_GET['id'];
    $teacher_id=$_GET['teacher_id'];
    $sql="delete from `valuation` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        header('location:valuation.php? id='.$teacher_id.'');
    } else
    {
        die(mysqli_error($con));
    }
}
?>