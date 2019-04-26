<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>CTclinic</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Yoga Lite Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <!-- //Meta tag Keywords -->
    <!-- Custom-Files -->
    <link rel="stylesheet" href="{{ asset('main_site/css/bootstrap.css') }}">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="{{ asset('main_site/css/style.css') }}" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="{{ asset('main_site/css/font-awesome.css') }}" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="//fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700" rel="stylesheet">
    <!-- //Fonts -->
</head>

<body>
    <!-- //header -->
    <header class="py-sm-2 pt-3 pb-2" id="home">
        <div class="container-fluid">
            <!-- nav -->
<!--             <div class="top d-md-flex">
                <div id="logo">
                    <img src="./images/logo.png" class="img-responsive" style="width:100px;height: 80px;">
                </div>
                <div class="search-form mx-md-auto">
                    <div class="form-w3layouts-grid">
                        <form action="#" method="post" class="newsletter">
                            <input class="search" type="search" placeholder="Search..." required="">
                            <button class="form-control btn" value=""><span class="fa fa-search"></span></button>
                        </form>
                    </div>
                </div>
                <div class="forms mt-md-0 mt-2">
                    <a href="login.html" class="btn"><span class="fa fa-user-circle-o"></span> Sign In</a>
                    <a href="register.html" class="btn"><span class="fa fa-pencil-square-o"></span> Sign Up</a>
                </div>
            </div> -->
            <nav class="text-center">
                <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
                <input type="checkbox" id="drop" />
                <ul class="menu">
                	<li>
                		                <div id="logo">
                    <img src="{{ asset('main_site/images/logo.png') }}" class="img-fluid" style="width:100px;height: 50px;">
                </div>
                	</li>
                    <li class="active"><a href="/">Home</a></li>
                        <li>
                        <!-- First Tier Drop Down -->
                        <label for="drop-2" class="toggle">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span>
                        </label>
                        <a href="#">Why Choose Us<span class="fa fa-angle-down" aria-hidden="true"></span></a>
                        <input type="checkbox" id="drop-2" />
                        <ul id="why_choose_us">
                        </ul>
                    </li>


                         <li>
                        <!-- First Tier Drop Down -->
                        <label for="drop-2" class="toggle">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span>
                        </label>
                        <a href="#">What We Treat<span class="fa fa-angle-down" aria-hidden="true"></span></a>
                        <input type="checkbox" id="drop-2" />
                        <ul id="what_we_treat">
                        </ul>
                    </li>
                    
                    <li>
                        <!-- First Tier Drop Down -->
                        <label for="drop-2" class="toggle">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span>
                        </label>
                        <a href="#">Services<span class="fa fa-angle-down" aria-hidden="true"></span></a>
                        <input type="checkbox" id="drop-2" />
                        <ul id="services">
                            <li><a href="services.html" class="drop-text">Services</a></li>
                            <li><a href="#stats" class="drop-text">Statistics</a></li>
                            <li><a href="#test" class="drop-text">Reviews</a></li>
                            <li><a href="single.html" class="drop-text">More Info</a></li>
                        </ul>
                    </li>

                    <li><a href="career.html">career</a></li>
                    <li><a href="Our_team.html">Our Team</a></li>
                    <li><a href="FAQ">FaQ</a></li>
                </ul>
            </nav>
            <!-- //nav -->
        </div>
    </header>
    <!-- //header -->
<div name="content">
   @yield('content')
</div>
 
    <footer class="footer-content py-5">
        <div class="container py-lg-5 inner-sec-w3ls">
            <div class="row">
                <div class="col-lg-4 footer-top mt-md-0 mt-sm-5 pr-lg-5">
                    <div id="logo">
                    <img src="{{ asset('main_site/images/logo.png') }}" class="img-responsive" style="width:100px;height: 50px;">
                </div>
                    <p class="my-3">Donec consequat sam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus</p>

                </div>
