<?php
//this will handle login 

session_start();
// check if the user is already logged in
if (isset($_SESSION['username'])) {
    header("location: welcome.php");
    exit;
}
require_once "config.php";
$username = $password = "";
$err = "";

//if request method is post 
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    if (empty(trim($_POST['username'])) || empty(trim($_POST['password']))) {
        $err = "Please enter a username + password ";
    } else {
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }
    if (empty($err)) {
        $sql = "SELECT id, username, password FROM users WHERE username= ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $param_username);
        $param_username = $username;
        //try to execute this statament
        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_store_result($stmt);
            if (mysqli_stmt_num_rows($stmt) == 1) {
                mysqli_stmt_bind_result($stmt, $id, $username, $haashed_password);
                if (mysqli_stmt_fetch($stmt)) {
                    if (password_verify($password, $haashed_password)) {
                        // this means the password is correct
                        session_start();
                        $_SESSION["username"] = $username;
                        $_SESSION["id"] = $id;
                        $_SESSION["loggedin"] = true;

                        //redirect user to welcome page
                        header("location: welcome.php");
                    }
                }
            }
        }
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>PHP LOGIN System </title>
</head>

<body>
    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Techno Sports </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register.php">Register </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us </a>
                </li>

            </ul>
        </div>
    </nav> -->
    <div class="container mt-4 w-50">
        <h3>Please LOGIN Here : </h3>
        <hr>
        <form action="" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username">

            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Enter Password">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <div>
                <span>Register Here: </span> <button type="submit" class="btn btn-primary"><a href="register.php" style="text-decoration: none; color: #fff;">Register</a></button>
            </div>

        </form>






    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>