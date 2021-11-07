
<!-- including nav bar -->
<?php
require("connect.php");
include("mainInclude/header.php");
?>

<!-- start cource background image -->

<div class="container-fluid bg-dark">
    <div class="row">
        <img src="image/bookstyle.png" alt="cources"
        style="height:500px; width:100%; object-fit:cover; box-shadow:10px;"/>
    </div>
    <div>
        <br>
    </div>
</div>

<!-- start cource background image -->

<!-- start cource list -->
<h2 class="text-center mb-4">Trending Cources </h2>
<div class="row row-cols-1 row-cols-md-3 g-4">
  <?php 
  $sql = "SELECT * FROM `courses`";
  $result = mysqli_query($conn , $sql);
  while($row = mysqli_fetch_assoc($result)){
    echo '
    <div class="col">
        <div class="card h-100">
          <img src="image/'.$row["course_img"].'" style="height: 15rem; width: 100%" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">'.$row["course_name"].'</h5>
            <p class="card-text">'. $row["course_desc"]. '</p><br>
            <p class="card-text d-inline">price: <small><del>&#8377 '.$row["course_old_price"].'</del></small>
            <span class="font-weight-bolder">&#8377 '.$row["course_price"].'</span></p>
            <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll Now!</a>
          </div>
        </div>
    </div>';
    }
  ?>
</div>


<!-- end cource list -->


<!-- pagination starts -->
<!-- <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center btn btn-dark">
    <li class="page-item disabled">
      <a class="page-link">Previous</a>
    </li>
    <li class="page-item "><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav> -->
<!-- pagination ends -->


<!-- including footer -->
<?php
include("mainInclude/footer.php");
?>
