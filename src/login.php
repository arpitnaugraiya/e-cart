<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 6/2/2016
 * Time: 6:14 PM
 */
include ("config.php");
session_start();


//define variables and set to empty values
$email = $password = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit();
    }
    $password = test_input($_POST["password"]);
}

function test_input($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

//Check connection
if($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}

$sql = "SELECT id, name FROM users WHERE email = '$email' and password = '$password'";
$result = $conn->query($sql);

if($result->num_rows == 1){
    while($row = $result->fetch_assoc()){
        $_SESSION["id"] = $row["id"];
        $_SESSION["username"] = $row["name"];
        header('Location: profile.php');
    }
} else{
    $error = "Your Email or Password is invalid";
}
$conn->close();
 ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.2.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Sign in to continue to E-Cart</h1>
            <div class="account-wall">
                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                     alt="">
                <form action="" method="post" class="form-signin">
                    <input type="text" class="form-control" placeholder="Email" name="email" required autofocus>
                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">
                        Sign in</button>
                    <label class="checkbox pull-left">
                        <input type="checkbox" value="remember-me">
                        Remember me
                    </label>
                    <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
                </form>
                <div class="alert alert-danger text-center"><?php echo $error; ?></div>
            </div>
            <a href="home.html" class="text-center new-account">Create an account </a>
        </div>
    </div>
</div>
</body>
</html>


    
    
    

