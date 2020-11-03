<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Car Dealer - The Best Car Dealer Automotive Responsive HTML5 Template" />
<meta name="author" content="potenzaglobalsolutions.com" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Car Dealer - The Best Car Dealer Automotive Responsive HTML5 Template</title>

<!-- Favicon -->
<link rel="shortcut icon" href="/images/favicon.ico" />

<!-- bootstrap -->
<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" />

<!-- flaticon -->
<link rel="stylesheet" type="text/css" href="/css/flaticon.css" />

<!-- mega menu -->
<link rel="stylesheet" type="text/css" href="/css/mega-menu/mega_menu.css" />

<!-- font awesome -->
<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css" />

<!-- owl-carousel -->
<link rel="stylesheet" type="text/css" href="/css/owl-carousel/owl.carousel.css" />

<!-- magnific-popup -->
<link rel="stylesheet" type="text/css" href="/css/magnific-popup/magnific-popup.css" />

<!-- revolution -->
<link rel="stylesheet" type="text/css" href="revolution/css/settings.css" />

<!-- main style -->
<link rel="stylesheet" type="text/css" href="/css/style.css" />

<!-- responsive -->
<link rel="stylesheet" type="text/css" href="/css/responsive.css" />

<!-- slick css -->
<link rel="stylesheet" type="text/css" href="css/slick/slick.css" />
<link rel="stylesheet" type="text/css" href="css/slick/slick-theme.css" />
 
</head>

<body>
 
<!--=================================
  loading -->
  
 <div id="loading">
  <div id="loading-center">
      <img src="/images/loader.gif" alt="">
 </div>
</div>

<!--=================================
  loading -->


<!--=================================
 header -->

<header id="header" class="defualt">
<div class="topbar">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12">
				<div class="topbar-left text-lg-left text-center">
				   <ul class="list-inline">
             <li> <i class="fa fa-envelope-o"> </i> support@website.com</li> 
             <li> <i class="fa fa-clock-o"></i> Mon - Sat 8.00 - 18.00. Sunday CLOSED</li>
           </ul>
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="topbar-right text-lg-right text-center">
					 <ul class="list-inline">
             <li> <i class="fa fa-phone"></i> (007) 123 456 7890</li> 
             <li><a href="#"><i class="fa fa-facebook"></i></a></li>   
             <li><a href="#"><i class="fa fa-twitter"></i></a></li>   
             <li><a href="#"><i class="fa fa-instagram"></i></a></li>   
             <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>   
           </ul>
				</div>
			</div>
		</div>
	</div>
</div>
 
<!--=================================
 mega menu -->

<div class="menu">  
  <!-- menu start -->
   <nav id="menu" class="mega-menu">
    <!-- menu list items container -->
    <section class="menu-list-items">
     <div class="container"> 
      <div class="row"> 
       <div class="col-md-12"> 
        <!-- menu logo -->
        <ul class="menu-logo">
            <li>
                <a href="index.html"><img id="logo_img" src="/images/logo-light.png" alt="logo"> </a>
            </li>
        </ul>
        <!-- menu links -->
        <ul class="menu-links">
            <!-- active class -->
            <li class="active"><a href="javascript:void(0)"> Home <i class="fa fa-angle-down fa-indicator"></i></a>
                 <!-- drop down multilevel  -->
                <ul class="drop-down-multilevel">
                    <li class="active"><a href="{{ route('index') }}">Home</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0)">Car listing  <i class="fa fa-angle-down fa-indicator"></i></a> 
               <!-- drop down multilevel  -->
                <ul class="drop-down-multilevel">
                    <li><a href="{{ route('listingOne') }}">listing 01</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0)">Car details  <i class="fa fa-angle-down fa-indicator"></i></a> 
               <!-- drop down multilevel  -->
                <ul class="drop-down-multilevel">
                    <li><a href="{{ route('detailsOne') }}">details 01</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0)"> Contact <i class="fa fa-angle-down fa-indicator"></i></a>
                 <!-- drop down multilevel  -->
                <ul class="drop-down-multilevel right-menu">
                   <li><a href="{{ ('contactOne') }}">contact 01</a></li>
                </ul>
            </li>
            <li>
              <div class="search-top"> <a class="search-btn not_click d-none d-lg-block" href="javascript:void(0);">Search Button</a>
                <div class="search-box not-click">
                  <div class="row">
                    <div class="col-lg-2 col-sm-6">
                     <div class="selected-box">
                      <select class="selectpicker">
                      <option>Make </option>
                      <option>BMW</option>
                      <option>Honda </option>
                      <option>Hyundai </option>
                      <option>Nissan </option>
                      <option>Mercedes Benz </option>
                     </select>
                    </div>
                     </div>
                     <div class="col-lg-2 col-sm-6">
                      <div class="selected-box">
                         <select class="selectpicker">
                          <option>Model</option>
                          <option>3-Series</option>
                          <option>Carrera</option>
                          <option>GT-R</option>
                          <option>Cayenne</option>
                          <option>Mazda6</option>
                          <option>Macan</option>
                         </select>
                       </div>
                      </div>
                      <div class="col-lg-2 col-sm-6">
                       <div class="selected-box">
                       <select class="selectpicker">
                        <option>Year</option>
                        <option>2010</option>
                        <option>2011</option>
                        <option>2012</option>
                        <option>2013</option>
                        <option>2014</option>
                        <option>2015</option>
                        <option>2016</option>
                       </select>
                      </div>
                        </div>
                       <div class="col-lg-2 col-sm-6">
                        <div class="selected-box">
                         <select class="selectpicker">
                            <option>Body style</option>
                            <option>2dr Car</option>
                            <option>4dr Car</option>
                            <option>Convertible</option>
                            <option>Sedan</option>
                            <option>Sports Utility</option>
                           </select>
                          </div>
                        </div>
                       <div class="col-lg-2 col-sm-6">
                        <div class="selected-box">
                         <select class="selectpicker">
                            <option>Vehicle Status</option>
                            <option>Condition</option>
                            <option>All Conditions</option>
                            <option>Condition</option>
                            <option>Brand New</option>
                            <option>Slightly Used</option>
                            <option>Used</option> 
                           </select>
                         </div>
                        </div>
                       <div class="col-lg-2 col-sm-6">
                        <div class="text-center">
                          <button class="button red" type="button">Search</button>
                      </div>
                    </div>
                  </div>
                 </div>
               </div>
              </li>
            </ul>
           </div>
          </div>
         </div>
        </section>
       </nav>
      <!-- menu end -->
     </div>
    </header>

