<?php
include 'connection.php';

if(isset($_POST['submit']))
{
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];

    $sql= "insert into `teachers` (firstname,lastname,email,phone) values('$firstname','$lastname','$email','$phone')";
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




<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

        <title>Teachers Valuation</title>
    </head>
    <body>
        <div class="container my-5">
            <form method="post">
                <div class="form-group">
                    <label>First name</label>
                    <input type="text" class="form-control" placeholder="Enter first name" name="firstname" autocomplete="off">
                </div>
                <div class="form-group">
                    <label>Last name</label>
                    <input type="text" class="form-control" placeholder="Enter last name" name="lastname" autocomplete="off">
                </div>
                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" class="form-control" placeholder="Enter email" name="email" autocomplete="off">
                </div>
                <div class="form-group">
                    <label>Phone numder</label>
                    <input type="text" class="form-control" placeholder="Enter phono numder" name="phone" autocomplete="off">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </div>
    </body>
</html>