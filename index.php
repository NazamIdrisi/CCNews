<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Catch Crime News | CC News</title>
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
		
        <!-- End of header area -->
        <!-- Start trending post area -->
        <div class="trending-post-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="trend-post-list zm-posts owl-active-1 clearfix">
                        <?php
                                        
                                                
         
                $get_cat_pro = "select * from po ORDER BY(post_id) DESC LIMIT 0,20";
                
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
                        
                        <div class="col-2">
                    <article class="zm-trending-post zm-lay-a zm-single-post" data-dark-overlay="2.5"  data-scrim-bottom="9" data-effict-zoom="3">
                                <div class="zm-post-thumb">
                                    <img src="admin/post_images/<?php echo $post_img; ?>" alt="img" height="500px;">
                                </div>
                                <div class="zm-post-dis text-white">
                                    <div class="zm-category"><a href="#" class="bg-cat-1 cat-btn"><?php echo $post_cat; ?></a></div>
                                    <h2 class="zm-post-title"><a href="details.php?post_id=<?php echo $post_id; ?>"><?php echo $post_title; ?></a></h2>
                                    <div class="zm-post-meta">
                                        <ul>
                                            <li class="s-meta"><a href="#" class="zm-author">CC News</a></li>
                                            <li class="s-meta"><a href="#" class="zm-date"><?php echo $post_time; ?></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                            </div>
                    
                <?php
                
                   
    }
        

                                        
                                        ?>
                                                <!-- Start single trend post -->
                        
                        
                        <!-- End single trend post -->
                        <!-- Start single trend post --
                        <div class="col-2">
                            <article class="zm-trending-post zm-lay-a zm-single-post" data-dark-overlay="2.5"  data-scrim-bottom="9" data-effict-zoom="3">
                                <div class="zm-post-thumb">
                                    <img src="images/post/trend/a/2.jpg" alt="img">
                                </div>
                                <div class="zm-post-dis text-white">
                                    <div class="zm-category"><a href="#" class="bg-cat-2 cat-btn">Animal</a></div>
                                    <h2 class="zm-post-title"><a href="blog-single-image.html">Sed do eiusmod tempor incididunt labore et  magna aliqua ut enim.</a></h2>
                                    <div class="zm-post-meta">
                                        <ul>
                                            <li class="s-meta"><a href="#" class="zm-author">Thomson Smith</a></li>
                                            <li class="s-meta"><a href="#" class="zm-date">April 18, 2016</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <!-- End single trend post -->
                        <!-- End single trend post -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End trending post area -->
        <!-- Start page content -->
        <section id="page-content" class="page-wrapper">
            <!-- Start Popular News [layout A+D]  -->
            <div class="zm-section bg-white ptb-70">
                <div class="container">
                    <div class="row mb-40">
                        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                            <div class="section-title">
                                <h2 class="h6 header-color inline-block uppercase">Popular News</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-12 col-xs-12 col-lg-6">
                            <div class="zm-posts">
                                
                                 <?php
                                        
                                                
         
                $get_cat_pr = "select * from po ORDER BY(post_id) DESC LIMIT 0,1";
                
                $run_cat_pr = mysqli_query($con,$get_cat_pr);
                
         //   $count = mysqli_num_rows($con,$run_cat_pr);
            
                                    //if($count == 0){
           //echo "<h2>No post found in this categories.</h2>";
