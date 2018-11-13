 


        <!-- Start of header area -->
        <header  class="header-area header-wrapper bg-wite clearfix">
            <div class="header-top-bar bg-dark ptb-10">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7  hidden-xs">
                            <div class="header-top-left">
                                <nav class="header-top-menu zm-secondary-menu">
                                    <ul>
                                        <li><a href="index.php">Home</a></li>
                                       
                                        <li><a href="about.php">About</a></li>
                                        <li><a href="contact.php">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
                            <div class="header-top-right clierfix text-right">
                                <div class="header-social-bookmark topbar-sblock">
                                    <ul>
                                        <li><a href="https://www.facebook.com/bablu.srivastava.77?fref=ts"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="https://www.youtube.com/channel/UCDyAO9FJFv8A9_T001vvyaw"><i class="fa fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                                <div class="zmaga-calendar topbar-sblock">
                                    <span class="calendar uppercase"><!--Sunday, July 31, 2016--><?php echo date('j-F-Y');?> </span>
                                </div>
                                
                                <?php
        
    session_start();
        
        $con = mysqli_connect("localhost","root","","znews");
    
        if(!$con){
            echo "<script>alert('connection is not establish')</script>";
        }
    
        if(isset($_POST["login"])){
            
            $username = $_POST["username"];
            
            $pass = $_POST["pass"];
            $role = $_POST["role"];
            
            $query ="select * from admin where username = '$username' and pass = '$pass' and role = '$role'";
              $rs=mysqli_query($con,$query);
            $fr=mysqli_fetch_row($rs);
           
            $unm=$fr[1];
            $ps=$fr[2];
            $rl=$fr[3];
            
           
            
                //userType 1 is admin
            
                     if($username==$unm && $pass==$ps && $role=='admin')
            {
               
                $_SESSION['username']=$username;
                $_SESSION['pass']=$pass;
                $_SESSION['role']=$role;
                
                
                                
                
                header("Location:admin/index.php");
                
                         //case 2 if Author is login  
                
            }elseif($username==$unm && $pass==$ps && $role=='author'){
                         
                         $_SESSION['username']=$username;
                $_SESSION['pass']=$pass;
                $_SESSION['role']=$role;
                         
                         header("Location:admin/author/author_index.php");
                     }
            
            
            // case 3 if editor is login 
            
            elseif($username==$unm && $pass==$ps && $role=='editor'){
                
                $_SESSION['username']=$username;
                $_SESSION['pass']=$pass;
                $_SESSION['role']=$role;
                
                
             header("Location:admin/editor/editor_index.php"); 
            }
            else{
                
                echo "<script>alert('Invalid id and password')</script>";
                
            }
                
              
                     
           
               
        }
    
    ?>
                                <div class="user-accoint topbar-sblock">
                                    <span class="login-btn uppercase">Login</span>
                                    <div class="login-form-wrap bg-white">
                                        
                                        <form class="zm-signin-form text-left" action="index.php" method="post">
                                            <input type="text" class="zm-form-control username" placeholder="Username or Email" name="username">
                                            <input type="password" class="zm-form-control password" placeholder="Password" name="pass">
                                            <div class="zm-submit-box clearfix  mt-20">
                                            
                                            Admin<input type="radio" name="role" value="admin"/>
                                            Author<input type="radio" name="role" value="author"/>
                                            Editor<input type="radio" name="role" value="editor"/>
                                            </div>
                                            
                                            <div class="zm-submit-box clearfix  mt-20">
                                                <input type="submit" name="login" value="Login">
                                                <a href="registration.html">Register</a>
                                            </div>
                                           <!-- <a href="#" class="zm-forget">Forget username/password?</a>
                                            <div class="zm-login-social-box">
                                                <a href="#" class="social-btn bg-facebook block"><span class="btn_text"><i class="fa fa-facebook"></i>Login with Facebook</span></a>
                                                <a href="#" class="social-btn bg-twitter block"><span class="btn_text"><i class="fa fa-twitter"></i>Login with Twitter</span></a>
                                            </div>-->
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="header-middle-area bg-dark">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-sm-5 col-xs-12 header-mdh">
                            <div class="global-table">
                                <div class="global-row">
                                    <div class="global-cell">
                                        <div class="logo">
                                            <a href="index.php">
                                                <img src="../images/logo/2.png" alt="main logo" height="150px;">
                                            </a>
                                            <p class="site-desc"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-lg-7 col-sm-7 col-xs-12 col-lg-offset-1 header-mdh hidden-xs">
                            <div class="global-table">
                                <div class="global-row">
                                    <div class="global-cell">
                                      <div class="advertisement text-right">
                                          <?php 
                                        
                                        include("includes/connect.php");
                                        
                                            $select="select * from ad";
                                        
                                            $query=mysqli_query($con,$select);
                                        
                                            while($row=mysqli_fetch_array($query)){
                                                
                                                $cat_img = $row['ad_img'];
                                                
                                                ?>
                                        
                                        <tr>
                                            
                                            <td><img src="../admin/advertisment/<?php echo $cat_img; ?>" height="80px; "width="100px;" /></td>
                                            
                                        </tr>
                                        
                                        <?php
                                            }
                                        ?>
                                        
 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom-area hidden-sm hidden-xs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="menu-wrapper  bg-theme clearfix">
                                <div class="row">
                                    <div class="col-md-11">
                                        <div class="mainmenu-area">
                                            <nav class="primary-menu uppercase">
                                                <ul class="clearfix">
                                                   <!--- <li class="current drop"><a href="#">Home</a>
                                                        <ul class="dropdown">
                                                            <li class="drop"><a href="#">Newspaper</a>
                                                                <ul class="dropdown level2">
                                                                    <li><a href="index.html">Newspaper 1</a></li>
                                                                    <li><a href="index-3.html">Newspaper 2</a></li>
                                                                    <li><a href="index-7.html">Newspaper 3</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="drop"><a href="#">Magazine</a>
                                                                <ul class="dropdown level2">
                                                                    <li><a href="index-2.html">Magazine 1</a></li>
                                                                    <li><a href="index-7.html">Magazine 2</a></li>
                                                                    <li><a href="index-10.html">Magazine 3</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="drop"><a href="#">Blogs</a>
                                                                <ul class="dropdown level2">
                                                                    <li><a href="index-5.html">Blog demo 1</a></li>
                                                                    <li><a href="index-6.html">Blog demo 2</a></li>
                                                                    <li><a href="index-8.html">Blog demo 3</a></li>
                                                                    <li><a href="index-9.html">Blog demo 4</a></li>
                                                                    <li><a href="index-11.html">Blog demo 5</a></li>
                                                                    <li><a href="index-12.html">Blog demo 6</a></li>
                                                                    <li><a href="index-13.html">Blog demo 7</a></li>
                                                                    <li><a href="index-14.html">Blog demo 8</a></li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="index-15.html">Travel</a></li>
                                                            <li><a href="index-16.html">Lifestyle</a></li>
                                                            <li><a href="index-17.html">Sports</a></li>
                                                        </ul>
                                                    </li>

tttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt
<div class="mega-menu-area dropdown clearfix">
                                                            
                                                            <div class="zm-megamenu-content">
                                                                <div class="tab-content">
                                                                    <div role="tabpanel" class="tab-pane fade" id="allnews">
                                                                     <ul>
                                                                        <li><a href="">falbna</a>jfdhd</li></ul>   
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
---->
                                                    
                                                    <li class="current drop"><a href="#">All Categories</a>
                                                        <ul class="dropdown">
                                                            
                                                            
                                                            <?php
                                                        
                                                    include("connect.php");
                                                    
                                                    $select="select * from cat LIMIT 0,10";
                                                    
                                                    $query=mysqli_query($con,$select);
                                                    
                                                    while($row=mysqli_fetch_array($query))
                                                      {
                                                          $cat_id=$row[0];
                                                        $cat_title=$row[1];

                                                    
                                                    ?>
                                                    <li class="mm"><a href="<?php echo "cat.php?cat_title=$cat_title"; ?>" class="cl"><?php echo $cat_title; ?></a></li>
                                                    
                                                    <?php
                                                    
                                                    }
                                                    ?>
                                                            
                                                        </ul>
                                                    </li>
                                                    
                                                    
                                                    
                                            <li><a href="latest_news.php">ताजा खबर</a></li>
                                                   
                                                    <?php
                                                        
                                                    include("connect.php");
                                                    
                                                    $select="select * from cat LIMIT 0,10";
                                                    
                                                    $query=mysqli_query($con,$select);
                                                    
                                                    while($row=mysqli_fetch_array($query))
                                                      {
                                                          $cat_id=$row[0];
                                                        $cat_title=$row[1];

                                                    
                                                    ?>
                                                    <li class="mm"><a href="<?php echo "cat.php?cat_title=$cat_title"; ?>" class="cl"><?php echo $cat_title; ?></a></li>
                                                    
                                                    <?php
                                                    
                                                    }
                                                    ?>
                                                    
                                                    
                                                    
                                                    
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-1">
                                        <div class="search-wrap pull-right">
                                            <div class="search-btn"><i class="fa fa-search"></i></div>
                                            <div class="search-form">
                                                <form action="#">
                                                    <input type="search" placeholder="Search">
                                                    <button type="submit"><i class='fa fa-search'></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile-menu-area start -->
            <div class="mobile-menu-area hidden-md hidden-lg">
                <div class="fluid-container">
                    <div class="mobile-menu clearfix">
                        <div class="search-wrap mobile-search">
                            <div class="mobile-search-btn"><i class="fa fa-search"></i></div>
                            <div class="mobile-search-form">
                                <form action="#">
                                    <input type="text" placeholder="Search">
                                    <button type="submit"><i class='fa fa-search'></i></button>
                                </form>
                            </div>
                        </div>
                        <nav id="mobile_dropdown">
                            <ul>
                                <li><a href="index.html">All</a>
                                    <ul>
                                        
                                        <?php
                                                        
                                                    include("connect.php");
                                                    
                                                    $select="select * from cat";
                                                    
                                                    $query=mysqli_query($con,$select);
                                                    
                                                    while($row=mysqli_fetch_array($query))
                                                      {
                                                          $cat_id=$row[0];
                                                        $cat_title=$row[1];

                                                    
                                                    ?>
                                                    <li class="mm"><a href="<?php echo "cat.php?cat_title=$cat_title"; ?>" class="cl"><?php echo $cat_title; ?></a></li>
                                                    
                                                    <?php
                                                    
                                                    }
                                                    ?>
                                                    
                                        
                                    </ul>
                                </li>
                                
                                <?php
                                                        
                                                    include("connect.php");
                                                    
                                                    $select="select * from cat LIMIT 0,10";
                                                    
                                                    $query=mysqli_query($con,$select);
                                                    
                                                    while($row=mysqli_fetch_array($query))
                                                      {
                                                          $cat_id=$row[0];
                                                        $cat_title=$row[1];

                                                    
                                                    ?>
                                                    <li class="mm"><a href="<?php echo "cat.php?cat_title=$cat_title"; ?>" class="cl"><?php echo $cat_title; ?></a></li>
                                                    
                                                    <?php
                                                    
                                                    }
                                                    ?>
                                                    
                                
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </nav>
                    </div>       
                </div>
            </div>
            <!-- mobile-menu-area end -->   
            <div class="breakingnews-wrapper hidden-xs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                            <div class="breakingnews clearfix fix">
                                <div class="bn-title">
                                    <h6 class="uppercase">BREAKING NEWS</h6>
                                </div>
                                <div class="news-wrap">
                                    <ul class="bkn clearfix" id="bkn">
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
                   
                    
                        ?>
                      
                        
                    <li><?php echo $post_title; ?></li>
                    
                  
           <?php      
                   
    }
        

                                        
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End of header area -->