<?php
include('hader.php');
?>
    <!-- Header Section end -->


    <!-- Breadcrumb -->
    <div class="breadcrumb">
      <div class="container text-center">
        <a href="home.html">Home</a>
        <span>Shop page</span>
      </div>
    </div>

    <section class="signinUp-sec">
      <div class="container">
        <div class="row">
          <div class="col-md-6 m-auto">
            <div class="signinUp-bg">
              <div class="form-wrap">
                <form action="login.html">
                  <input type="email" placeholder="Enter your email...">
                  <input type="password" placeholder="Enter your Password...">
                  <p>Or</p>
                  <a href="#" class="btn btn-filled" style="background-color: #4367af"><i class="fab fa-facebook-f"></i> Facebook</a>
                  <a href="#" class="btn btn-filled" style="background-color: #e45446"><i class="fab fa-google-plus-g"></i> Google</a>
                  <button type="submit" class="btn btn-filled">Login</button>
                  <div class="d-sm-flex justify-content-between">
                    <label for="remember_user" class="remember_user">
                      <input id="remember_user" type="checkbox" name="remember_user">
                      Remember me
                    </label>
                    <span>Forgot <a href="#" class="color-red">password?</a></span>
                  </div>                  
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="instagram-sec sec-px-100">
      <h2 class="sec-headline flex-1">Instagram</h2>
      <div class="insta-photos d-flex">
        <a href="#"><img src="images/instagram/1.jpg" alt=""></a>
        <a href="#"><img src="images/instagram/2.jpg" alt=""></a>
        <a href="#"><img src="images/instagram/3.jpg" alt=""></a>
        <a href="#"><img src="images/instagram/4.jpg" alt=""></a>
        <a href="#"><img src="images/instagram/5.jpg" alt=""></a>
        <a href="#"><img src="images/instagram/6.jpg" alt=""></a>
        <div class="insta-page">
          <a href="#"><i class="fab fa-instagram"></i> Themeies.com</a>
          <p>Proin at gravida ligula. Fusce maximus nibh nec.</p>
        </div>
      </div>
    </section>


    <!-- Footer start -->
    <?php
include('footer.php');
?>