//  }
                while($row_ca_pr=mysqli_fetch_array($run_cat_pr)){
                    
                    $post_id = $row_ca_pr[0];
                    $post_title = $row_ca_pr[2];
                    $post_desc = $row_ca_pr[3];
                    $post_cat = $row_ca_pr[1];
                    $post_img = $row_ca_pr[5];
                    $post_date = $row_ca_pr[6];
                    $post_time = $row_ca_pr[7];
                    
                    
                                ?>
                        
                        <article class="zm-post-lay-a">
                                    <div class="zm-post-thumb">
                                        <a href="details.php?post_id=<?php echo $post_id; ?>"><img src="admin/post_images/<?php echo $post_img; ?>" alt="img"></a>
                                    </div>
                                    <div class="zm-post-dis">
                                        <div class="zm-post-header">
                                            <div class="zm-category"><a href="#" class="bg-cat-1 cat-btn"><?php echo $post_cat; ?></a></div>
                                            <h2 class="zm-post-title"><a href="details.php?post_id=<?php echo $post_id; ?>"><?php echo $post_title; ?></a></h2>
                                            <div class="zm-post-meta">
                                                <ul>
                                                    <li class="s-meta"><a href="#" class="zm-author">CC News</a></li>
                                                    <li class="s-meta"><a href="#" class="zm-date"><?php echo $post_time; ?></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="zm-post-content">
                                            <p><?php echo $post_desc; ?></p>
                                        </div>
                                    </div>
                                </article>
                    
                    <?php      
    }
        

                                        
                                        ?>
                                
                                
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-xs-12 col-lg-6">
                            <div class="zm-posts">
                                 
                                
                                <?php
                                
                                 $get_cat_pro = "select * from po ORDER BY(post_id) DESC LIMIT 0,6";
                
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
                        
                    <article class="zm-post-lay-e zm-single-post clearfix" style="margin-left:80px;">
                                                    <div class="zm-post-thumb f-left">
                                                        <a href="details.php?post_id=<?php echo $post_id; ?>"><img src="admin/post_images/<?php echo $post_img; ?>" alt="img" height="100px;" width="200px;"></a>
                                                    </div>
                                                    <div class="zm-post-dis f-right">
                                                        <div class="zm-post-header">
                                                            <h2 class="zm-post-title"><a href="details.php?post_id=<?php echo $post_id; ?>"><?php echo $post_title; ?> </a></h2>
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
                                
  
                                <!-- Start single post layout D --
                                <article class="zm-post-lay-d clearfix">
                                    <div class="zm-post-thumb f-left">
                                        <a href="blog-single-image.html"><img src="admin/post_images/$post_img" alt="img"></a>
                                    </div>
                                    <div class="zm-post-dis f-right">
                                        <div class="zm-post-header">
                                            <div class='zm-category'><a href='#' class='bg-cat-2 cat-btn'>$post_cat</a></div>
                                            <h2 class="zm-post-title"><a href="blog-single-image.html">Nisi ut aliquip ex ea commodo consequat duis aute irure dolor in reprehenderit.</a></h2>
                                            <div class="zm-post-meta">
                                                <ul>
                                                    <li class="s-meta"><a href="#" class="zm-author">Thomson Smith</a></li>
                                                    <li class="s-meta"><a href="#" class="zm-date">April 18, 2016</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!-- Start single post layout D -->
                                <!-- End single post layout D --
                                <article class="zm-post-lay-d clearfix">
                                    <div class="zm-post-thumb f-left">
                                        <a href="blog-single-image.html"><img src="images/post/d/2.jpg" alt="img"></a>
                                    </div>
                                    <div class="zm-post-dis f-right">
                                        <div class="zm-post-header">
                                            <div class="zm-category"><a href="#" class="bg-cat-3 cat-btn">Education</a></div>
                                            <h2 class="zm-post-title "><a href="blog-single-image.html">Quis nostrud xercitation ullamco laboris nisi aliquip ex ea commodo consequat.</a></h2>
                                            <div class="zm-post-meta">
                                                <ul>
                                                    <li class="s-meta"><a href="#" class="zm-author">Thomson Smith</a></li>
                                                    <li class="s-meta"><a href="#" class="zm-date">April 18, 2016</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!-- Start single post layout D -->
                                <!-- End single post layout D --
                                <article class="zm-post-lay-d clearfix">
                                    <div class="zm-post-thumb f-left">
                                        <a href="blog-single-image.html"><img src="images/post/d/3.jpg" alt="img"></a>
                                    </div>
                                    <div class="zm-post-dis f-right">
                                        <div class="zm-post-header">
                                            <div class="zm-category"><a href="#" class="bg-cat-4 cat-btn">Fashion</a></div>
                                            <h2 class="zm-post-title "><a href="blog-single-image.html">Magna aliqua ut enim ad minim veniam xercitation nisi quis nostrud ullamco</a></h2>
                                            <div class="zm-post-meta">
                                                <ul>
                                                    <li class="s-meta"><a href="#" class="zm-author">Thomson Smith</a></li>
                                                    <li class="s-meta"><a href="#" class="zm-date">April 18, 2016</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!-- Start single post layout D -->
                                <!-- End single post layout D --
                                <article class="zm-post-lay-d clearfix">
                                    <div class="zm-post-thumb f-left">
                                        <a href="blog-single-image.html"><img src="images/post/d/4.jpg" alt="img"></a>
                                    </div>
                                    <div class="zm-post-dis f-right">
                                        <div class="zm-post-header">
                                            <div class="zm-category"><a href="#" class="bg-cat-5 cat-btn">Treval</a></div>
                                            <h2 class="zm-post-title "><a href="blog-single-image.html">Duis aute irure dolor in reprehenderit in velit minim cillumfugiat esse nulla pariatur.</a></h2>
                                            <div class="zm-post-meta">
                                                <ul>
                                                    <li class="s-meta"><a href="#" class="zm-author">Thomson Smith</a></li>
                                                    <li class="s-meta"><a href="#" class="zm-date">April 18, 2016</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!-- End single post layout D -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Popular News [layout A+D]  -->
            <!-- Start world news [layout A1+E+A]  -->
            <div class="zm-section bg-gray ptb-70">
                <div class="container">
                    <div class="row">
                        <!-- Start left side -->
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                            <div class="row mb-40">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="section-title">
                                        
                                        <h2 class="h6 header-color inline-block uppercase">Top New Categories</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="zm-posts clearfix">
                                    
                                    <?php
                                                        
                                                    include("connect.php");
                                                    
                                                    $select="select * from cat ORDER BY(cat_id) DESC LIMIT 0,6";
                                                    
                                                    $query=mysqli_query($con,$select);
                                                    
                                                    while($row=mysqli_fetch_array($query))
                                                      {
                                                          $cat_id=$row[0];
                                                        $cat_title=$row[1];
                                                        $cat_img=$row['img_box'];

                                                    
                                                    ?>
                                                   
                                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                        <article class="zm-trending-post zm-lay-a1 zm-single-post" data-effict-zoom="1">
                                            <div class="zm-post-thumb">
                                                <a href="<?php echo "cat.php?cat_title=$cat_title"; ?>" data-dark-overlay="2.5"  data-scrim-bottom="9"><img src="admin/post_images/<?php echo $cat_img; ?>" alt="img" height="180px;"></a>
                                            </div>
                                            <div class="zm-post-dis text-white">
                                                <h2 class="zm-post-title h3"><a href="<?php echo "cat.php?cat_title=$cat_title"; ?>"><?php echo $cat_title; ?></a></h2>
                                                <div class="zm-post-meta">
                                                    <ul>
                                                        <li class="s-meta"><a href="<?php echo "cat.php?cat_title=$cat_title"; ?>" class="zm-author">CC News</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                                    <?php
                                                    
                                                    }
                                                    ?>
                                    
                                    
                                    <!-- Start single post layout B -->
                                    
                                    <!-- End single post layout B -->
                                    <!-- Start single post layout B --
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                        <article class="zm-trending-post zm-lay-a1 zm-single-post" data-effict-zoom="1">
                                            <div class="zm-post-thumb">
                                                <a href="blog-single-image.html" data-dark-overlay="2.5"  data-scrim-bottom="9"><img src="images/post/trend/b/2.jpg" alt="img"></a>
                                            </div>
                                            <div class="zm-post-dis text-white">
                                                <h2 class="zm-post-title h3"><a href="blog-single-image.html">Exercitation ullamco aute laboris nisi... </a></h2>
                                                <div class="zm-post-meta">
                                                    <ul>
                                                        <li class="s-meta"><a href="#" class="zm-author">Thomson Smith</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- End single post layout B -->
                                    <!-- Start single post layout B --
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                        <article class="zm-trending-post zm-lay-a1 zm-single-post" data-effict-zoom="1">
                                            <div class="zm-post-thumb">
                                                <a href="blog-single-image.html" data-dark-overlay="2.5"  data-scrim-bottom="9"><img src="images/post/trend/b/3.jpg" alt="img"></a>
                                            </div>
                                            <div class="zm-post-dis text-white">
                                                <h2 class="zm-post-title h3"><a href="blog-single-image.html">Exercitation ullamco aute laboris nisi... </a></h2>
                                                <div class="zm-post-meta">
                                                    <ul>
                                                        <li class="s-meta"><a href="#" class="zm-author">Thomson Smith</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- End single post layout B -->
                                    <!-- Start single post layout B --                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                        <article class="zm-trending-post zm-lay-a1 zm-single-post" data-effict-zoom="1">
                                            <div class="zm-post-thumb">
                                                <a href="blog-single-image.html" data-dark-overlay="2.5"  data-scrim-bottom="9"><img src="images/post/trend/b/4.jpg" alt="img"></a>
                                            </div>
                                            <div class="zm-post-dis text-white">
                                                <h2 class="zm-post-title h3"><a href="blog-single-image.html">Exercitation ullamco aute laboris nisi... </a></h2>
                                                <div class="zm-post-meta">
                                                    <ul>
                                                        <li class="s-meta"><a href="#" class="zm-author">Thomson Smith</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- End single post layout B -->
                                    <!-- Start single post layout B --
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                        <article class="zm-trending-post zm-lay-a1 zm-single-post" data-effict-zoom="1">
                                            <div class="zm-post-thumb">
                                                <a href="blog-single-image.html" data-dark-overlay="2.5"  data-scrim-bottom="9"><img src="images/post/trend/b/5.jpg" alt="img"></a>
                                            </div>
                                            <div class="zm-post-dis text-white">
                                                <h2 class="zm-post-title h3"><a href="blog-single-image.html">Exercitation ullamco aute laboris nisi... </a></h2>
                                                <div class="zm-post-meta">
                                                    <ul>
                                                        <li class="s-meta"><a href="#" class="zm-author">Thomson Smith</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- End single post layout B -->
                                    <!-- Start single post layout B --
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                        <article class="zm-trending-post zm-lay-a1 zm-single-post" data-effict-zoom="1">
                                            <div class="zm-post-thumb">
                                                <a href="blog-single-image.html" data-dark-overlay="2.5"  data-scrim-bottom="9"><img src="images/post/trend/b/6.jpg" alt="img"></a>
                                            </div>
                                            <div class="zm-post-dis text-white">
                                                <h2 class="zm-post-title h3"><a href="blog-single-image.html">Exercitation ullamco aute laboris nisi... </a></h2>
                                                <div class="zm-post-meta">
                                                    <ul>
                                                        <li class="s-meta"><a href="#" class="zm-author">Thomson Smith</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- End single post layout B -->
                                </div>
                            </div>
                            <!-- Start Advertisement -->
                            <div class="advertisement">
                                <div class="row mt-40">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                                        <a href="#"><img src="images/ad/2.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Advertisement -->
                        </div>
                        <!-- End left side -->
                        <!-- Start Righr side -->
                        <div class="col-xs-12 col-sm-12 hidden-sm col-md-4 col-lg-4">
                            <!-- Start post layout E -->
                            <aside class="zm-post-lay-e-area">
                                <div class="row mb-40">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="section-title">
                                            <h2 class="h6 header-color inline-block uppercase">Editor’s Picks</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="zm-posts">
                                            
                                            <?php
                                        
                                                
         
                $get_cat_pro = "select * from po ORDER BY rand() LIMIT 0,5";
                
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
                                                        <a href="blog-single-image.html"><img src="admin/post_images/<?php echo $post_img; ?>" alt="img"></a>
                                                    </div>
                                                    <div class="zm-post-dis f-right">
                                                        <div class="zm-post-header">
                                                            <h2 class="zm-post-title"><a href="details.php?post_id=<?php echo $post_id; ?>"><?php echo $post_title; ?></a></h2>
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
                                            
                                            
                                            <!-- Start single post layout E -->
                                        </div>
                                    </div>
                                </div>
                            </aside>
                            <!-- Start post layout E -->
                            <!-- Start Day News -->
                            <aside class="zm-post-lay-a-area  hidden-sm">
                                <div class="row mb-40 mt-70">
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
                                                    <a href="tips_d.php?post_id=<?php echo $post_id; ?>"><img src="admin/tips_images/<?php echo $post_img; ?>" alt="img" height="230px;"></a>
                                                </div>
                                                <div class="zm-post-dis">
                                                    <div class="zm-post-header">
                                                        <h2 class="zm-post-title h2"><a href="tips_d.php?post_id=<?php echo $post_id; ?>"><?php echo $post_title; ?></a></h2>
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
                            <!-- Start Day News -->
                        </div>
                        <!-- End Right side -->
                    </div>
                </div>
            </div>
            <!-- End world news [layout A1+E+A]  -->
            <!-- Start Video Post [View layout A]  -->
            <div class="video-post-area ptb-70 bg-dark">
                <div class="container">
                    <div class="row mb-40">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="section-title">
                                <h2 class="h6 header-color inline-block uppercase">Video Post</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="zm-video-post-list zm-posts owl-active-3 navigator-1 clearfix">
                            <!-- Start single video post [video layout A] -->
                            
                            <?php
                                        
                                                
         
                $get_cat_pro = "select * from video";
                
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
                    $post_video = $row_ca_pro['video_box'];
                    $post_date = $row_ca_pro[6];
                    $post_time = $row_ca_pro[7];
                    
                    
                    ?>
                        
        <!--src='admin/post_images/$post_img' alt='img'>-->
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                <div class="zm-video-post zm-video-lay-a zm-single-post">
                                   <!-- <div class="zm-video-thumb"  data-dark-overlay="2.5" >-->
                                        <video  width="300" height="200" controls>   
	                                       <source src="admin/post_video/<?php echo $post_video; ?>" >
	                                   </video>
                                        
                                   <!-- </div>-->
                                    <div class="zm-video-info text-white">
                                        <h2 class="zm-post-title"><a href="video_d.php?post_id=<?php echo $post_id; ?>"><?php echo $post_title; ?></a></h2>
                                        <div class="zm-post-meta">
                                            <ul>
                                                
                                                <li class="s-meta"><a href="#" class="zm-author">CC News</a></li>
                                                <li class="s-meta"><a href="#" class="zm-date"><?php echo $post_time; ?></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                            
   <?php                
    }
        

                                        
                                        ?>
                            
                            
                            <!-- End single video post [video layout A] -->
                            <!-- Start single video post [video layout A] --
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                <div class="zm-video-post zm-video-lay-a zm-single-post">
                                    <div class="zm-video-thumb" data-dark-overlay="2.5" >
                                        <img src="images/video/2.jpg" alt="video">
                                        <a class="video-activetor" href="https://www.youtube.com/watch?v=PsjFbwIQ8AY">
                                            <i class="fa fa-play-circle-o"></i>
                                        </a>
                                    </div>
                                    <div class="zm-video-info  text-white">
                                        <h2 class="zm-post-title"><a href="blog-single-video.html">Quis nostrud exercitation ullamco laboris nisi ut aliquip consequat. </a></h2>
                                        <div class="zm-post-meta">
                                            <ul>
                                                <li class="s-meta zm-post-time">10:33 min</li>
                                                <li class="s-meta"><a href="#" class="zm-author">Thomson Smith</a></li>
                                                <li class="s-meta"><a href="#" class="zm-date">April 18, 2016</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End single video post [video layout A] -->
                            <!-- Start single video post [video layout A] --
                            <div class="col-xs-12 hiddne-sm col-md-4 col-lg-4">
                                <div class="zm-video-post zm-video-lay-a zm-single-post">
                                    <div class="zm-video-thumb" data-dark-overlay="2.5" >
                                        <img src="images/video/3.jpg" alt="video">
                                        <a class="video-activetor" href="https://www.youtube.com/watch?v=PsjFbwIQ8AY">
                                            <i class="fa fa-play-circle-o"></i>
                                        </a>
                                    </div>
                                    <div class="zm-video-info  text-white">
                                        <h2 class="zm-post-title"><a href="blog-single-video.html">Duis aute irure dolor in reprehenderit in voluptate velit esse.</a></h2>
                                        <div class="zm-post-meta">
                                            <ul>
                                                <li class="s-meta zm-post-time">10:33 min</li>
                                                <li class="s-meta"><a href="#" class="zm-author">Thomson Smith</a></li>
                                                <li class="s-meta"><a href="#" class="zm-date">April 18, 2016</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End single video post [video layout A] -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Video Post [View layout A]  -->
            <div class="zm-section bg-white pt-70 pb-40">
                <div class="container">
                    <div class="row">
                        <!-- Start left side -->
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 columns">
                            <div class="row mb-40">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="section-title">
                                        <h2 class="h6 header-color inline-block uppercase">Latest News</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="zm-posts">
                                        <!-- Start single post layout C -->
                                        <?php
                                        
                                                
         
                $get_cat_pro = "select * from po ORDER BY(post_id) DESC LIMIT 0,9";
                
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
                      
                        
                    <article class="zm-post-lay-c zm-single-post clearfix">
                    
                                            <div class="zm-post-thumb f-left">
                                                <a href="details.php?post_id=<?php echo $post_id; ?>"><img src="admin/post_images/<?php echo $post_img; ?>" alt="img" height="200px;" width="250px;"></a>
                                            </div>
                                            <div class="zm-post-dis f-right">
                                                <div class="zm-post-header">
                                                    <div class="zm-category"><a href="#" class="bg-cat-1 cat-btn"><?php echo $post_cat; ?></a></div>
                                                    <h2 class="zm-post-title"><a href="details.php?post_id=<?php echo $post_id; ?>"><?php echo $post_title; ?> </a></h2>
                                                    <div class="zm-post-meta">
                                                        <ul>
                                                            <li class="s-meta"><a href="#" class="zm-author">CC News</a></li>
                                                            <li class="s-meta"><a href="#" class="zm-date"><?php echo $post_time; ?></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="zm-post-content">
                                                        <p><?php echo $post_desc; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </article>
                    
                  
           <?php      
                   
    }
        

                                        
                                        ?>
                                        <!-- Start single post layout C -->
                                        <!-- Start single post layout C --
                                        <article class="zm-post-lay-c zm-single-post clearfix">
                                            <div class="zm-post-thumb f-left">
                                                <a href="blog-single-image.html"><img src="images/post/c/2.jpg" alt="img"></a>
                                            </div>
                                            <div class="zm-post-dis f-right">
                                                <div class="zm-post-header">
                                                    <div class="zm-category"><a href="#" class="bg-cat-2 cat-btn">Business</a></div>
                                                    <h2 class="zm-post-title"><a href="blog-single-image.html">Nisi ut aliquip ex ea commodo consequat duis aute irure dolor in reprehenderit.</a></h2>
                                                    <div class="zm-post-meta">
                                                        <ul>
                                                            <li class="s-meta"><a href="#" class="zm-author">Thomson Smith</a></li>
                                                            <li class="s-meta"><a href="#" class="zm-date">April 18, 2016</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="zm-post-content">
                                                        <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <!-- Start single post layout C -->
                                        <!-- Start single post layout C --
                                        <article class="zm-post-lay-c zm-single-post clearfix">
                                            <div class="zm-post-thumb f-left">
                                                <a href="blog-single-image.html"><img src="images/post/c/3.jpg" alt="img"></a>
                                            </div>
                                            <div class="zm-post-dis f-right">
                                                <div class="zm-post-header">
                                                    <div class="zm-category"><a href="#" class="bg-cat-3 cat-btn">Entertainment</a></div>
                                                    <h2 class="zm-post-title"><a href="blog-single-image.html">Minim veniam quis nostrud xercitation ullamco laboris nisi ut aliquip commodo.</a></h2>
                                                    <div class="zm-post-meta">
                                                        <ul>
                                                            <li class="s-meta"><a href="#" class="zm-author">Thomson Smith</a></li>
                                                            <li class="s-meta"><a href="#" class="zm-date">April 18, 2016</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="zm-post-content">
                                                        <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <!-- Start single post layout C -->
                                        <!-- Start Advertisement -->
                                        <div class="advertisement">
                                            <div class="row mtb-40">
                                                <div class="col-md-12 text-center">
                                                    <a href="#"><img src="images/ad/3.jpg" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Advertisement -->
                                        <!-- Start single post layout C --
                                        <article class="zm-post-lay-c zm-single-post clearfix">
                                            <div class="zm-post-thumb f-left">
                                                <a href="blog-single-image.html"><img src="images/post/c/5.jpg" alt="img"></a>
                                            </div>
                                            <div class="zm-post-dis f-right">
                                                <div class="zm-post-header">
                                                    <div class="zm-category"><a href="#" class="bg-cat-5 cat-btn">Food</a></div>
                                                    <h2 class="zm-post-title"><a href="blog-single-image.html">Quis nostrud xercitation ullamco laboris nisi aliquip ex ea commodo consequat.</a></h2>
                                                    <div class="zm-post-meta">
                                                        <ul>
                                                            <li class="s-meta"><a href="#" class="zm-author">Thomson Smith</a></li>
                                                            <li class="s-meta"><a href="#" class="zm-date">April 18, 2016</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="zm-post-content">
                                                        <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <!-- Start single post layout C -->
                                        <!-- Start single post layout C --
                                        <article class="zm-post-lay-c zm-single-post clearfix">
                                            <div class="zm-post-thumb f-left">
                                                <a href="blog-single-image.html"><img src="images/post/c/4.jpg" alt="img"></a>
                                            </div>
                                            <div class="zm-post-dis f-right">
                                                <div class="zm-post-header">
                                                    <div class="zm-category"><a href="#" class="bg-cat-4 cat-btn">Electronics</a></div>
                                                    <h2 class="zm-post-title"><a href="blog-single-image.html">Nisi ut aliquip ex ea commodo consequat duis aute irure dolor in reprehenderit.</a></h2>
                                                    <div class="zm-post-meta">
                                                        <ul>
                                                            <li class="s-meta"><a href="#" class="zm-author">Thomson Smith</a></li>
                                                            <li class="s-meta"><a href="#" class="zm-date">April 18, 2016</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="zm-post-content">
                                                        <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <!-- Start single post layout C -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End left side -->
                        <!-- Start Right sidebar -->
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 sidebar-warp columns">
                            <div class="row">
                                <!-- Start Subscribe From -->
                                <div class="col-md-6 col-sm-12 col-xs-12 col-lg-12 xs-mt-40 sm-mt-50 md-mt-60">
                                    <aside class="subscribe-form bg-dark text-center sidebar">
                                        <h3 class="uppercase zm-post-title">Get Email Updates</h3>
                                        <p>Join 80,000+ awesome subscribers and update yourself with our exclusive news.</p>
                                        <form action="index.php" method="post">
                                            
                                            <?php
                                            include("subscribe.php");
                                            ?>
                                            <input type="text" name="fullname" placeholder="Enter your full name">
                                            <input type="email" name="email" placeholder="Enter email address" required="">
                                            <input type="submit" name="subs" value="Subscribe">
                                        </form>
                                    </aside>
                                </div>
                                <!-- End Subscribe From -->
                                <aside class="zm-tagcloud-list col-xs-12 col-sm-6 col-md-6 col-lg-12 mt-60">
                                    <div class="row mb-40">
                                        <div class="col-md-12">
                                            <div class="section-title">
                                                <h2 class="h6 header-color inline-block uppercase">Tags</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row"> 
                                        <div class="col-md-12">
                                            <div class="zm-tagcloud">
                                                <?php 
                                                
                                                include("includes/connect.php");
                                                
                                                    $get_tag = "select * from po";
                
                $run_tag = mysqli_query($con,$get_tag);
                
           //.. $count = mysqli_num_rows($con,$run_cat_pro);
            
            ////if($count == 0){
           //     echo "<h2>No post found in this categories.</h2>";
