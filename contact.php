<?php

// Make the page validate
ini_set('session.use_trans_sid', '0');

// Create a random string, leaving out 'o' to avoid confusion with '0'
$char = strtoupper(substr(str_shuffle('abcdefghjkmnpqrstuvwxyz'), 0, 4));

// Concatenate the random string onto the random numbers
// The font 'Anorexia' doesn't have a character for '8', so the numbers will only go up to 7
// '0' is left out to avoid confusion with 'O'
$str = rand(1, 7) . rand(1, 7) . $char;

// Begin the session
session_start();

// Set the session contents
$_SESSION['captcha_id'] = $str;

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Restaurant Website</title>

<!-- Favicon -->
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">

<!-- Google fonts - witch you want to use - (rest you can just remove) -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,500,400italic,500italic,700,900' rel='stylesheet' type='text/css'>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!--  CSS STYLES  -->
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="css/reset.css" type="text/css" />
<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="css/Simple-Line-Icons-Webfont/simple-line-icons.css"/>
<link rel="stylesheet" href="css/et-line-font/et-line-font.css">

<!-- Responsive Devices Styles -->
<link rel="stylesheet" media="screen" href="css/responsive-leyouts.css" type="text/css" />

<!-- Mega Menu -->
<link href="js/mainmenu/menu.css" rel="stylesheet">

<!-- forms -->
<link rel="stylesheet" href="js/form/css/sky-forms.css" type="text/css" media="all">
</head>
<body>
<div class="site-wrapper">
  <header class="header headr-style-2">
    <div class="container">
    <div class="row"> 
      <!-- Menu -->
      <div class="navbar yamm navbar-default">
        <div class="container">
          <div class="navbar-header">
            <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            <a href="index.html" class="navbar-brand logo"></a> </div>
          <div class="cart pull-right" style="float:right;" >
            <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="icon-basket"></span><span class="cart-info">2</span> </button>
            <div class="dropdown-menu">
              <div class="wrapp-mini-cart">
                <div class="mini-cart">
                  <h3 class="font-color font20">My Cart</h3>
                  <div class="cart-item">
                    <div class="cart-img"><img class="img-responsive" alt="" src="https://placeholdit.imgix.net/~text?txtsize=18&txt=68%C3%9772&w=68&h=72"></div>
                    <div class="cart-content">
                      <h4 class="item-name m-bottom1"><a href="#">Special Hot and Sour Soup</a></h4>
                      <p class="font16 font-color">$8.95</p>
                    </div>
                  </div>
                  <div class="cart-item">
                    <div class="cart-img"><img class="img-responsive" alt="" src="https://placeholdit.imgix.net/~text?txtsize=18&txt=68%C3%9772&w=68&h=72"></div>
                    <div class="cart-content">
                      <h4 class="item-name m-bottom1"><a href="#">Special Sweet Corn Soup</a></h4>
                      <p class="font16 font-color">$5.95</p>
                    </div>
                  </div>
                  <div class="cart-action"><span class="fleft top-checkout-price font20 font-color font-bold">$259.95</span> <a href="#" class="button-cart">View Cart</a> </div>
                </div>
              </div>
            </div>
          </div>
          <div id="navbar-collapse-1" class="navbar-collapse collapse pull-right dark-color nopadding">
            <nav>
              <ul class="nav navbar-nav">
                <!-- Classic list -->
                <li class="dropdown"><a href="index.html" class="dropdown-toggle">Home <i class="fa fa-angle-down"></i></a>
                  <ul role="menu" class="dropdown-menu">
                    <li><a href="../bakery/index.html">Bakery</a></li>
                    <li><a href="../coffee/index.html">Coffee</a></li>
                    <li><a href="../winery/index.html">Winery</a></li>
                    <li><a href="../pizza/index.html">Pizza</a></li>
                    <li><a href="index.html">Restaurant</a></li>
                  </ul>
                </li>
                <li class="yamm-fw"><a href="shop.html">Shop</a></li>
