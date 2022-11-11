<?php

$con= new mysqli('localhost','root','','teachers_valuation');

if(!$con)
{
    die(mysqli_error($con));
}
?>