//}
                while($row_tag=mysqli_fetch_array($run_tag)){
                    
                    $post_tag = $row_tag[4];
                    
                ?>
                                                <a href="<?php echo "tag_news.php?post_tag=$post_tag"; ?>"><?php echo $post_tag; ?></a>
                                                
                    <?php
                
                }?>
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                                <!-- Start post layout E -->
                                <aside class="zm-post-lay-e-area col-xs-12 col-sm-6 col-md-6 col-lg-12 mt-60 hidden-md">
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
                                                <!-- Start single post layout E -->
                                                
                                                  <?php
                                        
                                                
         
                $get_cat_pro = "select * from po ORDER BY rand() LIMIT 0,8";
                
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
                                                        <a href="details.php?post_id=<?php echo $post_id; ?>"><img src="admin/post_images/<?php echo $post_img; ?>" alt="img" height="100px;" width="200px;"></a>
                                                    </div>
                                                    <div class="zm-post-dis f-right">
                                                        <div class="zm-post-header">
                                                            <h2 class="zm-post-title"><a href="details.php?post_id=<?php echo $post_id; ?>"><?php echo $post_title; ?></a></h2>
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
                                                
                                                <!-- Start single post layout E -->
                                                <!-- Start single post layout E --
                                                <article class="zm-post-lay-e zm-single-post clearfix">
                                                    <div class="zm-post-thumb f-left">
                                                        <a href="blog-single-image.html"><img src="images/post/e/6.jpg" alt="img"></a>
                                                    </div>
                                                    <div class="zm-post-dis f-right">
                                                        <div class="zm-post-header">
                                                            <h2 class="zm-post-title"><a href="blog-single-image.html">Enim ad minim veniam nostrud xercitation ullamco.</a></h2>
                                                            <div class="zm-post-meta">
                                                                <ul>
                                                                    <li class="s-meta"><a href="#" class="zm-author">Thomson Smith</a></li>
                                                                    <li class="s-meta"><a href="#" class="zm-date">April 18, 2016</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                                <!-- Start single post layout E -->
                                                
                                                
                                                
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                                <!-- Start post layout E -->
                            </div>
                        </div>
                        <!-- End Right sidebar -->
                    </div>
                    
                    <!-- Start Advertisement -->
                    <div class="advertisement">
                        <div class="row mt-40">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                                <a href="#"><img src="images/ad/2.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Advertisement -->
                </div>
            </div>
        </section>
        <!-- End page content -->
        <!-- Start footer area -->
		<?php
			
			include("includes/footer.php");
		
		?>
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

<!-- Mirrored from nscreativestudio.com/znews/znews/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 May 2018 20:44:26 GMT -->
</html>