<li class="dropdown"><a href="about.html" class="dropdown-toggle">Pages <i class="fa fa-angle-down"></i></a>
                  <ul role="menu" class="dropdown-menu">
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="our-chef.html">Our Chef</a></li>
                    <li><a href="shortcodes.html">Shortcodes</a></li>
                    <li><a href="login.html">Login Form</a></li>
                    <li><a href="register.html">Registration Form</a></li>
                  </ul>
                </li>
                <li class="dropdown"><a href="menu.html" class="dropdown-toggle">Menu <i class="fa fa-angle-down"></i></a>
                  <ul role="menu" class="dropdown-menu">
                    <li><a href="menu.html">Menu Style 1</a></li>
                    <li><a href="menu-2.html">Menu Style 2</a></li>
                    <li><a href="menu-3.html">Menu Style 3</a></li>
                    <li><a href="menu-4.html">Menu Left Sidebar</a></li>
                    <li><a href="menu-5.html">Menu Right Sidebar</a></li>
                  </ul>
                </li>
                <li class="yamm-fw"><a href="reservation.html">Reservation</a></li>
                <li class="yamm-fw"><a href="gallery.html">Gallery</a></li>
                <li class="dropdown"><a href="blog.html" class="dropdown-toggle">Blog <i class="fa fa-angle-down"></i></a>
                  <ul role="menu" class="dropdown-menu">
                    <li><a href="blog.html"> Blog Full Width</a> </li>
                    <li><a href="blog2.html"> Blog Standard</a> </li>
                    <li><a href="blog-post.html"> Single Post</a> </li>
                  </ul>
                </li>
                <li class="yamm-fw"><a href="contact.php">Contact</a></li>
              </ul>
            </nav>
            <div class="search-box no-display-phone">
              <form class="navbar-form" role="search">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search here...!">
                  <span class="input-group-btn">
                  <button type="reset" class="btn btn-default"><span class="fa fa-close"> <span class="sr-only">Close</span></span> </button>
                  <button type="submit" class="btn btn-default"><span class="fa fa-search"> <span class="sr-only">Search here...!</span></span></button>
                  </span></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
  </header>
  <!-- end Header -->
  
  <div class="page-header five">
    <div class="container">
      <div class="col-md-6 left-padd0">
        <h3 class="font45 font-white uppercase">Contact</h3>
        <h4 class="font18 font-white font-thin m-top1">Get in Touch with Us</h4>
      </div>
      <div class="col-md-6">
        <div class="breadcrumbs"><a href="index.html">Home</a> <i>/</i> Contact</div>
      </div>
    </div>
  </div>
  <!-- end page header -->
  
  <div class="section-lg m-top0">
    <div class="embed-container maps">
      <iframe width="425" height="450" class="full-wid" src="https://maps.google.co.in/maps?sll=34.0204989,-118.4117325&amp;sspn=0.8745562,1.4073488&amp;cid=16298491244936825076&amp;q=Los+Angeles,+CA,+USA&amp;ie=UTF8&amp;hq=&amp;hnear=Los+Angeles,+Los+Angeles+County,+California,+United+States&amp;t=m&amp;ll=34.052234,-118.243685&amp;spn=0.697085,0.848982&amp;output=embed" style="pointer-events: none;"></iframe>
    </div>
  </div>
  <!-- end features section 1 -->
  
  <div class="section-lg m-top8">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <form action="demo-contacts-process.php" method="post" id="sky-form" class="sky-form">
            <fieldset>
              <div class="row">
                <div class="col col-6 m-bottom2">
                  <label class="label">Name</label>
                  <label class="input"> <i class="icon-append fa fa-user"></i>
                    <input type="text" name="name" id="name">
                  </label>
                </div>
                <div class="col col-6 m-bottom2">
                  <label class="label">E-mail</label>
                  <label class="input"> <i class="icon-append fa fa-envelope-o"></i>
                    <input type="email" name="email" id="email">
                  </label>
                </div>
              </div>
              <div class="m-bottom2">
                <label class="label">Subject</label>
                <label class="input"> <i class="icon-append fa fa-tag"></i>
                  <input type="text" name="subject" id="subject">
                </label>
              </div>
              <div class="m-bottom2">
                <label class="label">Message</label>
                <label class="textarea"> <i class="icon-append fa fa-comment"></i>
                  <textarea rows="4" name="message" id="message"></textarea>
                </label>
              </div>
              <div class="m-bottom2">
                <label class="label">Enter characters below:</label>
                <label class="input input-captcha"> <img src="captcha/image.php?<?php echo time(); ?>" width="100" height="35" alt="Captcha image" />
                  <input type="text" maxlength="6" name="captcha" id="captcha">
                </label>
              </div>
              <div class="m-bottom2">
                <label class="checkbox">
                  <input type="checkbox" name="copy">
                  <i></i>Send a copy to my e-mail address</label>
              </div>
            </fieldset>
            <footer>
              <button type="submit" class="button">Send message</button>
            </footer>
            <div class="message"> <i class="fa fa-check"></i>
              <p>Your message was successfully sent!</p>
            </div>
          </form>
        </div>
        <div class="col-md-4">
          <div class="address-info">
            <h2 class="m-bottom2">Address Info</h2>
            <p>Feel free to talk to our online representative at any time you please using our Live Chat system on our website or one of the below instant messaging programs.</p>
            <br>
            <p>Please be patient while waiting for response.<br>
              <strong>Phone General Inquiries: +1 (012) 345 6789</strong></p>
            <br>
          </div>
          <!-- end section -->
          
          <div class="address-info">
            <h2 class="m-bottom2">Address Info Two</h2>
            <ul class="address-info map">
              <li><i class="fa fa-map-marker"></i> 15 Barnes Wallis Way, 358744, USA</li>
              <li><i class="fa fa-phone"></i> +1 (012) 345 6789</li>
              <li><i class="fa fa-envelope"></i> info@yourdomain.com</li>
            </ul>
          </div>
          <!-- end section --> 
        </div>
      </div>
    </div>
  </div>
  <!-- end features section 2 -->
  
  <footer class="footer-bg m-top8">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-12 m-bottom2">
          <div class="call-to-action clearfix"><span class="fa fa-envelope-o font30 left"></span>
            <div class="feature-icon-col font-white left-padd9 m-top1">
              <h2 class="font20 font-white m-bottom1">Email</h2>
              <p><a href="mailto:info@example.com">info@example.com</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 m-bottom2">
          <div class="call-to-action clearfix"><span class="fa fa-phone font30 left"></span>
            <div class="feature-icon-col font-white left-padd9 m-top1">
              <h2 class="font20 font-white m-bottom1">Phone</h2>
              <p>+1 123 4567 890</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 m-bottom2">
          <div class="call-to-action clearfix"><span class="fa fa-map-marker font30 left"></span>
            <div class="feature-icon-col font-white left-padd9 m-top1">
              <h2 class="font-white font20 m-bottom1">Location</h2>
              <p>Road #152, Chorley, NJ, USA</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <div class="copyrights">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-12">
          <ul class="social-icons style-three">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-flickr"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            <li><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
            <li><a href="#"><i class="fa fa-rss"></i></a></li>
          </ul>
        </div>
        <div class="col-md-12 m-top4"> Copyright &copy; 2016 yourdomian. All Rights Reserved. </div>
      </div>
    </div>
  </div>
  <!-- end footer --> 