<!--=================================
 header -->

    @yield('content')
    
<!--=================================
 footer -->

 <footer class="footer bg-2 bg-overlay-black-90">
  <div class="container">
    <div class="row">
     <div class="col-md-12">
      <div class="social">
        <ul>
          <li><a class="facebook" href="#">facebook <i class="fa fa-facebook"></i> </a></li>
          <li><a class="twitter" href="#">twitter <i class="fa fa-twitter"></i> </a></li>
          <li><a class="pinterest" href="#">pinterest <i class="fa fa-pinterest-p"></i> </a></li>
          <li><a class="dribbble" href="#">dribbble <i class="fa fa-dribbble"></i> </a></li>
          <li><a class="google-plus" href="#">google plus <i class="fa fa-google-plus"></i> </a></li>
          <li><a class="behance" href="#">behance <i class="fa fa-behance"></i> </a></li>
        </ul>
       </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <div class="about-content">
          <img class="img-fluid" id="logo-footer" src="/images/logo-light.png" alt="">
          <p>We provide everything you need to build an amazing dealership website developed especially for car sellers dealers or auto motor retailers.</p>
        </div>
        <div class="address">
          <ul>
            <li> <i class="fa fa-map-marker"></i><span>220E Front St. Burlington NC 27215</span> </li>
            <li> <i class="fa fa-phone"></i><span>(007) 123 456 7890</span> </li>
            <li> <i class="fa fa-envelope-o"></i><span>support@website.com</span> </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="usefull-link">
        <h6 class="text-white">Useful Links</h6>
          <ul>
            <li><a href="#"><i class="fa fa-angle-double-right"></i> Change Oil and Filter</a></li>
            <li><a href="#"><i class="fa fa-angle-double-right"></i> Brake Pads Replacement</a></li>
            <li><a href="#"><i class="fa fa-angle-double-right"></i> Timing Belt Replacement</a></li>
            <li><a href="#"><i class="fa fa-angle-double-right"></i> Pre-purchase Car Inspection</a></li>
            <li><a href="#"><i class="fa fa-angle-double-right"></i> Starter Replacement</a></li>
          </ul>
        </div> 
      </div>
      <div class="col-lg-3 col-md-6">
       <div class="recent-post-block">
        <h6 class="text-white">recent posts </h6>
          <div class="recent-post">
            <div class="recent-post-image">
              <img class="img-fluid" src="/images/car/01.jpg" alt=""> 
            </div>
            <div class="recent-post-info">
                <a href="#">Time to change your </a>
                <span class="post-date"><i class="fa fa-calendar"></i>September 10, 2017</span>
            </div>
         </div>
         <div class="recent-post">
            <div class="recent-post-image">
              <img class="img-fluid" src="/images/car/02.jpg" alt=""> 
            </div>
            <div class="recent-post-info">
                <a href="#">The best time to </a>
                <span class="post-date"><i class="fa fa-calendar"></i>September 10, 2017</span>
            </div>
         </div>
         <div class="recent-post">
            <div class="recent-post-image">
              <img class="img-fluid" src="/images/car/03.jpg" alt=""> 
            </div>
            <div class="recent-post-info">
                <a href="#">Replacing a timing </a>
                <span class="post-date"><i class="fa fa-calendar"></i>September 10, 2017</span>
            </div>
         </div>
       </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="news-letter">
        <h6 class="text-white">subscribe Our Newsletter </h6>
         <p>Keep up on our always evolving products features and technology. Enter your e-mail and subscribe to our newsletter.</p>
         <form class="news-letter">
           <input type="email" placeholder="Enter your Email" class="form-control placeholder">
           <a class="button red" href="#">Subscribe</a>
         </form>
        </div> 
      </div>
    </div>
    <hr />
    <div class="copyright">
     <div class="row">
      <div class="col-lg-6 col-md-12">
       <div class="text-lg-left text-center">
        <p>©Copyright 2018 Car Dealer Developed by <a href="http://www.potenzaglobalsolutions.com/" target="_blank">Potenzaglobalsolutions</a></p>
       </div>
      </div>
      <div class="col-lg-6 col-md-12">
        <ul class="list-inline text-lg-right text-center">
          <li><a href="#">privacy policy </a> | </li> 
          <li><a href="#">terms and conditions </a> |</li> 
          <li><a href="#">contact us </a></li>
        </ul>
      </div>
     </div>
    </div>
  </div>
