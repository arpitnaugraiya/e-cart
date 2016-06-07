<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 6/5/2016
 * Time: 2:40 PM
 */
include ("config.php");
session_start();

$user_check = $_SESSION["username"];

$ses_sql = mysqli_query($conn, "SELECT name FROM users WHERE name = '$user_check' ");

$row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);

$login_session = $row['name'];

if (!isset($_SESSION['username'])){
    header("Location: home.html");
}