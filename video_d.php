<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- Mirrored from nscreativestudio.com/znews/znews/blog-single-image.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 May 2018 20:41:51 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Videos | CC News</title>
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
        <?php include("includes/header.php"); ?>
        <!-- End of header area -->
        <!-- Start page content -->
        <div id="page-content" class="page-wrapper">
            <div class="zm-section single-post-wrap bg-white ptb-70 xs-pt-30">
                <div class="container">
                    <div class="row">
                        <!-- Start left side -->
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 columns">
                            <div class="row mb-40">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="section-title">
                                        <h2 class="h6 header-color inline-block uppercase">News details</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- Start single post image formate-->
                                <div class="col-md-12">
                                    
                                    <?php
                                    include("includes/connect.php");
                                        if(isset($_GET['post_id'])){
        
                                                $post_id = $_GET['post_id'];
            
         
                $get_cat_pro = "select * from video where post_id='$post_id'";
                
                $run_cat_pro = mysqli_query($con,$get_cat_pro);
                
           //.. $count = mysqli_num_rows($con,$run_cat_pro);
            
            ////if($count == 0){
           //     echo "<h2>No post found in this categories.</h2>";
//}
                while($row_ca_pro=mysqli_fetch_array($run_cat_pro)){
                    
                    $post_id = $row_ca_pro[0];
                    $post_title = $row_ca_pro[2];
                    $post_desc = $row_ca_pro[3];
                    $post_cat = $row_ca_pro[1];
                    $post_img = $row_ca_pro[5];
                    $post_date = $row_ca_pro[6];
                    $post_time = $row_ca_pro[7];
                    $post_tag = $row_ca_pro[4];
                    
                        
                       ?>
                         
                            <article class="zm-post-lay-single">
                                        <!--<div class="zm-post-thumb">-->
                                            <video  width="300" height="200" controls>   
	                                       <source src="admin/post_video/<?php echo $post_video; ?>" >
	                                   </video>
                                       <!-- </div>-->
                                        <div class="zm-post-dis">
                                            <div class="zm-post-header">
                                                <h2 class="zm-post-title h2"><a href="video_d.php?post_id=<?php echo $post_id; ?>"><?php echo $post_title; ?></a></h2>
                                                <div class="zm-post-meta">
                                                    <ul>
                                                        <li class="s-meta"><a href="#" class="zm-author">Posted By - CC News</a></li>
                                                        <li class="s-meta"><a href="#" class="zm-date"><?php echo $post_date; ?></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="zm-post-content">
                                                <?php echo $post_desc ;?>

                                                <span>
                                                    <?php
                    
                                                    $get_cat_pro = "select * from po ORDER BY rand() LIMIT 0,1";
                
                $run_cat_pro = mysqli_query($con,$get_cat_pro);
                
           //.. $count = mysqli_num_rows($con,$run_cat_pro);
            
            ////if($count == 0){
           //     echo "<h2>No post found in this categories.</h2>";
//}
                while($row_ca_pro=mysqli_fetch_array($run_cat_pro)){
                    
                    $post_id = $row_ca_pro[0];
                    $post_title = $row_ca_pro[2];
                    
                       ?>
                                                    <blockquote><a href="details.php?post_id=<?php echo $post_id; ?>" ><?php echo $post_title; ?></a></blockquote>
                                                <?php }
                                                    ?>
                                                
                                                
                                                </span>

                                                

                                            </div>
                                            <div class="entry-meta-small clearfix ptb-40 mtb-40 border-top border-bottom">
                                                <div class="meta-list pull-left">
                                                    <span class="post-title">Tags</span> 
                                                    <a href="<?php echo "tag_news.php?post_tag=$post_tag"; ?>"><?php echo $post_tag; ?></a>
                                                </div>
                                                <div class="share-social-link pull-right">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                                    <a href="#"><i class="fa fa-rss"></i></a>
                                                    <a href="#"><i class="fa fa-dribbble"></i></a>
                                                </div>
                                            </div>
                                            <!--<div class="administrator-info clearfix">
                                                <div class="administrator-avatar">
                                                    <img alt="administrator" src="images/post/single/author/1.jpg">  
                                                </div>
                                                <div class="administrator-description">
                                                    <h4 class="post-title"><a href="#">About Thomson Smith</a></h4>
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit. </p>
                                                    <div class="share-social-link">
                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                                        <a href="#"><i class="fa fa-rss"></i></a>
                                                        <a href="#"><i class="fa fa-dribbble"></i></a>
                                                    </div>
                                                </div>
                                            </div>-->
                                        </div>
                                    </article>        
                        
                    <?php
                   
    }
        }
      
                                        ?>
                                    
                                    
                                </div>
                                <!-- End single post image formate --
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <nav class="zm-pagination ptb-40 mtb-40 text-center border-bottom border-top">
                                        <ul class="page-numbers clearfix">
                                            <li class=" pull-left"><a class="prev page-numbers" href="#">Previous</a></li>
                                            <li class="pull-right"><a class="next page-numbers" href="#">Next</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <!--Start Similar post -->
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <aside class="zm-post-lay-a2-area">
                                        <div class="post-title mb-40">
                                            <h2 class="h6 inline-block">Suggested Posts For You</h2>
                                        </div>
                                        <div class="row">
                                            <div class="zm-posts clearfix">
                                                
                                                <?php
                                        
                                                
         
                $get_cat_pro = "select * from po ORDER BY rand() LIMIT 0,3";
                
                $run_cat_pro = mysqli_query($con,$get_cat_pro);
                
           //.. $count = mysqli_num_rows($con,$run_cat_pro);
            
            ////if($count == 0){
           //     echo "<h2>No post found in this categories.</h2>";
