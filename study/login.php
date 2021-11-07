
<?php

include ("connect.php");
$login = false;
$showError = false;

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $stuemail = $_POST["stulogEmail"];
    $stupass = mysqli_real_escape_string($conn ,md5($_POST["stulogPass"]));

    $sql = "SELECT * FROM `student` WHERE stu_email = '$stuemail'";
    $result = mysqli_query($conn , $sql);

    $num = mysqli_num_rows($result);

    $sql2 = "SELECT * FROM `student` WHERE stu_email= '$stuemail';";
    $result2 = mysqli_query($conn , $sql2);
    $numRows = mysqli_fetch_assoc($result2);
    if ($num == 1) {
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['stuname'] = $numRows["stu_name"];
        header ("location: index.php");
    } 
    else {
        $showError = "invalid Entries";
        header ("location: index.php");
        echo "errors";
    }
}

?>