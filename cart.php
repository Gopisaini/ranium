
<?php
include('hader.php');
?>
    <!-- Header Section end -->


    <!-- Breadcrumb -->
    <div class="breadcrumb">
      <div class="container text-center">
        <a href="home.html">Home</a>
        <span>Cart page</span>
      </div>
    </div>

    <!-- cart section start -->
    <section class="cart-sec">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <form action="cart.html" method="post" class="cart-form">
              <table>
                <thead>
                  <tr>
                    <th class="cart-pd-thumb">Product</th>
                    <th class="cart-pd-desc">Description</th>
                    <th class="cart-pd-model">Model</th>
                    <th class="cart-pd-edit">Edit</th>
                    <th class="cart-pd-qty">Quantity</th>
                    <th class="cart-pd-price">Unit Price</th>
                    <th class="cart-pd-total">Total</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="cart-pd-thumb">
                      <img src="images/products/cart/1.jpg" alt="">
                    </td>
                    <td class="cart-pd-desc" data-title="Description">
                      <h6>There are many variations</h6>
                      Lorem Ipsum is simply dummy text of the typesetting.
                    </td>
                    <td class="cart-pd-model" data-title="Model">Product-23</td>
                    <td class="cart-pd-edit" data-title="Edit">
                      <a href="javascript:void(0);"><i class="fas fa-pencil-alt"></i></a>
                      <a href="javascript:void(0);"><i class="far fa-trash-alt"></i></a>
                    </td>
                    <td class="cart-pd-qty" data-title="Quantity">
                      <div class="quantity">
                        <span class="decressQnt"><i class="fas fa-minus"></i></span>
                        <input class="qnttinput" type="number" value="06" min="1">
                        <span class="incressQnt"><i class="fas fa-plus"></i></span>
                      </div>
                    </td>
                    <td class="cart-pd-price" data-title="Unit Price">$999.00</td>
                    <td class="cart-pd-total" data-title="Total">$999.00</td>
                  </tr>
                  <tr>
                    <td class="cart-pd-thumb">
                      <img src="images/products/cart/2.jpg" alt="">
                    </td>
                    <td class="cart-pd-desc" data-title="Description">
                      <h6>There are many variations</h6>
                      Lorem Ipsum is simply dummy text of the typesetting.
                    </td>
                    <td class="cart-pd-model" data-title="Model">Product-23</td>
                    <td class="cart-pd-edit" data-title="Edit">
                      <a href="javascript:void(0);"><i class="fas fa-pencil-alt"></i></a>
                      <a href="javascript:void(0);"><i class="far fa-trash-alt"></i></a>
                    </td>
                    <td class="cart-pd-qty" data-title="Quantity">
                      <div class="quantity">
                        <span class="decressQnt"><i class="fas fa-minus"></i></span>
                        <input class="qnttinput" type="number" value="06" min="1">
                        <span class="incressQnt"><i class="fas fa-plus"></i></span>
                      </div>
                    </td>
                    <td class="cart-pd-price" data-title="Unit Price">$999.00</td>
                    <td class="cart-pd-total" data-title="Total">$999.00</td>
                  </tr>
                  
                  <tr>
                    <td class="actions" colspan="7">
                      <a href="#" id="continue-shop" class="btn btn-filled">Continue shopping</a>
                      <a href="#" id="update-cart" class="btn btn-filled">update shopping cart</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </form>
          </div>
        </div>
        <div class="row"> 
          <div class="col-md-4"> 
            <form class="tax-form shopping-form" action="cart.html">
              <h6>Estimate Shopping And Tax</h6>
              <label>Country</label>
              <select>
                <option value="">United States</option>
              </select>
              <label>State/Province</label>
              <select>
                <option value="">Please select region, state or province</option>
              </select>
              <label for="zip_code">Zip/Postal code</label>
              <input id="zip_code" type="text">
              <button class="btn btn-filled">Get quote</button>
            </form>
          </div>
          <div class="col-md-4"> 
            <form class="discount-form shopping-form" action="cart.html">
              <h6>Discount Code</h6>                
              <label for="discount_code">Enter your coupon code if you have one.</label>
              <input id="discount_code" type="text">
              <button class="btn btn-filled">Apply</button>
            </form>
          </div>
          <div class="col-md-4">
            <div class="cart-total">
              <p>Subtotal<span>$9979.00</span></p>
              <p>Total<span>$65787.00</span></p>
              <a href="checkout.html" class="btn btn-filled p-3">Proceed To Checkout</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- cart section end -->

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