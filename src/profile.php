

<?php

include ("session.php");

?>


<!DOCTYPE html>
<html>
<head>
 <title>Profile</title>
</head>
<body>
    <h1><?php
        echo "Welcome " . $login_session ;
        ?></h1>
    <br>
    <a href="logout.php">LogOut</a>
</body>
</html>
