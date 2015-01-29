<!-- Hero -->
<div id="hero-container">
  <ul class="cb-slideshow">
    <li><span></span></li>
    <li><span></span></li>
    <li><span></span></li>
    <li><span></span></li>
    <li><span></span></li>
    <li><span></span></li>
  </ul>

  <div class="home-header">    
    <div class="home-logo osLight"></div>
    <a href="#" class="home-navHandler visible-xs"><span class="fa fa-bars"></span></a>   
    <div class="home-nav">      
      <ul>
	<?php if (!$user->uid) { ?>
        <li><a href="#" data-toggle="modal" data-target="#signup">Sign Up</a></li>	
        <li><a href="#" data-toggle="modal" data-target="#signin">Sign In</a></li>
	<?php } else { ?>
        <li><a href="node/add" class="btn btn-green">List a Property</a></li>
	<?php } ?>
      </ul>
    </div>
  </div>
  <div class="search-panel">   
    <form class="form-inline" role="form">
      <div class="form-group">
        <input type="text" class="form-control city" id="city" placeholder="City" autocomplete="off">
      </div>
      <div class="form-group hidden-xs adv">
        <a href="#" data-toggle="dropdown" class="btn btn-white dropdown-toggle">
          <span class="dropdown-label">Bedrooms</span> <span class="caret"></span>
        </a>
        <ul class="dropdown-menu dropdown-select">
          <li class="active"><input type="radio" name="bedno" checked="checked" value=""><a href="#">Bedrooms</a></li>
          <li><input type="radio" name="bedno" value="1"><a href="#">1</a></li>
          <li><input type="radio" name="bedno" value="2"><a href="#">2</a></li>
          <li><input type="radio" name="bedno" value="3"><a href="#">3</a></li>
          <li><input type="radio" name="bedno" value="4"><a href="#">4</a></li>
        </ul>
      </div>
      <div class="form-group hidden-xs adv">
        <a href="#" data-toggle="dropdown" class="btn btn-white dropdown-toggle">
          <span class="dropdown-label">Bathrooms</span> <span class="caret"></span>
        </a>
        <ul class="dropdown-menu dropdown-select">
          <li class="active"><input type="radio" name="bathno" checked="checked" value=""><a href="#">Bathrooms</a></li>
          <li><input type="radio" name="bathno" value="1"><a href="#">1</a></li>
          <li><input type="radio" name="bathno" value="2"><a href="#">2</a></li>
          <li><input type="radio" name="bathno" value="3"><a href="#">3</a></li>
          <li><input type="radio" name="bathno" value="4"><a href="#">4</a></li>
        </ul>
      </div>
      <div class="form-group hidden-xs adv">
        <div class="input-group">
          <div class="input-group-addon">$</div>
          <input class="form-control price" type="text" placeholder="From">
        </div>
      </div>
      <div class="form-group hidden-xs adv">
        <div class="input-group">
          <div class="input-group-addon">$</div>
          <input class="form-control price" type="text" placeholder="To">
        </div>
      </div>
      <div class="form-group">
        <a href="#" class="btn btn-green submit-home">Search</a>
      </div>
    </form>
  </div>
</div>

<div class="highlight">
  <div class="h-title osLight">Find your new place with Reales</div>	    
  <div class="h-text osLight">Fusce risus metus, placerat in consectetur eu, porttitor a est sed sed dolor lorem cras adipiscing</div>
</div>

<!-- Content -->
<div class="home-wrapper">
  <div class="home-content">
    <h2 class="osLight">Our Services</h2>
    <div class="row pb40">
      <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 s-menu-item">
        <a href="#">
          <span class="icon-pointer s-icon"></span>
          <div class="s-content">
            <h2 class="s-main osLight">Find places anywhere in the world</h2>
            <h3 class="s-sub osLight">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
          </div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 s-menu-item">
        <a href="#">
          <span class="icon-users s-icon"></span>
          <div class="s-content">
            <h2 class="s-main osLight">We have agents with experience</h2>
            <h3 class="s-sub osLight">Nulla convallis egestas rhoncus consectetur adipiscing elit</h3>
          </div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 s-menu-item">
        <a href="#">
          <span class="icon-home s-icon"></span>
          <div class="s-content">
            <h2 class="s-main osLight">Buy or rent beautiful properties</h2>
            <h3 class="s-sub osLight">Donec facilisis fermentum sem, ac viverra ante luctus vel</h3>
          </div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 s-menu-item">
        <a href="#">
          <span class="icon-cloud-upload s-icon"></span>
          <div class="s-content">
            <h2 class="s-main osLight">With agent account you can list properties</h2>
            <h3 class="s-sub osLight">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
          </div>
        </a>
      </div>
    </div>
    <h2 class="osLight">Recently Listed Properties</h2>
    <div class="row pb40">
      <?php
	 $block = module_invoke('roomzum', 'block_view', 'home_featured');
	 print render($block['content']);
      ?>
    </div>
    <h2 class="osLight">Testimonials</h2>
    <div id="home-testimonials" class="carousel slide carousel-wb mb20" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#home-testimonials" data-slide-to="0" class="active"></li>
        <li data-target="#home-testimonials" data-slide-to="1" class=""></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="<?php print drupal_get_path('theme','roomzum');?>/images/avatar-2.png" class="home-testim-avatar" alt="Jane Smith">
          <div class="home-testim">
            <div class="home-testim-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words</div>
            <div class="home-testim-name">Jane Smith</div>
          </div>
        </div>
        <div class="item">
          <img src="<?php print drupal_get_path('theme','roomzum');?>/images/avatar-3.png" class="home-testim-avatar" alt="Rust Cohle">
          <div class="home-testim">
            <div class="home-testim-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words</div>
            <div class="home-testim-name">Rust Cohle</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Footer -->
