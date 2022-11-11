<?php
include 'connection.php';

if(isset($_POST['submit']) and isset($_GET['id']))
{
    $rating=$_POST['rating'];
    $id=$_GET['id'];

    $sql= "insert into `valuation` (teacher_id,rating) values('$id','$rating')";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        header('location:valuation.php? id='.$id.'');
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
                    <label>Valuation</label>
                    <textarea name="rating" cols="50" rows="10" class="form-control" placeholder="Enter rating here."></textarea>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </div>
    </body>
</html>