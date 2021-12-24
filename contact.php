<?php
include('hader.php');
?>
    <!-- Header Section end -->


    <!-- Breadcrumb -->
    <div class="breadcrumb">
      <div class="container text-center">
        <a href="home.html">Home</a>
        <span>Contact us</span>
      </div>
    </div>

    <!-- Contact Section start -->
    <section class="contact-sec">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div id="map"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-9">
            <div class="comment-form">
              <h4 class="comment-title">Leave reply</h4>
              <form  id="contact-form" action="inc/contact.php" name="contactform" method="post" class="contact-form">
                <div class="row">
                  <div class="col-md-6">
                    <div class="input-field">
                      <label for="username">Nick name:</label>
                      <input id="name" type="text" name="name" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-field">
                      <label for="useremail">Email address:</label>
                      <input id="email" type="email" name="email" required>
                    </div>
                  </div>
                </div>                
                <div class="input-field textarea">
                  <label for="usercmmnt">write a message:</label>
                  <textarea id="comments" name="comments"></textarea>
                </div>
                <button type="submit" class="btn btn-filled" id="submit">Submit</button>
                <!-- <input type="submit" class="btn contact-submit" id="submit" value="SEND" /> -->
              </form>
              <div id="message"></div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="contact-info">
              <h4 class="comment-title">contact info</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
              <a href="#"><i class="fas fa-map-marker-alt"></i> Dambo dika,USA,road123</a>
              <a href="mailto:dotsee@one.com"><i class="fas fa-envelope"></i> dotsee@one.com</a>
              <a href="tel:11987654321"><i class="fas fa-phone"></i> (+11) 987654321</a>          
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact Section end -->

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