</footer>
 
<!--=================================
 footer --> 

 <!--=================================
 back to top -->

<div class="car-top">
  <span><img src="/images/car.png" alt=""></span>
</div>

 <!--=================================
 back to top -->

<!--=================================
 jquery -->

<!-- jquery  -->
<script type="text/javascript" src="/js/jquery-3.3.1.min.js"></script>
 
<!-- bootstrap -->
<script type="text/javascript" src="/js/popper.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>

<!-- mega-menu -->
<script type="text/javascript" src="/js/mega-menu/mega_menu.js"></script>

<!-- appear -->
<script type="text/javascript" src="/js/jquery.appear.js"></script>

<!-- counter -->
<script type="text/javascript" src="/js/counter/jquery.countTo.js"></script>

<!-- owl-carousel -->
<script type="text/javascript" src="/js/owl-carousel/owl.carousel.min.js"></script>

<!-- select -->
<script type="text/javascript" src="/js/select/jquery-select.js"></script>

<!-- magnific popup -->
<script type="text/javascript" src="/js/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- revolution -->
<script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>
 
<!-- custom -->
<script type="text/javascript" src="/js/custom.js"></script>

<script type="text/javascript">
   (function($){
  "use strict";

    var tpj=jQuery;
      var revapi2;
      tpj(document).ready(function() {
        if(tpj("#rev_slider_2_1").revolution == undefined){
          revslider_showDoubleJqueryError("#rev_slider_2_1");
        }else{
          revapi2 = tpj("#rev_slider_2_1").show().revolution({
            sliderType:"standard",
            sliderLayout:"fullwidth",
            dottedOverlay:"none",
            delay:9000,
            navigation: {
              keyboardNavigation:"off",
              keyboard_direction: "horizontal",
              mouseScrollNavigation:"off",
                             mouseScrollReverse:"default",
              onHoverStop:"off",
              bullets: {
                enable:true,
                hide_onmobile:false,
                style:"hermes",
                hide_onleave:false,
                direction:"horizontal",
                h_align:"center",
                v_align:"bottom",
                h_offset:0,
                v_offset:50,
                                space:10,
                tmp:''
              }
            },
            visibilityLevels:[1240,1024,778,480],
            gridwidth:1570,
            gridheight:1000,
            lazyType:"none",
            shadow:0,
            spinner:"spinner3",
            stopLoop:"off",
            stopAfterLoops:-1,
            stopAtSlide:-1,
            shuffle:"off",
            autoHeight:"off",
            disableProgressBar:"on",
            hideThumbsOnMobile:"off",
            hideSliderAtLimit:0,
            hideCaptionAtLimit:0,
            hideAllCaptionAtLilmit:0,
            debugMode:false,
            fallbacks: {
              simplifyAll:"off",
              nextSlideOnWindowFocus:"off",
              disableFocusListener:false,
            }
          });
        }
      }); 
  })(jQuery);

</script>

<!-- slick -->
<script type="text/javascript" src="js/slick/slick.min.js"></script>


@yield('scripts')

</body>
</html>

