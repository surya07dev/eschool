    <!-- student ajax call javascript -->
    <script type="text/javascript" src="js/ajaxrequest.js"></script>

<!-- start footer -->

<footer class="container-fluid bg-dark text-center p-2">
  <small class="text-white">Copyright &copy; 2019 || Designed By E-learning ||
    <a href="#login"  data-bs-toggle="modal" data-bs-target="#adminLoginModalCenter">Admin login</a></small>
</footer>

<!-- end footer -->

<!-- start student regestration model -->

<!-- Modal -->
<div class="modal fade" id="stuRegModalCenter" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="stuRegModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuRegModalCenterLabel">Student Regestration Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <!-- starts regestration form -->
      <form action="./register.php" method='POST' id=stuRegForm>
        <div class="form-group">
          <i class="fas fa-user"></i><label for="stuname" class="form-label">Name</label>
          <small id="statusMessage1"></small>
          <input type="text" class="form-control" required id="stuname" name="stuname" aria-describedby="textHelp">
        </div>
        <div class="form-group">
          <i class="fas fa-envelope"></i><label for="stuemail" class="form-label">Email</label>
          <small id="statusMessage2"></small>
          <input type="email" class="form-control" required id="stuemail" name="stuemail" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="form-group">
        <i class="fas fa-key"></i><label for="stupass" class="form-label">Password</label>
        <small id="statusMessage3"></small>
          <input type="password" class="form-control" required name="stupass" id="stupass">
        </div>
        <div class="modal-footer">
        <button class="btn btn-primary" type="submit">Sign up</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> 
        </div>
      </form>
      <!-- end regestration form -->
      </div>
    </div>
  </div>
</div>

<!-- end student regestration model -->


<!-- start student login model -->

<!-- Modal -->
<div class="modal fade" id="stuLoginModalCenter" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="stuLoginModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuLoginModalCenterLabel">Student Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <!-- starts login form -->
      <form id="stuLoginForm" action="./login.php" method="POST">
        <div class="form-group">
          <i class="fas fa-envelope"></i><label for="stulogEmail" class="form-label" imp>Email</label>
          <input type="email" class="form-control" id="stulogEmail" required name="stulogEmail" aria-describedby="emailHelp" placeholder="E-mail" name="stulogEmail">
          <div id="loginEmail" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="form-group">
        <i class="fas fa-key"></i><label for="stulogPass" class="form-label">Password</label>
          <input type="password" class="form-control" id="stulogPass" required name="stulogPass" placeholder="password" name="stulogPass">
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" id="stuLoginBtn" ">Login</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancil</button>
        </div>
      </form>
      <!-- end login form -->
      </div>
    </div>
  </div>
</div>

<!-- end student login model -->


<!-- start admin login model -->

<!-- Modal -->
<div class="modal fade" id="adminLoginModalCenter" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="adminLoginModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="adminLoginModalCenterLabel">Admin Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <!-- starts login form -->
      <form id="adminLoginForm">
        <div class="form-group">
          <i class="fas fa-envelope"></i><label for="adminstulogEmail" class="form-label">Email</label>
          <input type="email" class="form-control" id="adminstulogEmail" aria-describedby="emailHelp">
          <div id="adminloginEmail" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="form-group">
        <i class="fas fa-key"></i><label for="adminstulogPass" class="form-label">Password</label>
          <input type="password" class="form-control" id="adminstulogPass">
        </div>
      </form>
      <!-- end login form -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="adminLoginBtn">Login</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancil</button>
      </div>
    </div>
  </div>
</div>

<!-- end admin login model -->


    <script src='js/jquery.min.js'></script>
    <script src='js/popper.min.js'></script>
    <script src='js/bootstrap.min.js'></script>
    
    <!-- font awsome js -->
    <script src='js/all.min.js'></script>

    <!-- student ajax call javascript -->
    <script type="text/javascript" src="js/ajaxrequest.js"></script>


    </body>
</html>