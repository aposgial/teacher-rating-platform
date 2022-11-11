<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teachers Valuation</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <?php
            include 'connection.php';
            if(isset($_GET['id']))
            {
                $teacher_id=$_GET['id'];
                echo'<button class="btn btn-primary my-5"><a href="rating.php? id='.$teacher_id.'" class="text-light">Add rating</a></button>

                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">rating id</th>
                        <th scope="col">Valuation</th>
                        <th scope="col">Buttons</th>
                        </tr>
                    </thead>
                    <tbody>';
                    
                    $sql="Select * from `valuation` where teacher_id='$teacher_id'";
                    $result=mysqli_query($con,$sql);
                    if($result)
                    {
                        while($data=mysqli_fetch_assoc($result))
                        {
                            echo'<tr>
                                <th scope="row">'.$data['id'].'</th>
                                <td>'.$data['rating'].'</td>
                                <td>
                                    <button class="btn btn-danger"><a href="delete_rating.php? id='.$data['id'].'&teacher_id='.$teacher_id.'" class="text-light">Delete"</a></button>
                                </td>
                            </tr>';
                        }
                    }
                }
            ?>    
            </tbody>
        </table>
    </div>
    
</body>
</html>