<?php
include('hader.php');
?
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


    <?php
include('footer.php');
?>