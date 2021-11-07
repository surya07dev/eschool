
<html>
    <head>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css.">
    </head>
<body>
<?php

// creating to database
$servername = "localhost";
$username = "root";
$password = "";
$database = "mega";

// create a connection
$conn = mysqli_connect($servername, $username, $password, $database );

// connection check
if (!$conn) {
    die ('<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Errer !</strong> the connection is failed to connect.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>'. mysqli_connect_error());
} else {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success !</strong> your successfully connected.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
}


?>