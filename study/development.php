
<?php
include("mainInclude/header.php");

session_start();
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true){
    echo '<h1>sorry' .$_SESSION["stuname"].'<br> the page is under development</h1>';
} else {
    echo '<h1>sorry <br> the page is under development</h1>';
}


include("mainInclude/footer.php");
?>
