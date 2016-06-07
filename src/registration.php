<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 6/2/2016
 * Time: 6:14 PM
 */
include ("config.php");

// define variables and set to empty values
$name = $email = $reg_password = $dob = $gender = $address = $mob_number = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
        echo "For NAME only letters and white space allowed";
        exit();
    }
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         echo "Invalid email format";
         exit();
    }
    if ($_POST["password"] === $_POST["confirmPassword"]){
        $reg_password = test_input($_POST["password"]);
    }else{
        echo "password & confirm password not matched";
        exit();
    }
    $dob = test_input($_POST["dob"]);
    $gender = test_input($_POST["gender"]);
    $address = test_input($_POST["address"]);
    $mob_number = test_input($_POST["mob_number"]);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

/*---------------Show the inputs------------------*/
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $reg_password;
echo "<br>";
echo $dob;
echo "<br>";
echo $gender;
echo "<br>";
echo $address;
echo "<br>";
echo $mob_number;
echo "<br>";

/*-----------------Save the inputs in database----------------------*/
//Check connection
if($conn->connect_error){
    die("Connection failed:" . $conn->connect_error);
}

//Prepare and bind
$stmt = $conn->prepare("INSERT INTO Users(name, email, password, dob, gender, address, mob_number) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssss",$name, $email, $reg_password, $dob, $gender, $address, $mob_number);

$stmt->execute();

echo "You are registered successfully";

$stmt->close();
$conn->close();





