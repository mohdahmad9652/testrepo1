<?php
    if (isset($_POST['email'])) {
        
        $server = 'localhost';
        $username = 'root';
        $password = '';
        
        $con = mysqli_connect($server,$username,$password);
        if (!$con) {
            die("Connection to this db is failed due to ".mysqli_connect_error());
        }
        // echo "Success Connecting to the db"

        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "INSERT INTO `practice`.`practice` (`email`, `password`) VALUES ('$email', '$password');";
        // echo $sql;

        if ($con->query($sql) == true) {
            echo "Successfully Inserted";
        }
        else {
            echo "ERROR: $sql <br> $con->error";
        }

        $con->close();
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center" >Practice PHP</h1>
    <div class="container">
        <form action="index.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-outline-success">SignUp</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
