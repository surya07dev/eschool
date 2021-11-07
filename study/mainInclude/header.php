<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css.">

    <!-- font awsome css -->
    <link rel="stylesheet" href="css/all.min.css">

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">

    <!-- custom css -->
    <link rel='stylesheet' href="css/style.css">
    <title>eSchool</title>
</head>
<body >
    
<!-- navigation bar starts -->


<nav class="navbar navbar-expand-sm navbar-light bg-dark pl-5 ">
  <div class="container-fluid">
    <a class="navbar-brand">eSchool</a>
    <span class='navbar-text'>Upgrade your skills  </span>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
     aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse pl-5" id="navbarNav">
      <ul class="navbar-nav custom-nav pl-5">
        <li class="nav-item custom-nav-item"><a class="nav-link" aria-current="page" href="index.php">Home</a></li>
        <li class="nav-item custom-nav-item"><a class="nav-link" href="./development.php">My profile</a></li>
        <li class="nav-item custom-nav-item"><a class="nav-link" href="cources.php">Courses</a></li>
        <li class="nav-item custom-nav-item"><a class="nav-link" href="./development.php">Payment</a></li>
        <li class="nav-item custom-nav-item" data-bs-toggle="modal" data-bs-target="#stuLoginModalCenter">
          <a class="nav-link" href="#">Login</a></li>
        <li class="nav-item custom-nav-item" data-bs-toggle="modal" data-bs-target="#stuRegModalCenter">
          <a class="nav-link" href="#">Signup</a></li>
        <li class="nav-item custom-nav-item"><a class="nav-link" href="./logout.php">Logout</a></li>
        <li class="nav-item custom-nav-item"><a class="nav-link" href="./development.php">Feedback</a></li>
        <li class="nav-item custom-nav-item"><a class="nav-link" href="./development.php">contact</a></li>
      </ul>
    </div>
        <?php 
        session_start();
        if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true){
          echo '<p class="navbar-brand text-light text-left">Welcome '.$_SESSION["stuname"].'</p>';
        }
        ?>
  </div>
</nav>