</div>
<!-- site wrapper end --> 

<a href="#" class="scrollup"></a> 
<!-- end scroll to top of the page--> 

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery.min.js"></script> 

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script> 

<!-- contact form --> 
<script src="js/form/jquery.form.min.js"></script> 
<script src="js/form/jquery.validate.min.js"></script> 
<script type="text/javascript">
(function($) {
  "use strict";
	$(function()
			{
				// Validation
				$("#sky-form").validate(
				{					
					// Rules for form validation
					rules:
					{
						name:
						{
							required: true
						},
						email:
						{
							required: true,
							email: true
						},
						message:
						{
							required: true,
							minlength: 10
						},
						captcha:
						{
							required: true,
							remote: 'captcha/process.php'
						}
					},
										
					// Messages for form validation
					messages:
					{
						name:
						{
							required: 'Please enter your name',
						},
						email:
						{
							required: 'Please enter your email address',
							email: 'Please enter a VALID email address'
						},
						message:
						{
							required: 'Please enter your message'
						},
						captcha:
						{
							required: 'Please enter characters',
							remote: 'Correct captcha is required'
						}
					},
										
					// Ajax form submition					
					submitHandler: function(form)
					{
						$(form).ajaxSubmit(
						{
							beforeSend: function()
							{
								$('#sky-form button[type="submit"]').attr('disabled', true);
							},
							success: function()
							{
								$("#sky-form").addClass('submited');
							}
						});
					},
					
					// Do not change code below
					errorPlacement: function(error, element)
					{
						error.insertAfter(element.parent());
					}
				});
			});
			})(jQuery);		
		</script> 

<!-- Scroll to Fixied Sticky --> 
<script src="js/mainmenu/sticky.js" type="text/javascript"></script> 

<!-- Scroll Up --> 
<script src="js/scrolltotop/totop.js" type="text/javascript"></script>
</body>
</html>