//}
                while($row_ca_pro=mysqli_fetch_array($run_cat_pro)){
                    
                    $post_id = $row_ca_pro[0];
                    $post_title = $row_ca_pro[2];
                    $post_desc = $row_ca_pro[3];
                    $post_cat = $row_ca_pro[1];
                    $post_img = $row_ca_pro[5];
                    $post_date = $row_ca_pro[6];
                    $post_time = $row_ca_pro[7];
                    
                        
                        ?>
                                                
                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                                    <article class="zm-post-lay-a2">
                                                        <div class="zm-post-thumb">
                                                            <a href="details.php?post_id=<?php echo $post_id; ?>"><img src="admin/post_images/<?php echo $post_img; ?>" alt="img" height="140px;"></a>
                                                        </div>
                                                        <div class="zm-post-dis">
                                                            <div class="zm-post-header">
                                                                <h2 class="zm-post-title h2"><a href="details.php?post_id=<?php echo $post_id; ?>"><?php echo $post_title; ?></a></h2>
                                                                <div class="zm-post-meta">
                                                                    <ul>
                                                                        <li class="s-meta"><a href="#" class="zm-author">CC News</a></li>
                                                                        <li class="s-meta"><a href="#" class="zm-date"><?php echo $post_time ;?></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                    
                <?php
                
                   
    }
        

                                        
                                        ?>
                                                
                                                
                                                
                                                <!-- <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                                    <article class="zm-post-lay-a2">
                                                        <div class="zm-post-thumb">
                                                            <a href="blog-single-image.html"><img src="images/post/a/a2/12.jpg" alt="img"></a>
                                                        </div>
                                                        <div class="zm-post-dis">
                                                            <div class="zm-post-header">
                                                                <h2 class="zm-post-title h2"><a href="blog-single-image.html">Lorem ipsum dolor sit amet consectetur.</a></h2>
                                                                <div class="zm-post-meta">
                                                                    <ul>
                                                                        <li class="s-meta"><a href="#" class="zm-author">Thomson Smith</a></li>
                                                                        <li class="s-meta"><a href="#" class="zm-date">April 18, 2016</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>-->
                                                <!--<div class="col-xs-12 col-sm-6 col-md-4 hidden-md col-lg-4 hidden-sm">
                                                    <article class="zm-post-lay-a2">
                                                        <div class="zm-post-thumb">
                                                            <a href="blog-single-image.html"><img src="images/post/a/a2/13.jpg" alt="img"></a>
                                                        </div>
                                                        <div class="zm-post-dis">
                                                            <div class="zm-post-header">
                                                                <h2 class="zm-post-title h2"><a href="blog-single-image.html">Lorem ipsum dolor sit amet consectetur.</a></h2>
                                                                <div class="zm-post-meta">
                                                                    <ul>
                                                                        <li class="s-meta"><a href="#" class="zm-author">Thomson Smith</a></li>
                                                                        <li class="s-meta"><a href="#" class="zm-date">April 18, 2016</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>-->
                                            </div>
                                            
                                        </div>
                                    </aside>
                                </div>
                                <!-- End similar post -->
                                <!-- Start Comment box  --
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="review-area mt-50 ptb-70 border-top">
                                        <div class="post-title mb-40">
                                            <h2 class="h6 inline-block">There are 03 Comments for This Article</h2>
                                        </div>
                                        <div class="review-wrap">
                                            <div class="review-inner">
                                                <!-- Start Single Review --
                                                <div class="single-review clearfix">
                                                    <div class="reviewer-img">
                                                        <img src="images/post/single/comnt/1.jpg" alt="">
                                                    </div>
                                                    <div class="reviewer-info">
                                                        <h4 class="reviewer-name"><a href="#">Jhon doe</a></h4>
                                                        <span class="date-time">Auguest 11, 2.16, 12:21pm</span>
                                                        <p class="reviewer-comment">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit.</p>
                                                        <a href="#" class="reply-btn">Reply</a>
                                                    </div>
                                                </div>
                                                <!-- End Single Review -->
                                                <!-- Start Single Review --
                                                <div class="single-review second-comment clearfix">
                                                    <div class="reviewer-img">
                                                        <img src="images/post/single/comnt/2.jpg" alt="">
                                                    </div>
                                                    <div class="reviewer-info">
                                                        <h4 class="reviewer-name"><a href="#">Jhon doe</a></h4>
                                                        <span class="date-time">Auguest 11, 2.16, 12:21pm</span>
                                                        <p class="reviewer-comment">Phasellus aliquam ante metus, vitae molestie turpis rutrum eu. Fusce mi risus, cursus eu elit vitae, viverra vulputate mi. Donec ullamcorper felis nec sapien ultrices feugiat. Morbi sit amet blandit nibh. Vivamus eros felis, tempus vitae dolor quis, euismod dignissim ipsum. </p>
                                                    <a href="#" class="reply-btn">Reply</a>
                                                    </div>
                                                </div>
                                                <!-- End Single Review -->
                                                <!-- Start Single Review -->
                                                <!-- <div class="single-review third-comment clearfix">
                                                    <div class="reviewer-img">
                                                        <img src="images/post/single/comnt/2.jpg" alt="">
                                                    </div>
                                                    <div class="reviewer-info">
                                                        <h4 class="reviewer-name"><a href="#">Jhon doe</a></h4>
                                                        <span class="date-time">Auguest 11, 2.16, 12:21pm</span>
                                                        <p class="reviewer-comment">Phasellus aliquam ante metus, vitae molestie turpis rutrum eu. Fusce mi risus, cursus eu elit vitae, viverra vulputate mi. Donec ullamcorper felis nec sapien ultrices feugiat. Morbi sit amet blandit nibh. Vivamus eros felis, tempus vitae dolor quis, euismod dignissim ipsum. </p>
                                                    <a href="#" class="reply-btn">Reply</a>
                                                    </div>
                                                </div> -->
                                                <!-- End Single Review -->
                                                <!-- Start Single Review --
                                                <div class="single-review clearfix">
                                                    <div class="reviewer-img">
                                                        <img src="images/post/single/comnt/3.jpg" alt="">
                                                    </div>
                                                    <div class="reviewer-info">
                                                        <h4 class="reviewer-name"><a href="#">Jhon doe</a></h4>
                                                        <span class="date-time">Auguest 11, 2.16, 12:21pm</span>
                                                        <p class="reviewer-comment">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit.</p>
                                                        <a href="#" class="reply-btn">Reply</a>
                                                    </div>
                                                </div>
                                                <!-- End Single Review --
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Comment box  -->
                                <!-- Start comment form --><br/>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="comment-form-area">
                                        <div class="post-title mb-40">
                                            <h2 class="h6 inline-block">leave a comment</h2>
                                        </div>
                                        <div class="form-wrap">
                                            <form action="video_d.php" method="post">
                                                
                                                <?php include("comment.php"); ?>
                                                <div class="form-inner clearfix">
                                                    <div class="single-input left width-half">
                                                        <input required="required" placeholder="First Name *" type="text" name="firstname">
                                                    </div>
                                                    <div class="single-input left width-half">
                                                        <input required="required" placeholder="Last Name *" type="text" name="lastname">
                                                    </div>
                                                    <div class="single-input left width-half">
                                                        <input required="required" placeholder="Email Address *" type="email" name="email">
                                                    </div>
                                                    
                                                    <div class="single-input right width-half">
                                                        <input placeholder="Phone Number" type="text" name="phone">
                                                    </div>
                                                    
                                                    
                                                    <div class="single-input">
                                                        <textarea class="textarea" placeholder="Type your comment..." name="cmt"></textarea>
                                                    </div>
                                                    <input type="submit" name="send" class="submit-button" value="Submit Comment"/>
                                                    
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- End comment form -->
                            </div>
                        </div>
                        <!-- End left side -->
                        <!-- Start Right sidebar -->
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 sidebar-warp columns">
                            <div class="row">
                                <aside class="zm-post-lay-a-area col-sm-6 col-md-12 col-lg-12 sm-mt-50 xs-mt-50">
                                    <div class="row mb-40">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="section-title">
                                                <h2 class="h6 header-color inline-block uppercase">Today’s Tips</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="zm-posts">
                                                <?php
                                     
                                                
         
                $get_cat_pro = "select * from tips ORDER BY(post_id) DESC LIMIT 0,1";
                
                $run_cat_pro = mysqli_query($con,$get_cat_pro);
                
           //.. $count = mysqli_num_rows($con,$run_cat_pro);
            
            ////if($count == 0){
           //     echo "<h2>No post found in this categories.</h2>";
