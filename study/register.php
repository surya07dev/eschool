

<?php

include ("connect.php");


if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $stuname = mysqli_real_escape_string($conn ,$_POST["stuname"]);
    $stuemail = mysqli_real_escape_string($conn ,$_POST["stuemail"]);
    $stupass = mysqli_real_escape_string($conn ,md5($_POST["stupass"]));

    // inserting data in database
    $sql =  "INSERT INTO `student` (`stu_name`, `stu_email`, `stu_pass`)
    VALUES ('$stuname', '$stuemail', '$stupass' )";

    $result = mysqli_query($conn ,$sql);


    // checkin for table creation -->
    if ($result){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success !</strong> you are logged in.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    } else {
        die ('<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Errer !</strong> you are failed to logged in.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
    }
}

?>
</body>
</html>