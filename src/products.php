<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <!--<link rel="stylesheet" type="text/css" href="../assets/css/main.css"-->
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.2.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">E-Cart</a>
            </div>
            <ul style="float: right" class="nav navbar-nav">
                <li><a href="home.html">Home</a></li>
                <li class="active"><a href="products.php">Products</a></li>


                <li><a href="#">Page 3</a></li>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                    Login
                </button>
            </ul>
        </div>

    </nav>

    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>List of Products:</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img src="http://placekitten.com/350/200">
                <h3>Product1</h3>
            </div>
            <div class="col-md-4">
                <img src="http://placekitten.com/350/200">
                <h3>Product2</h3>
            </div>
            <div class="col-md-4">
                <img src="http://placekitten.com/350/200">
                <h3>Product3</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img src="http://placekitten.com/350/200">
                <h3>Product4</h3>
            </div>
            <div class="col-md-4">
                <img src="http://placekitten.com/350/200">
                <h3>Product5</h3>
            </div>
            <div class="col-md-4">
                <img src="http://placekitten.com/350/200">
                <h3>Product6</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img src="http://placekitten.com/350/200">
                <h3>Product7</h3>
            </div>
            <div class="col-md-4">
                <img src="http://placekitten.com/350/200">
                <h3>Product8</h3>
            </div>
            <div class="col-md-4">
                <img src="http://placekitten.com/350/200">
                <h3>Product9</h3>
            </div>
        </div>
    </div>
    <?php
     include ("footer.html")
    ?>
</body>
</html>