//}
                while($row_ca_pro=mysqli_fetch_array($run_cat_pro)){
                    
                    $post_id = $row_ca_pro[0];
                    $post_title = $row_ca_pro[2];
                    $post_desc = $row_ca_pro[3];
                    $post_cat = $row_ca_pro[1];
                    $post_img = $row_ca_pro[5];
                    $post_date = $row_ca_pro[6];
                    $post_time = $row_ca_pro[7];
                    
                                                
                   ?>
                     <article class="zm-post-lay-a sidebar">
                                                <div class="zm-post-thumb">
                                                    <a href="details.php?post_id=<?php echo $post_id; ?>"><img src="admin/tips_images/<?php echo $post_img; ?>" alt="img" height="230px"></a>
                                                </div>
                                                <div class="zm-post-dis">
                                                    <div class="zm-post-header">
                                                        <h2 class="zm-post-title h2"><a href="details.php?post_id=<?php echo $post_id; ?>"><?php echo $post_title; ?></a></h2>
                                                        <div class="zm-post-meta">
                                                            <ul>
                                                                <li class="s-meta"><a href="#" class="zm-author">CC News</a></li>
                                                                <li class="s-meta"><a href="#" class="zm-date"><?php echo $post_time; ?></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                
                   <?php
    }
        

                                        
                                        ?>
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                                <!-- Start Subscribe From -->
                                <div class="col-md-12 col-lg-12 col-sm-6 mt-60 sm-mb-50">
                                    <aside class="subscribe-form bg-dark text-center sidebar">
                                        <h3 class="uppercase zm-post-title">Get Email Updates</h3>
                                        <p>Join 80,000+ awesome subscribers and update yourself with our exclusive news.</p>
                                        <form action="details.php" method="post">
                                            
                                            <?php include("subscribe.php");?>
                                            
                                            <input placeholder="Enter your full name" name="fullname" type="text">
                                            <input placeholder="Enter email address" name="email" required="" type="email">
                                            <input value="Subscribe" name="subs" type="submit">
                                        </form>
                                    </aside>
                                </div>
                                <!-- End Subscribe From -->
                                <!-- Start post layout E -->
                                <aside class="zm-post-lay-e-area col-sm-6 col-md-12 col-lg-12 mt-70">
                                    <div class="row mb-40">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="section-title">
                                                <h2 class="h6 header-color inline-block uppercase">Most Commented</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="zm-posts">
                                                
                                                <?php
                                
                                 $get_cat_pro = "select * from po ORDER BY rand() LIMIT 0,6";
                
                $run_cat_pro = mysqli_query($con,$get_cat_pro);
                
           //.. $count = mysqli_num_rows($con,$run_cat_pro);
            
            ////if($count == 0){
           //     echo "<h2>No post found in this categories.</h2>";
