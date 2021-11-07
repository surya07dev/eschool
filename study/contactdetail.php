

<?php

include ("connect.php");


if($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // inserting data in database
    $sql = "INSERT INTO `student_detail` (`stu_id`, `stu_name`, `stu_email`, `subject`, `comment`) 
    VALUES (NULL, '$name', '$email', '$subject', '$message')";

    $result = mysqli_query($conn ,$sql);


    // checkin for table creation -->
    if ($result){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> your data is saved.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        header("location: index.php");
    } else {
        die ('<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Sorry!</strong> you failed to submit.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
    }
}

?>

</body>
</html>