<!--                 <div class="col-lg-3 mt-md-0 mt-5">
                    <div class="footer-w3pvt">
                        <h3 class="mb-3 w3pvt_title">Navigation</h3>
                        <hr>
                        <div class="row">
                            <ul class="col-6 list-info-w3pvt links">

                                <li>
                                    <a href="events.html">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="about.html">
                                        About Us
                                    </a>
                                </li>
                                <li>
                                    <a href="events.html">
                                        Events
                                    </a>
                                </li>
                                <li>
                                    <a href="services.html">
                                        Services
                                    </a>
                                </li>
                                <li>
                                    <a href="contact.html">
                                        Contact Us
                                    </a>
                                </li>

                            </ul>
                            <ul class="col-6 list-info-w3pvt links">
                                <li>
                                    <a href="about.html">
                                        Our Mission
                                    </a>
                                </li>
                                <li>
                                    <a href="events.html">
                                        Latest Posts
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Explore
                                    </a>
                                </li>
                                <li>
                                    <a href="contact.html">
                                        Find us
                                    </a>
                                </li>
                                <li>
                                    <a href="events.html">
                                        Privacy Policy
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>-->

          

                <div class="col-lg-2  mt-lg-0 mt-5">
                    <div class="footer-w3pvt">
                        <h3 class="mb-3 w3pvt_title">Contact Us</h3>
                        <hr>
                        <div class="last-w3layouts-contact">
                            <p>
                                <a href="mailto:example@email.com">info@example.com</a>
                            </p>
                        </div>
                        <div class="last-w3layouts-contact my-2">
                            <p>+ 456 123 7890</p>
                        </div>
                        <div class="last-w3layouts-contact">
                            <p>+ 90 nsequursu dsdesdc,
                                <br>xxx Honey State 049436.</p>
                        </div>
                    </div>
                </div>

                      <div class="col-lg-6">
                      	
                      	<div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=manchster&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>Werbung: <a href="https://www.pureblack.de">Pure Black GmbH</a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
                      </div>
<!--                  <div class="col-lg-3 mt-lg-0 mt-5">
                    <div class="footer-w3pvt">
                        <h3 class="mb-3 w3pvt_title">Stay up to date</h3>
                        <hr>
                        <div class="footer-text">
                            <p>By subscribing to our mailing list you will always get latest news and updates from us.</p>
                            <form action="#" method="post">
                                <input type="email" name="Email" placeholder="Enter your email..." required="">
                                <button class="btn1 btn"><span class="fa fa-paper-plane-o" aria-hidden="true"></span></button>
                            </form>
                        </div>
                    </div>

                </div> -->
            </div>

        </div>
    </footer>
    <!-- //footer -->
    <div class="copy-right py-2">
        <div class="container-fluid inner-sec-w3ls">
            <div class="row">
                <div class="col-lg-6 copy-w3pvt">
                    <p class="copy-right-grids text-li text-left my-sm-4 my-4">© 2019 CtClinic . All Rights Reserved
                    </p>
                </div>
                <div class="col-lg-5 w3layouts-footer text-right">
                    <ul class="social_section_1info">
                        <li class="mb-2 facebook"><a href="#"><span class="fa fa-facebook"></span> facebook</a></li>
                        <li class="mb-2 twitter"><a href="#"><span class="fa fa-twitter"></span> twitter</a></li>
                        <li class="google"><a href="#"><span class="fa fa-google-plus"></span> google</a></li>
                        <li class="linkedin"><a href="#"><span class="fa fa-linkedin"></span> linkedin</a></li>
                    </ul>
                </div>
                <div class="move-top col-1"><a href="#home" class="move-top"> <span class="fa fa-angle-up" aria-hidden="true"></span></a></div>
            </div>
            <!-- //footer bottom -->
        </div>
    </div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript" src="{{ asset('main_site/js/services.js') }}"></script>
<script type="text/javascript">
    services();
    why_choose_us();
    what_we_treat();
</script>
</html>
