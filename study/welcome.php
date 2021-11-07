<?php

session_start();
include ("mainInclude/header.php");

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true ){
    echo $_SESSION["stuname"];

}



?>

    <!-- <h1> welcome </h1> -->
</body>
</html>