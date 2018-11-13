<!-- Start footer area -->
        <footer id="footer" class="footer-wrapper footer-1">
            <!-- Start footer top area -->
            <div class="footer-top-wrap ptb-70 bg-dark">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 hidden-sm">
                            <div class="zm-widget pr-40">
                                <h2 class="h6 zm-widget-title uppercase text-white mb-30">About CCnews</h2>
                                <div class="zm-widget-content">
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat, non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    <p>Sed ut perspiciatis unde omnis iste, voluptatem dolore mque laudantium totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-6 col-lg-2">
                            <div class="zm-widget">
                                <h2 class="h6 zm-widget-title uppercase text-white mb-30">Social Links</h2>
                                <div class="zm-widget-content">
                                    <div class="zm-social-media zm-social-1">
                                        <ul>
                                            <li><a href="https://www.facebook.com/bablu.srivastava.77?fref=ts"><i class="fa fa-facebook"></i>Like us on Facebook</a></li>
                                            <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i>Tweet us on Twitter</a></li>
                                            <li><a href="https://www.youtube.com/channel/UCDyAO9FJFv8A9_T001vvyaw"><i class="fa fa-youtube"></i>Subscribe us on Youtube</a></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-6 col-lg-3">
                            <div class="zm-widget pr-50 pl-20">
                                <h2 class="h6 zm-widget-title uppercase text-white mb-30">Popular Categories/<span>total</span> </h2>
                                
                                <div class="zm-widget-content">
                                    <div class="zm-category-widget zm-category-1">
                                        <ul>
                                            <?php
                                                        
                                                    include("connect.php");
                                                    
                                                    $select="select * from cat ORDER BY(cat_id) DESC LIMIT 0,5";
                                                    
                                                    $query=mysqli_query($con,$select);
                                            
                                           
                                                        
                                                
                                           
                                                    while($row=mysqli_fetch_array($query))
                                                      {
                                                          $cat_id=$row[0];
                                                        $cat_title=$row[1];

                                                    
                                                    ?>
                                                    <li><a href="<?php echo "cat.php?cat_title=$cat_title"; ?>" class="cl"><?php echo $cat_title; ?><span><?php
                                                        
                                                        $select="select * from cat ";
                                                    
                                                    $queryy=mysqli_query($con,$select);
                                                        
                                                         $count = mysqli_num_rows($queryy);
            
                                                if($count !=0){
                                                        
                                                        
                                                            echo $count;
                                                        ?></span></a></li>
                                                    
                                                    <?php
                                                    }
                                                    }
                                                    ?>
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-6 col-lg-3">
                            <div class="zm-widget">
                                <h2 class="h6 zm-widget-title uppercase text-white mb-30">Subscribe Newsletter</h2>
                                <!-- Start Subscribe From -->
                                <div class="zm-widget-content">
                                    <div class="subscribe-form subscribe-footer">
                                        <p>Join 80,000+ awesome subscribers and update yourself with our exclusive news.</p>
                                        <form action="index.php" method="post">
                                            
                                            <?php include("subscribe.php"); ?>
                                            
                                            <input type="text" name="fullname" placeholder="Enter your full name">
                                            <input type="email" name="email" placeholder="Enter email address" required="">
                                            <input type="submit" name="subs" value="Subscribe">
                                        </form>
                                    </div>
                                </div>
                                <!-- End Subscribe From -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End footer top area -->
            <div class="footer-buttom bg-black ptb-15">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                            <div class="zm-copyright">
                                <p class="uppercase">&copy; 2018 CCNews. All Rights Reserved.</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 text-right hidden-xs">
                            <nav class="footer-menu zm-secondary-menu text-right">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End footer area -->