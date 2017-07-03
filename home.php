<!DOCTYPE html>
<html lang="en">
<head>
<title>GoConsult</title>
<meta charset="utf-8">
<meta name="description" content="GoConsult" />
<meta name="keywords" content="GoConsult, Vidoe Consultation" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/gostyle.css">
<link rel="stylesheet" href="css/gostyle-responsive.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/owl.transitions.css">


<link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
<link rel="manifest" href="favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<script type="text/javascript" src="https://code.jquery.com/jquery-1.10.0.min.js"></script>
<style>
.show_promo { cursor: pointer; }
.header-bg {    padding-bottom: 100px;}

/************* Css for currency switcher **************/
.btn-inr {    background: #009999;    color: #fff;    padding: 5px 0px;    position: relative;   float: left;    max-width: 80px;}
.btn-inr:before{content: "\f156";position:absolute;width: 32px;height: 32px;background: #007c7c;left: -15px;border-radius: 50%;top: -1px;font: normal normal normal 12px/1 FontAwesome;font-size: 20px;padding: 8px 5px;}
.btn-dollar {    background: #ff6633;    color: #fff;    padding: 5px 0px 5px 10px;    position:relative;    float: left;    max-width: 100px;    text-align: left;}
.btn-dollar:before{content: "\f155";position:absolute;width: 32px;height: 32px;background: #e15121;right: -15px;border-radius: 50%;top: -1px;font: normal normal normal 12px/1 FontAwesome;font-size: 20px;padding: 7px 5px;text-align: center;}
</style>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-87579413-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>
<!-- Header start here -->
<header class="header-bg">

<!-- Start: Navbar Area  -->
            <div class="header-navbar">
             
                <nav class="navbar navbar-fixed-top header-nav" data-spy="affix" data-offset-top="100">
                    <div class="container">
                        <div class="navbar-header">

                            <!-- Menu Button show Mobile view -->
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
							<a class="navbar-brand logo" href="https://www.goconsult.in/index.php"><img src="images/go-consult-logo.png"></a>
                        </div>
                        
                        <!-- Main Menu List -->
                        <div class="collapse navbar-collapse" id="navbar-collapse">
                            <ul id="navbar-nav" class="nav navbar-nav navbar-right">
                                
								<li><a href="https://goconsult.in/gc/vconsult/goconsult-1"><img src="images/video-call.png" /></a></li> 
                                <!--li><a href="#" class="btn btn-primary">LOGIN</a></li--> 
                            </ul>
                        </div>
                    </div>
                </nav>

            </div>
            <!-- End: Navbar Area  -->
			
			<!-- Start: Header Content -->
			<div class="container">
				<div class="row header-title">
				<!--h1>Get. Set. Talk.</h1-->
				<img src="images/header-banner.png" style="margin:110px auto 0px auto;" class="img-responsive">
                <div class="clearfix"></div>
                <a href="#get_start" class="btn btn-outline-primary getstart" style="margin-top: 20px;">Get Started</a>
                <!--a href="#" class="btn btn-outline-primary watchvid" data-toggle="modal" data-target="#myModalVideo">Watch Video <img class="circle-play" src="images/circle-play.png"></a-->
				</div>
			</div>

            <!-- video modal start-->
            <div class="modal fade" id="myModalVideo" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content modal_vd">
                        <div class="modal-body">
                            <button type="button" class="close close_x" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <div>
                                <iframe width="100%" height="350" src="https://www.youtube.com/embed/sivXk8cTPIA" frameborder="0" allowfullscreen> </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- video modal end -->
</header>
<section id="integration" class="integration">
<div class="container">
	<div class="row">
		<div class="section-header col-md-6 col-md-offset-3">
			<h2>Integrate in 3 Simple Steps</h2>
			<!--p>Donec sed odio dui. Aenean eu leo quam. Pellentesque ornare sem laca quam venenatis vestibulum.</p-->
		</div>
		<div>
		</div>
	</div>
	<div class="row three-steps">
		<div class="col-md-8 col-md-offset-2">
			<div class="row steps-list form-group">
				<div class="col-sm-4 col-xs-12 steps-item">
					<h4>open your account</h4>
					<i class="fa aria-hidden="true"><img src="images/login-user-icon.png"></i>
				</div>
				<div class="col-sm-4 col-xs-12 steps-item">
					<h4>Paste custom link on website</h4>
					<i class="fa aria-hidden="true"><img src="images/embed-icon.png"></i>
				</div>
				<div class="col-sm-4 col-xs-12 steps-item">
					<h4>Upload logo & set colour scheme</h4>
					<i class="fa aria-hidden"><img src="images/upload-icon.png"></i>
				</div>
			</div>
		</div>
	</div>

</div>
</section>
<section id="goconsult-features" class="features-background goconsult-features">
	<div class="overlay-color">
		<div class="container">
			<div class="row">
				<div class="section-header col-md-6 col-md-offset-3">
				<h2>Features</h2>
				<!--p>Donec sed odio dui. Aenean eu leo quam. Pellentesque ornare sem laca quam venenatis vestibulum.</p-->
				</div>
	<div class="clearfix"></div>
				<div class="features">
					<div class="features-item col-xs-12">
						<ul class="row">
							<li class="col-md-4 col-sm-4 feature-list">
                                        <i class="fa fa-cogs" aria-hidden="true"></i>
                                        <div class="detail">
                                            <h4>Easy Integration</h4>
                                            <p>Can be integrated to your site in seconds – without changing the look and feel of your website.</p>
                                        </div>
                            </li>
							<li class="col-md-4 col-sm-4 feature-list">
                                        <i class="fa fa-download" aria-hidden="true"></i>
                                        <div class="detail">
                                            <h4>No Downloads</h4>
                                            <p>Unlike other online meeting application, GoConsult lets you start start video conferencing without any downloads. Integrate an URL provided by us in your website and get started.</p>
                                        </div>
                            </li>
							<li class="col-md-4 col-sm-4 feature-list">
                                        <i class="fa fa-laptop" aria-hidden="true"></i>
                                        <div class="detail">
                                            <h4>No High-End System Requirements</h4>
                                            <p>You don’t need updated Windows, or MAC OS, or Linux to access GoConsult. It works on every system and every browser.</p>
                                        </div>
                            </li>
							<li class="col-md-4 col-sm-4 feature-list">
                                        <i class="fa fa-sign-in" aria-hidden="true"></i>
                                        <div class="detail">
                                            <h4>Easy To Join A Meeting</h4>
                                            <p>Joining a meeting in GoConsult is as easy as pie. Just go to your website, add your ID, and start the meeting.</p>
                                        </div>
                            </li>
							<li class="col-md-4 col-sm-4 feature-list">
                                        <i class="fa fa-user-secret" aria-hidden="true"></i>
                                        <div class="detail">
                                            <h4>Secure And Private Connection</h4>
                                            <p>We understand the importance of confidentiality in business and hence we make sure that all your connections are protected.</p>
                                        </div>
                            </li>
							<li class="col-md-4 col-sm-4 feature-list">
                                        <i class="fa fa-mobile" aria-hidden="true"></i>
                                        <div class="detail">
                                            <h4>Mobile Friendly</h4>
                                            <p>Like your website, GoConsult works efficiently on every device – regardless of the size of the device. So, even if your clients are on the go and using a mobile phone, you can ask them to join a meeting.</p>
                                        </div>
                            </li>
						</ul>
					</div>
				</div>
			</div>
		</div>

</section>
	
<a id="get_start"></a>
<section id="pricing-table">
    <div class="container">
      <div class="row"> 
	  <div class="section-header col-md-6 col-md-offset-3">
                <h2 class="section-heading">Pricing Table</h2>
				
				<!--div style="float: left; width: 95%; font-size:12px; margin-left:25px;">
				  <div style="margin-top:20px; float:left;">Currency: <a href="javascript:void(0);" onclick="getHostingPlans('inr')"><img src="https://www.goconsult.in/images/inr.png" alt=""></a> / <a onclick="getHostingPlans('usd')" href="javascript:void(0);"><img src="https://www.goconsult.in/images/dollar.png" alt=""></a></div>
				</div-->
                <!--p>Donec sed odio dui. Aenean eu leo quam. Pellentesque ornare sem laca quam venenatis vestibulum.</p-->
            </div>
        <!-- Section Content -->
        <div class="section-content wow fadeIn animated col-md-12" data-wow-duration="1.5s" data-wow-offset="10" style="visibility: visible; animation-duration: 1.5s; animation-name: fadeIn;">
          <div class="row">
		  <div class="col-md-12 form-group">
  <div class="pull-right" style="    min-width: 195px;">
				   <a href="javascript:void(0);" onclick="getHostingPlans('inr')" class="btn btn-inr">INR</a>
				   <a onclick="getHostingPlans('usd')" href="javascript:void(0);" class="btn btn-dollar">DOLLAR</a>
				   <input type="hidden" value='1' id="price_type" />
				</div>
  </div>
            <div class="col-sm-12 col-md-4">
              <div class="pricing-table">
                <div class="header"><i class="fa fa-tag" aria-hidden="true"></i> Basic </div>
                <!--div class="price"> 5999 <span class="currency"></span> <span class="month"> / Year</span> </div-->
                <div class="price_box">
                    <span id="change_currency1" class="rupee"><i class="fa fa-inr" aria-hidden="true"></i> 7999</span>
                    <span class="cut-price"></span>
                    <span class="year">/ Year</span>
                </div>
                <ul class="table-list">
                  <li>3000 min </li>
                  <li> Single User </li>
                  <li class="not"> Priority Integration Support </li>
                  <li class="not"> Client Account Management </li>
				 <li  class="show_promo" id="code1"> Have a Promo Code? </li>
 <li class="hide" id="promocode1">

						<input name="phone"  onkeyup='check_coupon(1);' type="text" autocomplete="off" placeholder="Coupon Code" class="form-control" required id="coupon1">   
						<span id="coupon_status1"></span> 
						
				  </li>
                </ul>
                <a  href="plan-details.php?plan=basic&price=inr" id="link1" class="btn btn-default btn-signup">BUY NOW</a>
              </div>
            </div>
            <div class="col-sm-12 col-md-4">
              <div class="pricing-table" style="background:#f4f4f4;">
              <div class="discnt">15% OFF</div>
                <div class="header"><i class="fa fa-bookmark-o" aria-hidden="true"></i> Standard </div>
                <!--div class="price"> 9999 <span class="currency"></span> <span class="month"> / Year</span> </div-->
                <div class="price_box">
                    <span id="change_currency2" class="rupee"><i class="fa fa-inr" aria-hidden="true"></i> 11999</span>
                    <span id="cut_currency1" class="cut-price">
                    	<i class="fa fa-inr" aria-hidden="true"></i> 13999
                    </span>
                    <span class="year">/ Year</span>
                </div>
                <ul class="table-list">
                  <li> 6000 min </li>
                  <li> Upto 3 Users </li>
                  <li class="not"> Priority Integration Support </li>
                  <li class="not"> Client Account Management </li>
				  <li  class="show_promo" id="code2"> Have a Promo Code? </li>
                    <li class="hide" id="promocode2">

						<input name="phone" onkeyup='check_coupon(2);' type="text" autocomplete="off" placeholder="Coupon Code" class="form-control" required id="coupon2">   
						<span id="coupon_status2"></span> 
					
				  </li>
                </ul>
                <a id="link2" href="plan-details.php?plan=standard&price=inr" class="btn btn-default btn-signup">BUY NOW</a>
              </div>
            </div>
            
            <div class="col-sm-12 col-md-4">
              <div class="pricing-table">
              <div class="discnt">25% OFF</div>
                <div class="header"><i class="fa fa-trophy" aria-hidden="true"></i> Gold </div>
                <!--div class="price"> 13999 <span class="currency"></span> <span class="month"> / Year</span> </div-->
                <div class="price_box">
                    <span id="change_currency3" class="rupee"><i class="fa fa-inr" aria-hidden="true"></i> 15999</span>
                    <span id="cut_currency2" class="cut-price">
                    	<i class="fa fa-inr" aria-hidden="true"></i> 21200
                    </span>
                    <span class="year">/ Year</span>
                </div>
                <ul class="table-list">
                  <li> 9600 min </li>
                  <li> Upto 7 Users </li>
                  <li> Priority Integration Support </li>
                  <li> Client Account Management </li>
				   <li  class="show_promo" id="code3"> Have a Promo Code? </li>
                    <li class="hide" id="promocode3">

						<input name="phone" onkeyup='check_coupon(3);' type="text" autocomplete="off" placeholder="Coupon Code" class="form-control" required id="coupon3">   
						<span id="coupon_status3"></span> 
						
				  </li>
                </ul>
                <a id="link3" href="plan-details.php?plan=gold&price=inr" class="btn btn-default btn-signup">BUY NOW</a>
              </div>
            </div>
           </div>
          </div>
        </div>
      </div>
	</section>
<section id="register" class="register-background register">
	<div class="overlay-color">
		<div class="container">
			<div class="row register-body section-separator">
				<div class="section-header col-md-8 col-md-offset-2">
                    <h2 class="section-heading">Request A Free Demo!</h2>
                    <p>Please enter your details below and our executive will schedule an online demo at your convenient time</p>   
                </div>
				<div class="clearfix"></div>
				
				<div class="col-xs-12">
				<div style="color:red;" id="result_out"></div>
					<form id="register-form" name="register-form" method="post" class="form input-group register-form">
						<div class="container-fluid">
							<div class="row">

								<div class="col-sm-3 col-xs-12">
									<input name="name" id="name" class="form-cus form-control" type="text" placeholder="Name" required>
								</div>

								<div class="col-sm-3 col-xs-12">
									<input name="email" id="email" class="form-cus form-control" type="email" placeholder="Email" required>
								</div>

								<div class="col-sm-3 col-xs-12">
									<input name="contact" id="contact" class="form-cus form-control" type="number" placeholder="Mobile No." required>
								</div>

								<div class="form-group col-sm-3 col-xs-12">
									<button id="submit" class="btn btn-1 btn-fill ">GET Started</button>
								</div>

							</div> <!-- End: .row -->
						</div> <!-- End: .container-fluid -->
          </form>
				</div>
				<div class="col-xs-12 terms">
					<p>By clicking "Get Started" I agree to company’s <a href="terms-condition.html">Terms of Service</a>.</p>
				</div>
			</div>
	
		<script>
		jQuery.noConflict();
	    jQuery(document).ready(function(){
        $(".show_promo").click(function(){
            var id=this.id;
            $(this).addClass('hide');
            $('#promo'+this.id).removeClass('hide');

        });

		$("#register-form").submit(function(e){
            e.preventDefault();

			var name = $("#name").val();
			var email = $("#email").val();
			var contact = $("#contact").val();
			// Returns successful data submission message when the entered information is stored in database.
			var dataString = 'name1='+ name + '&email1='+ email + '&contact1='+ contact;
			if(name==''||email==''||contact=='')
			{
				alert("Please Fill All Fields");
			}
			else
			{
				// AJAX Code To Submit Form.
				$.ajax({
				type: "POST",
				url: "https://www.goconsult.in/goconsult/admin/ajax/request_demo",
				data: dataString,
				cache: false,
				beforeSend: function() {
					// setting a timeout
					$('#result_out').html("<p>Loading please wait...</p>");
				},
				success: function(result){
					
					//alert(result);
					if(result == 'success') { 
					$('form#register-form').trigger("reset");
					$('#result_out').html("<p>Thans for request a demo.</p>");
				  }else{
					$('#result_out').html("<p>Sorry something is wrong.</p>");  
				  }
					
				}
				});
			}
			return false;
		});
	}); 
	
	
</script>
		</div>
	</div>
</section>
<section class="faq-section" id="faq-section">
	<div class="container">
		<div class="row section-separator">
			<div class="section-header col-md-6 col-md-offset-3">
				<h2 class="section-heading">Frequently Asked Question</h2>
				<!--p>Donec sed odio dui. Aenean eu leo quam. Pellentesque ornare sem laca quam venenatis vestibulum.</p-->
				<div class="clearfix"></div>
			</div>
			<div class="faq-body-contant col-md-10 col-md-offset-1">
				<div class="faq-contant-body">
					<div class="faq-image col-sm-6 col-xs-12">
						<img src="images/faq.jpg" alt="">
					</div>
					<div class="faq-inner col-sm-6 col-xs-12">
						<div class="faq-tab ">
						<div class="panel-group" id="accordion">

                                        <!-- Start: Tab-1 -->
                                        <div class="panel panel-default" id="panel1">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">

                                                    <!-- Tab-1 Title Goes Here  -->
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="">Why should I use it instead of other video conferencing tools like Skype, Hangouts etc..?
                                                        <span class="collapse-icon"><span></span></span>
                                                    </a>

                                                </h4>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse in">

                                                <!-- Tab-1 Detail Goes Here  -->
                                                <div class="panel-body">
                                                    Go Consult is more Professional. (Maintains a distance with your personal contacts, not everybody needs to be added in the list) Faster and Better Quality (Lesser Bandwidth used with enhanced image quality) No Downloads (No s/w download) Simple and Quick to Use (Click, Enter Mail id, Go) Reliable (The same id can be used by another employee if the person leaves) No coding (Just add the hyperlink wherever it suits you and you are good to go) Saves time and travel, safe and secure meetings. No time delays as easy as possible. Easy Website integration (Just add the hyperlink in your website and customize the page so that it looks absolutely similar to your own website)
                                                </div>

                                            </div>
                                        </div>
                                        <!-- End: Tab-1 -->

                                        <!-- Start: Tab-2 -->
                                        <div class="panel panel-default" id="panel2">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">

                                                    <!-- Tab-1 Title Goes Here  -->
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed">
                                                        Does it mess  with my existing website's code?
                                                        <span class="collapse-icon"><span></span></span>
                                                    </a>

                                                </h4>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse">

                                                <!-- Tab-2 Detail Goes Here  -->
                                                <div class="panel-body">
                                                    No, the code on your page remains untouched and undisturbed. All you need to add is a hyperlink that would be sent on your mail wherever you find it feasible. You can either create a new video button on your website or customize the page to sync with your own website or you can add a video option in any of the tab like contact us etc. with a video option available.
                                                </div>

                                            </div>
                                        </div>
                                        <!-- End: Tab-2 -->

                                        <!-- Start: Tab-3 -->
                                        <div class="panel panel-default" id="panel3">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">

                                                    <!-- Tab-3 Title Goes Here  -->
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed">
                                                        How easy it is to integrate?
                                                        <span class="collapse-icon"><span></span></span>
                                                    </a>

                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">

                                                <!-- Tab-3 Detail Goes Here  -->
                                                <div class="panel-body">
                                                   If you are a marketing consultant, counselor, or provide any other consultancy service and want a smooth and efficient video communication for your meetings, discussions, counseling, seminars etc. then here we go! You just need to purchase a plan on the Go Consult website as per your requirement and there you go! A hyperlink would be created which is hardly a two minute process to add on your website and then customize the look and feel of the page as you want it to be. That’s it! You are good to go. Simply click on the link, enter your mail id and here it is. As easy you’d imagine it to be.
                                                </div>

                                            </div>
                                        </div>
                                        <!-- End: Tab-3 -->

                                        <!-- Start: Tab-4 -->
                                        <div class="panel panel-default" id="panel4">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">

                                                    <!-- Tab-4 Title Goes Here  -->
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" class="collapsed">
                                                        Do I need to install anything ?
                                                        <span class="collapse-icon"><span></span></span>
                                                    </a>

                                                </h4>
                                            </div>
                                            <div id="collapseFour" class="panel-collapse collapse">

                                                <!-- Tab-4 Detail Goes Here  -->
                                                <div class="panel-body">
                                                   No Downloads! You don’t need to install it ever. Once the link is added, you just a step back of entering your email id and enter the discussion room. It is super easy and supported by all the modern browsers and modern gadgets like PC, Mobile, and Tablets.
                                                </div>

                                            </div>
                                        </div> <!-- End: Tab-4 -->
                                        
                                    </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="copyright col-sm-12 col-md-6">
				<p>© 2016 <a href="" title="">Eyas Ventures Pvt Ltd.</a></p>
			</div>
			<div class="copyright col-sm-12 col-md-6">
				<ul class="footer-nav">
				<li><a href="https://www.goconsult.in/goconsult/admin/login" title="">Admin</a></li>
                <li><a href="https://www.goconsult.in/about-us.html" title="">About us</a></li>
                <li><a href="https://www.goconsult.in/terms-condition.html" title="">Terms & Conditions</a></li>
                <li><a href="https://www.goconsult.in/privacy-policy.html" title="">Privacy Policy</a><li>
                </ul>
			</div>
		</div>
	</div>
	
</footer>
<!--div id="wd_id"><a href="https://www.goconsult.in/goconsult/consult/welcome/apo/1" target="blank" style="position: fixed;z-index: 10000;bottom: 0;right: 0;">  <div style="float: left;"> <link rel="stylesheet" href="https://goconsult.in/emailerImg/call-now.css"> <input type="checkbox" name="one" id="item-1" class="input_call"> <div class="containerdiv" style="width: 168px;">   <img src="https://goconsult.in/emailerImg/call-phone.png" style="width: 60px; margin-left: 10px;"> <img src="https://goconsult.in/emailerImg/call-now-text.png" style="width: 60px; margin-left: 10px;">  <label for="item-1" style="display:block;position: absolute; right: 2px;top: 2px; background: none;border: 0; cursor: pointer;"> <img src="https://goconsult.in/emailerImg/close.png" style="width: 18px;">  </label> </div> </div>  </a></div><script src="https://www.goconsult.in/goconsult/assets/js/widget.js" type="text/javascript"> </script><script type="text/javascript">init_widget("1P94908", "Sudhakar ", "click here for video chat");</script-->
</body>

<style>
    .close_x {font-size: 30px !important;}
    .modal_vd { padding: 0; background: transparent !important;box-shadow: none !important; border: none !important;}
</style>
<!--- jQurery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script>
	var sync1 = $("#sync1"); // client's message

    sync1.owlCarousel({
      singleItem : true,
      slideSpeed : 1000,
      navigation: false,
      pagination:true,
      responsiveRefreshRate : 200,
      autoPlay: 5000
    });
</script>


<!-- Change the "src" attribute according to your installation path -->
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
<script src="js/form_validation.js"></script>

<script>
function getHostingPlans(currency) {
	if(currency == 'inr'){
		document.getElementById('change_currency1').innerHTML = '<i class="fa fa-inr" aria-hidden="true"></i> 7999 ';
		document.getElementById('change_currency2').innerHTML = '<i class="fa fa-inr" aria-hidden="true"></i> 11999 ';
		document.getElementById('change_currency3').innerHTML = '<i class="fa fa-inr" aria-hidden="true"></i> 15999 ';
		document.getElementById('cut_currency1').innerHTML = '<i class="fa fa-inr" aria-hidden="true"></i> 13999 ';
		document.getElementById('cut_currency2').innerHTML = '<i class="fa fa-inr" aria-hidden="true"></i> 21200 ';
		$('#price_type').val(1);
        $('#coupon1').val('');
        $('#coupon2').val('');
        $('#coupon3').val('');
		$('#link1').attr("href", "plan-details.php?plan=basic&price=inr");
		$('#link2').attr("href", "plan-details.php?plan=standard&price=inr");
		$('#link3').attr("href", "plan-details.php?plan=gold&price=inr");
		
	}
	if(currency == 'usd'){
		$('#price_type').val(2);
        $('#coupon1').val('');
        $('#coupon2').val('');
        $('#coupon3').val('');
		document.getElementById('change_currency1').innerHTML = '<i class="fa fa-usd" aria-hidden="true"></i> 117 ';
		document.getElementById('change_currency2').innerHTML = '<i class="fa fa-usd" aria-hidden="true"></i> 176 ';
		document.getElementById('change_currency3').innerHTML = '<i class="fa fa-usd" aria-hidden="true"></i> 235 ';
		document.getElementById('cut_currency1').innerHTML = '<i class="fa fa-usd" aria-hidden="true"></i> 205 ';
		document.getElementById('cut_currency2').innerHTML = '<i class="fa fa-usd" aria-hidden="true"></i> 311 ';
		
		$('#link1').attr("href", "plan-details.php?plan=basic&price=usd");
		$('#link2').attr("href", "plan-details.php?plan=standard&price=usd");
		$('#link3').attr("href", "plan-details.php?plan=gold&price=usd");
	}
	
}
function check_coupon(plan)
{
	if(plan==1)
	{
		var plan_name='basic';
	}else if(plan==2){
		var plan_name='standard';
	}
	else{
		var plan_name='gold';
	}
   var data= $('#price_type').val();
	var coupon=document.getElementById( "coupon"+plan ).value;	
	if(coupon=='')
	{
		$('#coupon_status'+plan).text('')
		//$( '#coupon_status'+plan ).css('color','red');
        /************************************************/
        if(data==1)
        {
        $('#link'+plan).attr("href", "plan-details.php?plan="+plan_name+"&price=inr");
        }
        else{
        $('#link'+plan).attr("href", "plan-details.php?plan="+plan_name+"&price=usd");
        }
        /*************************/ 

	}else{
		$('#coupon_status'+plan).text('');
		$.ajax({  type: 'post', 
			dataType:'json',
			url: 'checkcoupon.php',  
			data: {   type:data,coupon:coupon,pt:plan  },  
			success: function (response) {   
			$( '#coupon_status'+plan ).html(response.suc);  
			if(response.suc=='Coupon code Successfully applied')
			{
				$( '#coupon_status'+plan ).css('color','green');
				if(data==1)
				{
				$('#link'+plan).attr("href", "plan-details.php?plan="+plan_name+"&price=inr&coupon="+response.discount);
				}
				else{
					$('#link'+plan).attr("href", "plan-details.php?plan="+plan_name+"&price=usd&coupon="+response.discount);
				}
				//$( '#amount'+data ).val(response.discount);  				
			}
			else{
				$( '#coupon_status'+plan ).css('color','red');
                /************************************************/
                if(data==1)
                {
                $('#link'+plan).attr("href", "plan-details.php?plan="+plan_name+"&price=inr");
                }
                else{
                $('#link'+plan).attr("href", "plan-details.php?plan="+plan_name+"&price=usd");
                }
                /*************************/  
			}
			}  
		}); 
	}
}
</script>


</html>


<!--section id="client-feedback" class="client-feedback">
	<div class="container">
		<div class="row section-separator">
			<div class="section-header col-md-6 col-md-offset-3">
				<h2 class="section-heading">Client's Feedback</h2>
				
			</div>
			<div class="clearfix"></div>
			<div class="client-feedback-contant col-xs-12">
				<div class="row">
					<div class="left-contant col-md-5 col-sm-12">
						<div class="quote-sym"><i class="fa fa-quote-left"></i></div>
						<div id="sync1" class="owl-carousel owl-theme" style="opacity: 1; display: block;">

                                    
										<div class="item">
                                        <figure class="">
                                            <blockquote>Nullam quis risus risus eget urna mollis ornare vel eu leo. Donec id elit non mi porta gravida at eget metus. Nulla vitae elit libero, a pharetra augu. etiam porta sem malesuada magna mollis euismod.</blockquote>
                                            <figcaption>
                                                
                                                <img src="images/clients/client-1.jpg" alt="" class="img-responsive">
                                                <p class="name">Maria Adair</p>
                                                <cite>Programmer</cite>
                                            </figcaption>
                                        </figure>
										</div>
										<div class="item">
                                        <figure class="">
                                            <blockquote>Nullam quis risus risus eget urna mollis ornare vel eu leo. Donec id elit non mi porta gravida at eget metus. Nulla vitae elit libero, a pharetra augu. etiam porta sem malesuada magna mollis euismod.</blockquote>
                                            <figcaption>
                                                
                                                <img src="images/clients/client-1.jpg" alt="" class="img-responsive">
                                                <p class="name">Maria Adair</p>
                                                <cite>Programmer</cite>
                                            </figcaption>
                                        </figure>
										</div>
										<div class="item">
                                        <figure class="">
                                            <blockquote>Nullam quis risus risus eget urna mollis ornare vel eu leo. Donec id elit non mi porta gravida at eget metus. Nulla vitae elit libero, a pharetra augu. etiam porta sem malesuada magna mollis euismod.</blockquote>
                                            <figcaption>
                                                
                                                <img src="images/clients/client-1.jpg" alt="" class="img-responsive">
                                                <p class="name">Maria Adair</p>
                                                <cite>Programmer</cite>
                                            </figcaption>
                                        </figure>
										</div>
										<div class="item">
                                        <figure class="">
                                            <blockquote>Nullam quis risus risus eget urna mollis ornare vel eu leo. Donec id elit non mi porta gravida at eget metus. Nulla vitae elit libero, a pharetra augu. etiam porta sem malesuada magna mollis euismod.</blockquote>
                                            <figcaption>
                                                
                                                <img src="images/clients/client-1.jpg" alt="" class="img-responsive">
                                                <p class="name">Maria Adair</p>
                                                <cite>Programmer</cite>
                                            </figcaption>
                                        </figure>
										</div>
							</div>
					</div>
					<div class="right-contant col-md-7 col-sm-12">
						<div class="row">
							<ul class="nav">
                                        <li class="col-xs-6 col-sm-4">
                                            <div class="row">
                                                <a href="#">
                                                    <img src="images/clients-logo/1.png" alt="Clients logo" class="">
                                                </a>
                                            </div>
                                        </li>
                                        <li class="col-xs-6 col-sm-4">
                                            <div class="row">
                                                <a href="#"><img src="images/clients-logo/1.png" alt="Clients logo" class=""></a>
                                            </div>
                                        </li>
                                        <li class="col-xs-6 col-sm-4">
                                            <div class="row">
                                                <a href="#">
                                                    <img src="images/clients-logo/1.png" alt="Clients logo" class="">
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section-->