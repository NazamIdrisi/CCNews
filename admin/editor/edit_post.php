
<!DOCTYPE HTML>
<html lang="en">
<head>
<title>Glance Design Dashboard an Admin Panel Category Flat Bootstrap Responsive Website Template | Forms :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="news, cc, news, channal, update,song,jagran," />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS -->

 <!-- side nav css file -->
 <link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
 <!-- side nav css file -->
 
    <!--------------checkbox css and js fie---------->
    <link href="../css/checkbox.css"  rel='stylesheet' type='text/css'/>
    <script src="../js/checkbox.js"></script>
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 

<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->

</head> 
<body class="cbp-spmenu-push">
    
    <?php
     session_start();
                            if(isset($_GET['ids']))
                            {
                                $catid=$_GET['ids'];
                                $_SESSION['fd']=$catid;
                                echo "<script>alert('ho gaya')</script>";
                            }
    
    ?>
	<div class="main-content">
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
		<!--left-fixed -navigation-->
	
        <?php
        
        include("includes/header.php");
        ?>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h2 class="title1">Forms</h2>
					
					<div class=" form-grids row form-grids-right">
						<div class="widget-shadow " data-example-id="basic-forms"> 
							<div class="form-title">
								<h4>Post <small>News</small> :</h4>
							</div>
                            
                           <?php
                           
                            
                            include("includes/connect.php");
                           
                          
                            if(!empty($_POST['publish']))
                            {
                                $ct=$_SESSION['fd'];
                                 $cat_box = $_POST['cat_box'];
                            $name = $_POST['title_box'];
                                $msg_box = $_POST['msg_box'];
                               
                                $tag_box = $_POST['tag_box'];
                                
                            $img_box = $_FILES['img_box']['name'];
                            

                            $edit = mysqli_query($con,"Update po set cat_title='$cat_box',title_box='$name',msg_box='$msg_box',tag_box='$tag_box',img_box='$img_box' where post_id = $ct");
                            
                            move_uploaded_file($_FILES['img_box']['tmp_name'],"post_images/".$img_box);

                           
                            echo "<script>alert('good')</script>";
                         
                            
                        
                            }
                           
                            
                            
                            ?>
							<div class="form-body">
								<form class="form-horizontal" action="edit_post.php" method="post" enctype="multipart/form-data">    
                                    
                                   
                                    
                                    <div class="form-group">
                                        <label class="col-md-2 control-label"></label>
										<div class="col-md-12">
											<div class="input-group">							
												<span class="input-group-addon">
													<i class="fa fa-key"></i>
												</span>
												<input type="text"  name="title_box" class="form-control" placeholder="Enter title here" required>
											</div>
										</div>
									</div><br/>
                                    
                                <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
                                <script>tinymce.init({ selector:'textarea' });</script>
                                    
                                    <div class="row">
                                        <div class="col-md-8">
                                            <textarea cols="30" rows="33" name="msg_box"></textarea>
                                        </div>
                                        
                                        
                                        <div class="col-md-4">
                                            <div class="panel panel-primary" style="border-radius:10px">
                                                <div class="panel-heading" style="border-radius:5px">Select Category</div>
                                                <div class="panel-body">
                                                    <?php
                                                        
                                                    include("connect.php");
                                                    
                                                    $select="select * from cat";
                                                    
                                                    $query=mysqli_query($con,$select);
                                                    
                                                    while($row=mysqli_fetch_array($query))
                                                      {
                                                        $cat_id=$row[0];  
                                                        $cat_title=$row[1];

                                                    
                                                    ?>            
                                                   <!-- <a href=""><?php //echo $cat_title; ?></a>-->
                                        
                                            <ul>
                                        <li><input type="checkbox" name="cat_box" value="<?php echo $cat_title; ?>"/><span style="font-weight:499;padding-left:10px;"><?php echo $cat_title; ?></span></li>
                                       
                                                </ul>   
                                                    <?php
                                                    
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                          
                                        <style>
                                                ul li{
                                                list-style-type: none;
                                                }
                                        </style>
                                        <br/>
                                        
                                        <div class="col-md-4">
                                            <div class="panel panel-primary" style="border-radius:10px">
                                                  <div class="panel-heading" style="border-radius:5px">Tags</div>
                                                  <div class="panel-body" >
                                                        <input type="text"  name="tag_box" class="form-control" placeholder="Enter tags" required>
                                                    </div>
                                            </div>
                                        </div><br/>
                                        <div class="col-md-4">
                                            <div class="panel panel-primary" style="border-radius:10px">
                                                  <div class="panel-heading" style="border-radius:5px">
                                                <ul class="nav nav-tabs">
                                                        <li class="active"><a data-toggle="tab" href="#home">Images</a></li>
                                                                                                     

                                                </ul>
                                                    </div>
                                                  <div class="panel-body" >
                                                       <div class="tab-content">
                                                                <div id="home" class="tab-pane fade in active">
                                                                  
                                                                  <input type="file" id="files" multiple  name="img_box" style="margin-top:10px;"  >
                                                                </div>
                                                                
                                                                
                                                      </div>
                                                                </div>
                                            </div>
                                        </div>
                                        <br/>
                                        
                                       <!-- <div class="col-md-4">
                                            <div class="panel panel-primary" style="border-radius:10px">
                                                  <div class="panel-heading" style="border-radius:5px">Select Image</div>
                                                  <div class="panel-body">
                                                      
                                                      <?php
                                                      
                                                      //move_uploaded_file($_FILES['img']['tmp_name'],"C:/xampp/htdocs/arbab/web/userpic/".$pic);
                                                      
                                                      ?>
                                                      <!---<img src="images/slider7.jpg" height="190px;" width="250px" alt="no choose file"/>--
                                                        <input type="file" id="files" multiple  name="img_box" style="margin-top:10px;"  >
                                                      
                                                        
                                                    </div>
                                                </div>
                                            </div>-->
                                        </div>
                                    
                                    
                                    
                                    
                                    <div class="form-group">
										<div class="col-md-8">
											<div class="input-group" style="margin-left:50%" >
                                               
												<input type="submit" value="publish"  class="btn btn-primary" name="publish" >
											</div>
										</div>
									</div>
                                </form> 
							</div>
						</div>
					</div>
										
					
				</div>
			</div>
		</div>
		<!--footer-->
		<?php
        
        include("includes/footer.php");
        ?>
        <!--//footer-->
	</div>
	
	<!-- side nav js -->
	<script src='js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->
	
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
   
</body>
</html>