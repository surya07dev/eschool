

<?php
require("connect.php");
include("mainInclude/header.php");
?>
<!-- start video background  -->

<div class="container-fluid remove-vid-marg">
  <div class="vid-parent">
    <video playsinline autoplay muted loop>
      <source  src="video/banner.mp4">
    </video>
    <div class="vid-overlay"></div>
  </div>
  <div class="vid-content">
    <h2 class="my-content">welcome to eSchool</h2>
    <small class="my-content">Learn and implement</small><br>
    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#stuRegModalCenter">Get Started</a>
</div>

<!-- end video background -->


<!-- start text banner -->

<div class="container-fluid bg-dark txt-banner">
  <div class="row bottom-banner">
    <div class="col-sm">
      <h5><i class='fas fa-book-open mr-3'></i> 100+ Online Courses </h5>
    </div>
    <div class='col-sm'>
      <h5><i class='fas fa-users mr-3'></i> Expert Instructors </h5>
    </div>
    <div class='col-sm'>
      <h5><i class="fas fa-keyboard mr-3"></i> Lifetime Access </h5>
    </div>
    <div class='col-sm'>
      <h5><i class="fas fa-rupee-sign mr-3"></i> Money Back Guarantee* </h5>
    </div>
  </div>
</div>

<!-- end text banner -->

<!-- start cource list -->

<h2 class="text-center mb-4">Trending Cources </h2>
<div class="row row-cols-1 row-cols-md-3 g-4">
  <?php 
  $sql = "SELECT * FROM `courses` LIMIT 3";
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
        </div> ';
        }
  ?>
</div>

<!-- end cource list -->



<!-- start contact us -->
<?php
include("contact.php");
?>
<!-- end contact us -->

<!-- start social follow -->

<div class="container-fluid bg-dark">
  <div class="row text-white text-center p-1">
    <div class="col-sm">
      <a class="text-white social-hover" href="#"><i class="fab fa-facebook-f"></i>Facebook</a>
    </div>
    <div class="col-sm">
      <a class="text-white social-hover" href="#"><i class="fab fa-twitter"></i>Twitter</a>
    </div>
    <div class="col-sm">
      <a class="text-white social-hover" href="#"><i class="fab fa-whatsapp"></i>Whatsapp</a>
    </div>
    <div class="col-sm">
      <a class="text-white social-hover" href="#"><i class="fab fa-instagram"></i>Instagram</a>
    </div>
  </div>
</div>

<!-- end social follow -->


<!-- start about section -->

<div class="container-fluid p-4" >
<div class="container" >
  <div class="row text-center">
    <div class="col-sm">
      <h5>About us</h5>
        <p>eSchool provides universal access to the world's best education,
           partnering with top universities and organisatioins to offer courses online.</p>
    </div>
    <div class="col-sm">
      <h5>Category</h5>
      <a class='text-dark' href="#">Web Development</a><br />
      <a class='text-dark' href="#">Web Designing</a><br />
      <a class='text-dark' href="#">Android App Dev</a><br />
      <a class='text-dark' href="#">iOS Development</a><br />
      <a class='text-dark' href="#">Data analysist</a><br />
    </div>
    <div class="col-sm">
      <h5>Contact us</h5>
      <p>eSchool pvt ltd <br> Near old bridge <br>
      selaqui, dehradun <br> Uttrakhand <br>
      ph. +91-xxxxx-xxxxx </p>
    </div> 
  </div>
</div>
</div>
<!-- end about section -->


<!-- starts include footer -->
<?php
include("mainInclude/footer.php");
?>
<!-- end include footer -->
