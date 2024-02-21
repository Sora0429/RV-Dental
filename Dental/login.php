<?php
// session_start();
$title = "Sign in | Tayouth";
if (isset($_SESSION['auth'])) {
  $_SESSION['message'] = "You already Logged in";
  header('Location: index.php');
  exit();
}
include('includes/header.php');
?>

<section style="background-color: #e4e4e4; margin: auto;">
  <div class="container mt-5 mb-5" style="width: 50%;">
    <div class="row min-vh-100 align-items-center;">
      <div class="col-lg-12 col-sm-12;">
        <div class="card text-black">
          <div class="card-header text-center" style="background-color: #1f8555;">
            <h4 class="text-white" style="letter-spacing: 5px; font-size: 20pt;">Sign in</h4>
          </div>
          <div class="card-body">
            <!-- WAG GAGALAWIN FUNCTION NI LLOYD TO  -->
            <form action="functions/auth.php" method="POST">
              <div class="mb-3">
                <label class="form-label"><small> <i class="fa-solid fa-at"></i> Email address</label></small>
                <input type="email" name="email" class="form-control">
              </div>
              <div class="mb-3">
                <label class="form-label"><small><i class="fa-solid fa-key"></i> Password</label></small>
                <input type="password" name="password" class="form-control">
              </div>
              <div class="d-grid gap-2 col-6 mx-auto">
                <button type="submit" name="login_btn" class="btn btn-outline-success btn-sm float-end">Sign in</button>
              </div>
              <div style="text-align:center">
                <a href="register.php">Create an account</a>
              </div>
            </form>
            <!-- WAG GAGALAWIN FUNCTION NI LLOYD TO  -->
          </div>
        </div>
      </div>

     

      <p class="text-center"><i class="fa-solid fa-cookie"></i>
        This site uses cookies. By continuing to browse the site, you are agreeing to our use of cookies. Read more of our <a href="#" style="color: #1f8555;"><ins> Privacy Policy.</ins></a>
    </div>
  </div>
</section>

<?php include('includes/footer.php'); ?>