<div class="home-footer">
  <div class="home-wrapper">
    <div class="row">
      <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
        <div class="osLight footer-header">Company</div>
        <ul class="footer-nav pb20">
          <li><a href="#">About</a></li>
          <li><a href="#">Jobs</a></li>
          <li><a href="#">Press</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li><a href="#">Help</a></li>
          <li><a href="#">Policies</a></li>
          <li><a href="#">Terms & Privacy</a></li>
        </ul>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
        <div class="osLight footer-header">Discover</div>
        <ul class="footer-nav pb20">
          <li><a href="#">Become a Member</a></li>
          <li><a href="#">Properties List</a></li>
          <li><a href="#">Sign In</a></li>
          <li><a href="#">Widgets</a></li>
          <li><a href="#">Components</a></li>
          <li><a href="#">Tables</a></li>
          <li><a href="#">Lists</a></li>
        </ul>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
        <div class="osLight footer-header">Get in Touch</div>
        <ul class="footer-nav pb20">
          <li class="footer-phone"><span class="fa fa-phone"></span> 800 234 67 89</li>
          <li class="footer-address osLight">
            <p>516 Green St</p>
            <p>San Francisco, CA 94133</p>
            <p>United States</p>
          </li>
          <li><a href="#" class="btn btn-sm btn-icon btn-round btn-o btn-white"><span class="fa fa-facebook"></span></a> <a href="#" class="btn btn-sm btn-icon btn-round btn-o btn-white"><span class="fa fa-twitter"></span></a> <a href="#" class="btn btn-sm btn-icon btn-round btn-o btn-white"><span class="fa fa-google-plus"></span></a> <a href="#" class="btn btn-sm btn-icon btn-round btn-o btn-white"><span class="fa fa-linkedin"></span></a> </li>
        </ul>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
        <div class="osLight footer-header">Subscribe to Our Newsletter</div>
        <form role="form">
          <div class="form-group">
            <input type="email" class="form-control" placeholder="Email Address">
          </div>
          <div class="form-group">
            <a href="#" class="btn btn-green btn-block">Subscribe</a>
          </div>
        </form>
      </div>
    </div>
    <div class="copyright">Roomzum<br> &copy; 2014</div>
  </div>
</div>

<div class="modal fade" id="signin" role="dialog" aria-labelledby="signinLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="signinLabel">Sign In</h4>
      </div>
      <div class="modal-body">
        <form role="form">
          <div class="form-group">
            <div class="btn-group-justified">
              <a href="explore.html" class="btn btn-lg btn-facebook"><span class="fa fa-facebook pull-left"></span>Sign In with Facebook</a>
            </div>
          </div>
          <div class="form-group">
            <div class="btn-group-justified">
              <a href="explore.html" class="btn btn-lg btn-google"><span class="fa fa-google-plus pull-left"></span>Sign In with Google</a>
            </div>
          </div>
          <div class="signOr">OR</div>
	  <div class="form-group"></div>
          <div class="form-group">
            <input type="text" placeholder="Email Address" class="form-control">
          </div>
          <div class="form-group">
            <input type="password" placeholder="Password" class="form-control">
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-xs-6">
                <div class="checkbox custom-checkbox"><label><input type="checkbox"><span class="fa fa-check"></span> Remember me</label></div>
              </div>
              <div class="col-xs-6 align-right">
                <p class="help-block"><a href="#" class="text-green">Forgot password?</a></p>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="btn-group-justified">
              <a href="explore.html" class="btn btn-lg btn-green">Sign In</a>
            </div>
          </div>
          <p class="help-block">Don't have an account? <a href="#" class="modal-su text-green">Sign Up</a></p>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="signup" role="dialog" aria-labelledby="signupLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="signupLabel">Sign Up</h4>
      </div>
      <div class="modal-body">
        <form role="form">
          <div class="form-group">
            <div class="btn-group-justified">
              <a href="explore.html" class="btn btn-lg btn-facebook"><span class="fa fa-facebook pull-left"></span>Sign Up with Facebook</a>
            </div>
          </div>
          <div class="form-group">
            <div class="btn-group-justified">
              <a href="explore.html" class="btn btn-lg btn-google"><span class="fa fa-google-plus pull-left"></span>Sign Up with Google</a>
            </div>
          </div>
          <div class="signOr">OR</div>
          <div class="form-group">
            <input type="text" placeholder="First Name" class="form-control">
          </div>
          <div class="form-group">
            <input type="text" placeholder="Last Name" class="form-control">
          </div>
          <div class="form-group">
            <input type="text" placeholder="Email Address" class="form-control">
          </div>
          <div class="form-group">
            <input type="password" placeholder="Password" class="form-control">
          </div>
          <div class="form-group">
            <input type="password" placeholder="Confirm Password" class="form-control">
          </div>
          <div class="form-group">
            <div class="btn-group-justified">
              <a href="explore.html" class="btn btn-lg btn-green">Sign Up</a>
            </div>
          </div>
          <p class="help-block">Already a Reales member? <a href="#" class="modal-si text-green">Sign In</a></p>
        </form>
      </div>
    </div>
  </div>
</div>