//}
                while($row_ca_pro=mysqli_fetch_array($run_cat_pro)){
                    
                    $post_id = $row_ca_pro[0];
                    $post_title = $row_ca_pro[2];
                    $post_desc = $row_ca_pro[3];
                    $post_cat = $row_ca_pro[1];
                    $post_img = $row_ca_pro[5];
                    $post_date = $row_ca_pro[6];
                    $post_time = $row_ca_pro[7];
                    
                                
                        ?>
                        
                                                <article class="zm-post-lay-e zm-single-post clearfix">
                                                    <div class="zm-post-thumb f-left">
                                                        <a href="details.php?post_id=<?php echo $post_id; ?>"><img src="admin/post_images/<?php echo $post_img; ?>" alt="img" height="80px;"></a>
                                                    </div>
                                                    <div class="zm-post-dis f-right">
                                                        <div class="zm-post-header">
                                                            <h2 class="zm-post-title"><a href="details.php?post_id=<?php echo $post_id; ?>"><?php echo $post_title ;?></a></h2>
                                                            <div class="zm-post-meta">
                                                                <ul>
                                                                    <li class="s-meta"><a href="#" class="zm-author">CC News</a></li>
                                                                    <li class="s-meta"><a href="#" class="zm-date"><?php echo $post_time ;?></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                    
                                
                    <?php
                
                   
    }
        

                                        
                                        ?>
                                                <!-- Start single post layout E -->
                                                
                                                <!-- Start single post layout E -->
                                                
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                                <!-- End post layout E --
                                <aside class="zm-post-lay-f-area col-sm-6 col-md-12 col-lg-12 mt-70">
                                    <div class="row mb-40">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="section-title">
                                                <h2 class="h6 header-color inline-block uppercase">Recent Commented</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="zm-posts">
                                                <!-- Start single post layout F --
                                                <div class="zm-post-lay-f zm-single-post clearfix">
                                                    <div class="zm-post-dis">
                                                        <p><a href="#"> Nasir Uddin </a> - <em>“ Ut enim ad minim veniam, quis nostrud, sed do eiusmod tempor...” </em>  <strong>on Magna aliqua ut enim ad minim veniam quis nostrud.</strong></p>
                                                    </div>
                                                </div>
                                                <!-- Start single post layout F -->
                                                <!-- Start single post layout F --
                                                <div class="zm-post-lay-f zm-single-post clearfix">
                                                    <div class="zm-post-dis">
                                                        <p><a href="#"> Sayeed Ahmad </a> - <em> “ Ut enim ad minim veniam, quis nostrud, sed do eiusmod tempor...” </em> <strong>on Magna aliqua ut enim ad minim veniam quis nostrud.</strong></p>
                                                    </div>
                                                </div>
                                                <!-- Start single post layout F -->
                                                <!-- Start single post layout F --
                                                <div class="zm-post-lay-f zm-single-post clearfix">
                                                    <div class="zm-post-dis">
                                                        <p><a href="#"> ThemeHook </a> - <em> “ Ut enim ad minim veniam, quis nostrud, sed do eiusmod tempor...” </em> <strong>on Magna aliqua ut enim ad minim veniam quis nostrud.</strong></p>
                                                    </div>
                                                </div>
                                                <!-- Start single post layout F -->
                                                <!-- Start single post layout F --
                                                <div class="zm-post-lay-f zm-single-post clearfix">
                                                    <div class="zm-post-dis">
                                                        <p><a href="#"> Nasir Uddin </a> - <em> “ Ut enim ad minim veniam, quis nostrud, sed do eiusmod tempor...” </em> <strong>on Magna aliqua ut enim ad minim veniam quis nostrud.</strong></p>
                                                    </div>
                                                </div>
                                                <!-- Start single post layout F -->
                                                <!-- Start single post layout F --
                                                <div class="zm-post-lay-f zm-single-post clearfix">
                                                    <div class="zm-post-dis">
                                                        <p><a href="#"> Sayeed Ahmad </a> - <em> “ Ut enim ad minim veniam, quis nostrud, sed do eiusmod tempor...” </em> <strong>on Magna aliqua ut enim ad minim veniam quis nostrud.</strong></p>
                                                    </div>
                                                </div>
                                                <!-- Start single post layout F -->
                                                <!-- Start single post layout F --
                                                <div class="zm-post-lay-f zm-single-post clearfix">
                                                    <div class="zm-post-dis">
                                                        <p><a href="#"> ThemeHook </a> - <em> “ Ut enim ad minim veniam, quis nostrud, sed do eiusmod tempor...” </em> <strong>on Magna aliqua ut enim ad minim veniam quis nostrud.</strong></p>
                                                    </div>
                                                </div>
                                                <!-- Start single post layout F -->
                                                <!-- Start single post layout F --
                                                <div class="zm-post-lay-f zm-single-post clearfix">
                                                    <div class="zm-post-dis">
                                                        <p><a href="#"> Nasir Uddin </a> - <em> “ Ut enim ad minim veniam, quis nostrud, sed do eiusmod tempor...” </em> <strong>on Magna aliqua ut enim ad minim veniam quis nostrud.</strong></p>
                                                    </div>
                                                </div>
                                                <!-- Start single post layout F --
                                            </div>
                                        </div>
                                    </div>
                                </aside>--->
                            </div>
                        </div>
                        <!-- End Right sidebar -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End page content -->
        <!-- Start footer area -->
        <?php include("includes/footer.php"); ?>
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
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/plugins.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="js/main.js"></script>

</body>


</html>
