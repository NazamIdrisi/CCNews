<!DOCTYPE html>
<html class="no-js" lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Contact | CC News</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="images/logo/2.png">
    <link rel="apple-touch-icon" href="apple-touch-icon.html">
    
    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="css/custom.css">
    
    <!-- Style customizer (Remove these lines please) -->
    <link rel="stylesheet" href="css/style-customizer.css">
    <link href="#" data-style="styles" rel="stylesheet">
    
    <!-- Modernizr JS -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>

    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    
    <!--  THEME PRELOADER AREA -->
    <div id="preloader-wrapper">
        <div class="preloader-wave-effect"></div>
    </div>
    <!-- THEME PRELOADER AREA END -->   
  

    <!-- Body main wrapper start -->
    <div class="wrapper">
        <!-- Start of header area -->
        <?php
        
        include("includes/header.php");
        ?>
            <!-- mobile-menu-area start -->
        
        
        
                        <!-- mobile-menu-area end -->   
            
        <!-- End of header area -->
        <!-- Start page content -->
        <section id="page-content" class="page-wrapper">
            <!-- Start contact address area  -->
            <div class="zm-section bg-white ptb-65">
                
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-12 col-lg-12 col-sm-12">
                            <div class="section-title-2 mb-40">
                                <h3 class="inline-block uppercase">Contact Us</h3>
                                <p>We are here to answer any question you may have about our ccnews experiences. Reach out to us and we'll respond as soon we can.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        
                        <!-------------start address section ------------------------------>
                        <div class="col-md-4 col-sm-4">
                                <div class="single-address text-center">
                                    <i class="fa fa-home" aria-hidden="true"></i>
                                    <h4>Address</h4>
                            
                        <?php 
                            
                            include("includes/connect.php");
                            
                        $select="select * from contact";
                        
                        $query=mysqli_query($con,$select);
                        
                        while($row=mysqli_fetch_array($query)){
                            
                            $add=$row['address'];
                            
                            ?>
                            
                                    <u><b><p><?php echo $add ;?></p></b>
                            </u>
                        <?php
                        }
                        
                        ?>
                                </div>
                            </div>
                        
                        <!-----end address section -------------------------------------->
                        
                        
                        <!--------------start email section ------------------------------->
                        <div class="col-md-4 col-sm-4 xs-mt-30">
                                <div class="single-address text-center">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <h4 class="uppercase">Email Address</h4>
                            
                        <?php 
                            
                            include("includes/connect.php");
                            
                        $select="select * from contact";
                        
                        $query=mysqli_query($con,$select);
                        
                        while($row=mysqli_fetch_array($query)){
                            
                            $email=$row['email'];
                            
                            ?>
                           <u> <b><p><?php echo $email ;?></p></b>
                              </u>      
                            
                        <?php
                        }
                        
                        ?>
                            </div>
                        </div>
                        
                        
                        <!--------------------------end address section ------------------->
                        
                        <!--------------------------------start phone section ------------->
                        <div class="col-md-4 col-sm-4 xs-mt-30">
                                <div class="single-address text-center">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <h4 class="uppercase">Phone Number</h4>
                            
                        <?php 
                            
                            include("includes/connect.php");
                            
                        $select="select * from contact";
                        
                        $query=mysqli_query($con,$select);
                        
                        while($row=mysqli_fetch_array($query)){
                            
                            $phone=$row['phone'];
                            
                            ?>
                            
                                 <u>   <b><p><?php echo $phone ;?></p></b>
                            </u>
                        <?php
                        }
                        
                        ?>
                            </div>
                        </div>
                        
                        
                        <!----------end phone section -------------------------->
                    </div>
                </div>
            </div>
            <!-- End contact address area  -->
            <!-- Start Google Map area -->
            <div class="zm-section">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="google-map">
                                <div id="googleMap" style="width:100%;height:600px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Google Map area -->
            <!-- Start contact message area -->
            <div class="zm-section bg-white pt-60 pb-40">
                <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <div class="section-title-2 mb-40">
                               <center> <h3 class="inline-block uppercase">Send Us A MEssage</h3>
                                </center>
                            </div>
                        </div>
                    </div>
                <div class="container">
                    
                    <div class="message-box">
                        
                           
                        <form action="contact_script.php"  method="post">
                            <?php include("contact_script.php");?>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="fullname" placeholder="Full Name*">
                                    <input type="email" name="email" placeholder="Email Address*">
                                    <input type="text" name="phone" placeholder="Phone Number">
                                    
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea name="msg" placeholder="Type your message..."></textarea>
                                    
                                    
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    
                                    <input type="submit" name="send" class="submit-button" value="Send Message"/>
                                    
                                </div>
                            </div>
                        </form>
                        <p class="form-messege"></p>
                    </div>
                </div>
            </div>
            <!-- End contact message area -->
        </section>
        <!-- End page content -->
        <!-- Start footer area -->
        <?php include("includes/footer.php") ;?>
        <!-- End footer area -->
    </div>
    <!-- Body main wrapper end -->
    
    <!--Color customizer -->
    <div class="style-customizer closed">
        <a class="opener" href="#"><i class="fa fa-gear fa-spin"></i></a> 
        <div class="clearfix content-chooser">
            <ul class="styleChange clearfix">
                <li class="color-1" title="color-1" data-style="color-1" ></li>
                <li class="color-2" title="color-2" data-style="color-2"></li>
                <li class="color-3" title="color-3" data-style="color-3"></li>
                <li class="color-4" title="color-4" data-style="color-4"></li>
                <li class="color-5" title="color-5" data-style="color-5"></li>
                <li class="color-6" title="color-6" data-style="color-6"></li>
            </ul>
        </div>
    </div>
    <!--Color customizer end -->

    <!-- Placed js at the end of the document so the pages load faster -->
    <!-- jquery latest version -->
    <script src="js/vendor/jquery-1.12.1.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="js/plugins.js"></script>
    <script src="js/ajax-mail.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!-- Google Map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIVeErlZaaAwruruTK1YVDXoByfnqRF4c"></script>
    <script>
        // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);
    
        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 12,

                scrollwheel: false,

                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(23.7286, 90.3854), // New York

                // How you would like to style the map. 
                // This is where you would paste any style found on Snazzy Maps.
                styles: [
                            {
                                "featureType": "water",
                                "elementType": "geometry",
                                "stylers": [
                                    {
                                        "color": "#e9e9e9"
                                    },
                                    {
                                        "lightness": 17
                                    }
                                ]
                            },
                            {
                                "featureType": "landscape",
                                "elementType": "geometry",
                                "stylers": [
                                    {
                                        "color": "#f5f5f5"
                                    },
                                    {
                                        "lightness": 20
                                    }
                                ]
                            },
                            {
                                "featureType": "road.highway",
                                "elementType": "geometry.fill",
                                "stylers": [
                                    {
                                        "color": "#ffffff"
                                    },
                                    {
                                        "lightness": 17
                                    }
                                ]
                            },
                            {
                                "featureType": "road.highway",
                                "elementType": "geometry.stroke",
                                "stylers": [
                                    {
                                        "color": "#ffffff"
                                    },
                                    {
                                        "lightness": 29
                                    },
                                    {
                                        "weight": 0.2
                                    }
                                ]
                            },
                            {
                                "featureType": "road.arterial",
                                "elementType": "geometry",
                                "stylers": [
                                    {
                                        "color": "#ffffff"
                                    },
                                    {
                                        "lightness": 18
                                    }
                                ]
                            },
                            {
                                "featureType": "road.local",
                                "elementType": "geometry",
                                "stylers": [
                                    {
                                        "color": "#ffffff"
                                    },
                                    {
                                        "lightness": 16
                                    }
                                ]
                            },
                            {
                                "featureType": "poi",
                                "elementType": "geometry",
                                "stylers": [
                                    {
                                        "color": "#f5f5f5"
                                    },
                                    {
                                        "lightness": 21
                                    }
                                ]
                            },
                            {
                                "featureType": "poi.park",
                                "elementType": "geometry",
                                "stylers": [
                                    {
                                        "color": "#dedede"
                                    },
                                    {
                                        "lightness": 21
                                    }
                                ]
                            },
                            {
                                "elementType": "labels.text.stroke",
                                "stylers": [
                                    {
                                        "visibility": "on"
                                    },
                                    {
                                        "color": "#ffffff"
                                    },
                                    {
                                        "lightness": 16
                                    }
                                ]
                            },
                            {
                                "elementType": "labels.text.fill",
                                "stylers": [
                                    {
                                        "saturation": 36
                                    },
                                    {
                                        "color": "#333333"
                                    },
                                    {
                                        "lightness": 40
                                    }
                                ]
                            },
                            {
                                "elementType": "labels.icon",
                                "stylers": [
                                    {
                                        "visibility": "off"
                                    }
                                ]
                            },
                            {
                                "featureType": "transit",
                                "elementType": "geometry",
                                "stylers": [
                                    {
                                        "color": "#f2f2f2"
                                    },
                                    {
                                        "lightness": 19
                                    }
                                ]
                            },
                            {
                                "featureType": "administrative",
                                "elementType": "geometry.fill",
                                "stylers": [
                                    {
                                        "color": "#fefefe"
                                    },
                                    {
                                        "lightness": 20
                                    }
                                ]
                            },
                            {
                                "featureType": "administrative",
                                "elementType": "geometry.stroke",
                                "stylers": [
                                    {
                                        "color": "#fefefe"
                                    },
                                    {
                                        "lightness": 17
                                    },
                                    {
                                        "weight": 1.2
                                    }
                                ]
                            }
                        ]
            };

            // Get the HTML DOM element that will contain your map 
            // We are using a div with id="map" seen below in the <body>
            var mapElement = document.getElementById('googleMap');

            // Create the Google Map using our element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);

            // Let's also add a marker while we're at it
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(23.7286, 90.3854),
                map: map,
                title: 'Znews!',
                animation:google.maps.Animation.BOUNCE

            });
            var contentString = '<div id="content">'+
                    '<div id="siteNotice">'+
                    '</div>'+
                    '<div id="bodyContent">'+
                    '<h4>Head Office</h4>'+       
                    '<p>721/A Central Street</p>'+       
                    '</div>'+
                    '</div>';
                var infowindow = new google.maps.InfoWindow({
                    content: contentString
                });
                    infowindow.open(map, marker);
        }
    </script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="js/main.js"></script>

</body>

<!-- Mirrored from nscreativestudio.com/znews/znews/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 May 2018 20:42:29 GMT -->
</html>