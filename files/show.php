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
        <button class="btn btn-primary my-5"><a href="teacher.php" class="text-light">Add teacher</a></button>

        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">teacher id</th>
                <th scope="col">First name</th>
                <th scope="col">Last name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Buttons</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include 'connection.php';
                    $sql="Select * from `teachers`";
                    $result=mysqli_query($con,$sql);
                    if($result)
                    {
                        while($data=mysqli_fetch_assoc($result))
                        {
                            echo'<tr>
                                <th scope="row">'.$data['id'].'</th>
                                <td>'.$data['firstname'].'</td>
                                <td>'.$data['lastname'].'</td>
                                <td>'.$data['email'].'</td>
                                <td>'.$data['phone'].'</td>
                                <td>
                                    <button class="btn btn-primary"><a href="valuation.php? id='.$data['id'].'" class="text-light">Valuation"</a></button>
                                    <button class="btn btn-danger"><a href="delete_teacher.php? id='.$data['id'].'" class="text-light">Delete"</a></button>
                                </td>
                            </tr>';
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>