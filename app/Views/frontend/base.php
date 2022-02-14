<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/dmgt/css/slick/slick.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/dmgt/css/slick/slick-theme.css');?>">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="<?php echo base_url('public/dmgt/css/material-icon-min.css');?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('public/dmgt/css/styles.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('public/dmgt/css/responsive.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('public/dmgt/css/nouislider.css');?>">
    <title>DMGT</title>
  </head>
  <body>
            
    <header>
      <div class="container m-hide">
        <div class="header-top pt-3">
          <div class="header-top_contact">
            <ul>
              <li class="mr-4">
                <a href="tel:+971543059599">
                  <span class="material-icons mr-2">
                    call
                  </span>
                  + 971543059599
                </a>
              </li>
              <li>
                <a href="mailto:booking@dubaid3yacht.com">
                  <span class="material-icons mr-2">
                    mail
                  </span>
                  booking@dubaid3yacht.com
                </a>
              </li>
            </ul>
          </div>
          <div class="header-top_menu">
            <ul>
              <li>
                <a href="<?php echo base_url('about');?>">
                  About Us
                </a>
              </li>
              <li>
                <a href="#">
                  Contact Us
                </a>
              </li>
              <li>
                <a href="#" class="pr-0">
                  Service/waranty request 
                </a>
              </li>
            </ul>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-3">
            <a href="<?php echo base_url();?>">
              <img src="<?php echo base_url('public/dmgt/images/logo.png');?>" alt="">
            </a>
          </div>
          <div class="header-search col-md-6">
            <div>
              <select name="brand" id="brand">

                 <?php foreach ($brand_data as $item): ?>
                  <option value="<?php echo $item['id']; ?>"><?php echo $item['brand_name']; ?></option>
                <?php endforeach ?>
              
              </select>
            </div>
            <div class="d-flex w-100 pl-2">
              <input type="text" placeholder="Search.." name="search" class="w-100">
              <button type="submit">
                <span class="material-icons">
                  search
                </span>
              </button>
            </div>
          </div>
          <div class="col-md-3 d-flex justify-content-end">
            <a href="#" class="shopping-cart mr-4" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="material-icons mr-2">
                person
              </span>
              <div>
                Login
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#loginModal">Login</a>
              <a class="dropdown-item" href="#">Orders</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
            <a href="#" class="shopping-cart">
              <span class="material-icons mr-2">
                shopping_cart
              </span>
              Cart
            </a>
          </div>
        </div>
        <hr>
        <div class="d-flex justify-content-between align-items-center">
          <nav class="main-nav">
            <ul>
              <li>
                <a href="#" class="d-flex align-items-center">
                  Shop by categories
                  <span class="material-icons pl-2">
                    menu
                  </span>
                </a>
                <!-- First Tier Drop Down -->
                <ul>


               <?php foreach ($category_data as $key=> $item): ?>
                   <li class="has-dropdown">
                      <a href="#"><?php echo ucfirst($key); ?></a>
                      <ul>
                          <?php foreach ($item as $product_name): ?>
                          <li><a href="#"><?php echo ucfirst($product_name); ?></a></li>
                            <?php endforeach ?>
                         
                      </ul>
                    </li>
                
               <?php endforeach ?>
                   
                </ul>
              </li>
              <li>
                <a href="#">Services</a>
              </li>
              <li>
                <a href="#">tips & tricks</a>
              </li>
              <li>
                <a href="#">Resources</a>
              </li>
              <li>
                <a href="#">Blog</a>
              </li>
            </ul>
          </nav>
          <div class="clearance-btn">
            <a href="#">
              Clearance 
              <span>
                Up to 30% Off
              </span>
            </a>
          </div>
        </div>  
      </div>




      <div class="container">
        <div class="mobile-header">
          <div class="w-100">
            <div class="d-flex justify-content-between mb-3">
             <a href="<?php echo base_url('/');?>">
               <img src="<?php echo base_url('public/dmgt/images/logo.png');?>" alt="">
             </a>
             <a href="#" class="shopping-cart">
               <span class="material-icons mr-2">
                 shopping_cart
               </span>
               Cart
             </a>
            </div>
            <div class="header-search col-md-6">
              <div>
                <select name="brand" id="brand">
                <?php foreach ($brand_data as $item): ?>
                  <option value="<?php echo $item['id']; ?>"><?php echo $item['brand_name']; ?></option>
                <?php endforeach ?>
                </select>
              </div>
              <div class="w-100 pl-2">
                <input type="text" placeholder="Search.." name="search" class="w-100">
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <?= $this->renderSection("content"); ?>
        <section class="newsletter-section">
        <div class="d-md-flex align-items-center">
          <div class="w-100">
            <h5>
              Join our newsletter
            </h5>
            <p class="m-0">
              jQuery and Bootstrap BundlejQuery and Bootstrap Bundle
            </p>
         </div>
         <div class="w-100 mt-3 mt-md-0">
            <div class="subscribe-wrapper">
              <input type="text" placeholder="Search.." name="search" class="w-100">
              <button>
                Subscribe
              </button>               
            </div>
         </div>
        </div>
    </section>
    <footer class="m-hide">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <a href="#">
              <img src="<?php echo base_url('public/dmgt/images/footer-logo.png');?>" alt="">
            </a>
            <p class="py-4">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries
            </p>
            <div class="footer-contact">
              <div>
                <h6 class="mb-3">Got Question? Call us 24/7</h6>
                <a href="tel:+971543059599">
                  + 971543059599
                </a>
              </div>
              <div>
                <h6 class="mb-3">Got Question? Call us 24/7</h6>
                <figure>
                  <img src="<?php echo base_url('public/dmgt/images/payment.png');?>" alt="">
                </figure>
              </div>
            </div>
          </div>
          <div class="col-lg-8 col-xl-6 offset-xl-2">
            <div class="footer-menu">
              <div>
                <h6>Information</h6>
                <ul>
                  <li>
                    <a href="#">
                      About Molla
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      How to shop on Molla
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Contact us
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Log in
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      FAQ
                    </a>
                  </li>
                </ul>
              </div>
              <div>
                <h6>Customer Service</h6>
                <ul>
                  <li>
                    <a href="#">
                      Payment Methods
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Money-back guarantee!
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Returns
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Shipping
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Terms and conditions
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Privacy Policy
                    </a>
                  </li>
                </ul>
              </div>
              <div>
                <h6>My Account</h6>
                <ul>
                  <li>
                    <a href="#">
                      View Cart
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      My Wishlist
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Track My Order
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Help
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <br>
        <hr>
        <div class="d-flex justify-content-between">
          <span>
            Copyright © 2021 Molla Store. All Rights Reserved.
          </span>
          <span class="powered-by">
            Powered by <a href="#">d3 teck</a>
          </span>
        </div>
      </div>
    </footer>

    <!-- modal start -->

    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-body p-0">
                <div class="login-modal-wrap">
                  <div class="left w-100">
                    
                  </div>
                  <div class="right w-100">
                    <form>
                      <input id="username" class="form-input" type="text" placeholder="username">

                      <input id="password" class="form-input" type="password" placeholder="password">
                      
                      <div class="text-right">
                        <a href="" data-dismiss="modal" data-toggle="modal" data-target="#password-modal">Forgot password ?</a>
                      </div>

                    

                    <div class="my-5">
                      <p>
                        By continuing, you agree to DMGT's Terms of Use and 
                        Privacy Policy.
                      </p>
                    </div>
                    <button type="button" class="btn w-100" data-dismiss="modal">Login</button>

                    </form>
                    <div class="text-center my-5">
                      <h6>
                        New to DMGT ? <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#account-create-Modal">Create an account</a>
                      </h6>
                    </div>
                  </div>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>


    <div class="modal fade" id="password-modal" tabindex="-1" role="dialog" aria-labelledby="passwordModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
            <div class="login-modal-wrap">
              <div class="left w-100">
                
              </div>
              <div class="right w-100">
                <form>
                  <input id="email" class="form-input" type="text" placeholder="email id">
                  <div class="mb-5">
                    <p style="color: red;">
                      OTP has been sent to your email id
                    </p>
                  </div>

                  <button type="button" class="btn w-100" data-dismiss="modal">Send</button>
                </form>
                <div class="text-center my-5">
                  <h6>
                    Already ahve a account ? <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#loginModal">Login</a>
                  </h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>

    <div class="modal fade" id="account-create-Modal" tabindex="-1" role="dialog" aria-labelledby="passwordModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-body p-0">
                <div class="login-modal-wrap">
                  <div class="left w-100">
                    
                  </div>
                  <div class="right w-100">
                    <form>
                      <input id="user-name" class="form-input" type="text" placeholder="User name">
                      <input id="email" class="form-input" type="text" placeholder="email">
                      <input id="phone" class="form-input" type="text" placeholder="Mobile No">
                      <input id="create-password" class="form-input" type="password" placeholder="password">
                      <input id="confirm-password" class="form-input" type="password" placeholder="confirm password">

                      <button type="button" class="btn w-100">
                        <span>Continue</span>
                        <span>Sign Up</span>
                      </button>
                    </form>
                    <div class="text-center my-5">
                      <h6>
                        Already ahve a account ? <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#loginModal">Login</a>
                      </h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>

    <!-- modal end -->
   

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  

    <script src="<?php echo base_url('public/dmgt/js/slick.js');?>" type="text/javascript" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.0/nouislider.js" type="text/javascript" charset="utf-8"></script>
     <?= $this->renderSection("script_content"); ?>
  </body>
</html>               