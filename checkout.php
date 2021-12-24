<?php
include('hader.php');
?>
    <!-- Header Section end -->


    <!-- Breadcrumb -->
    <div class="breadcrumb">
      <div class="container text-center">
        <a href="home.html">Home</a>
        <span>Checkout page</span>
      </div>
    </div>

    <!-- Checkout section start -->
      <section class="checkout-sec">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="checkout-form">
                <div class="d-flex justify-content-between bb-1x-default p-4">
                  <h6>Buyer info</h6>
                  <h6>login here</h6>
                </div>
                <div class="checkout-body">
                  <form action="checkout.html">
                    <div class="form-group">
                      <label for="f_name">First Name :</label>
                      <input id="f_name" type="text">
                    </div>
                    <div class="form-group">
                      <label for="l_name">Last Name :</label>
                      <input id="l_name" type="text">
                    </div>
                    <div class="form-group">
                      <label for="addr_1">Address 1 :</label>
                      <input id="addr_1" type="text">
                    </div> 
                    <div class="form-group">
                      <label for="addr_2">Address 2 :</label>
                      <input id="addr_2" type="text">
                    </div> 
                    <div class="form-group">
                      <label for="city">City :</label>
                      <input id="city" type="text">
                    </div> 
                    <div class="form-group">
                      <label for="post_code">Postal Code :</label>
                      <input id="post_code" type="text">
                    </div> 
                    <div class="form-group">
                      <label for="country">Country :</label>
                      <input id="country" type="text">
                    </div> 
                    <div class="form-group">
                      <label for="state">State :</label>
                      <input id="state" type="text">
                    </div>   
                  </form>
                </div>                
              </div>
            </div>
            <div class="col-md-6">
              <div class="checkout-form mb-md-5">
                <div class="d-flex flex-wrap justify-content-between bb-1x-default p-4">
                  <h6>Buyer info</h6>
                </div>
                <div class="checkout-body bill-details">
                  <h5>Product<span>Total</span></h5>
                  <ul>
                    <li>There are many variations<span>$999.00</span></li>
                    <li>Size<span>XL</span></li>
                    <li>Color<span>RED</span></li>
                    <li>Delivary Cost<span>$9.00</span></li>
                  </ul>
                  <h5>Order total<span>$1008.00</span></h5>
                </div>
              </div>

              <div class="checkout-form mb-0">
                <div class="d-flex justify-content-between bb-1x-default p-4">
                  <h6>Payment methods</h6>
                </div>
                <div class="checkout-body payment-methods">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem.</p>
                  <div class="payment-cards mb-2">
                    <a href="#"><img src="images/payment/1.png" alt=""></a>
                    <a href="#"><img src="images/payment/2.png" alt=""></a>
                    <a href="#"><img src="images/payment/3.png" alt=""></a>
                    <a href="#"><img src="images/payment/4.png" alt=""></a>
                  </div>
                  <form action="checkout.html">
                    <div class="form-group">
                      <label for="card_number">Card number :</label>
                      <input id="card_number" type="text">
                    </div>
                    <div class="form-group">
                      <label for="cvv">CVV :</label>
                      <input id="cvv" type="text">
                    </div>

                    <div class="form-group-2col">
                      <div class="form-group">
                        <label for="month">month :</label>
                        <input id="month" type="text">
                      </div>
                      <div class="form-group">
                        <label for="year">year :</label>
                        <input id="year" type="text">
                      </div>
                    </div>
                   
                  </form>
                </div>
              </div>
            </div>
            <div class="col-sm-12 text-center">
              <a href="" class="btn btn-filled place-order">Place Order</a>
            </div>
          </div>
        </div>
      </section>
      <!-- Checkout section end -->

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