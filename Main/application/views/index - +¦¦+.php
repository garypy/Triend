<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Triend Home Page</title>
<link rel="stylesheet" href='<?php echo base_url() . 'resources/css/font-awesome.min.css'; ?>'>
<link rel="stylesheet" type="text/css" href='<?php echo base_url(). 'resources/css/style.css'; ?>'>
<link href='http://fonts.useso.com/css?family=Open+Sans:400,700,800,600,300,200' rel='stylesheet' type='text/css'>
<link href= '<?php echo base_url() . 'resources/css/responsive.css'; ?>' rel="stylesheet" media="screen" type="text/css">
<link rel="stylesheet" href='<?php echo base_url() . 'resources/sidr/stylesheets/jquery.sidr.dark.css'?>>
<script src='<?php echo base_url() .'resources/js/jquery.min.js'; ?>' ></script>
<script src="<?php echo base_url() .'resources/sidr/jquery.sidr.min.js'; ?>"></script>
</head>

<body>
<div class="header">
  <div class="container">
    <div class="logo-menu">
      <div class="logo">
        <h1><a href="#">Triend Technology</a></h1>
      </div>
      <!--<a id="simple-menu" href="#sidr">Toggle menu</a>-->
      <div id="mobile-header"> <a class="responsive-menu-button" href="#"><img src=<?php echo base_url() . 'resources/images/11.png'; ?>/></a> </div>
      <div class="menu" id="navigation">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#about">About us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="banner">
  <div class="container">
    <div class="header-text">
      <h2>Lorem ipsum dolor sit amet</h2>
      <p class="small-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
      <div class="button-section"> <a href="#" class="top-button">More Info</a> </div>
    </div>
  </div>
</div>
<div class="about" id="about">
  <div class="container">
    <h3 class="text-head">About us</h3>
    <p class="box-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
  </div>
</div>
<div class="copyrights">Collect from <a href="http://www.cssmoban.com/"  title="缃戠珯妯℃澘">缃戠珯妯℃澘</a></div>
<div class="services" id="services">
  <div class="container">
    <h3 class="text-head">Our services</h3>
    <div class="features-section">
      <ul>
        <li>
          <div class="feature-icon icon1"></div>
          <h4>Autenrm nusquam</h4>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
        </li>
        <li>
          <div class="feature-icon icon2"></div>
          <h4>Alterum docendi</h4>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
        </li>
        <li>
          <div class="feature-icon icon3"></div>
          <h4>Graece praesent</h4>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
        </li>
        <li>
          <div class="feature-icon icon4"></div>
          <h4>Vocent scaevola</h4>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
        </li>
        <li>
          <div class="feature-icon icon5"></div>
          <h4>Dicat graeci no eum</h4>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
        </li>
        <li>
          <div class="feature-icon icon6"></div>
          <h4>Perfecto sapientem</h4>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
        </li>
      </ul>
    </div>
  </div>
</div>
<div class="contact" id="contact">
  <div class="container">
    <h3 class="text-head">Contact us</h3>
    <p class="box-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
    <div class="contact-section">
      <form>
        <input type="text" name="Name" placeholder="Name" />
        <input type="email" name="email" placeholder="Email"/>
        <textarea placeholder="Message" rows="6"></textarea>
        <button type="submit" class="submit">Send Message</button>
      </form>
    </div>
  </div>
</div>
<div class="footer">
  <div class="container">
    <ul class="socialmedia">
      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
      <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
      <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
    </ul>
    <div class="infooter">
      <p class="copyright">Copyright &copy; 2015 Triend. </p>
    </div>
  </div>
</div>
<script type="text/javascript">		
			 $(document).ready(function() {
				$('#simple-menu').sidr({
				side: 'right'
			});
			});
			$('.responsive-menu-button').sidr({
				name: 'sidr-main',
				source: '#navigation',
				side: 'right'

				});
			$(document).ready(
			function() {
			$("html").niceScroll({cursorborder:"0px solid #fff",cursorwidth:"5px",scrollspeed:"70"});
			}
			);
		</script>
</body>
</html>