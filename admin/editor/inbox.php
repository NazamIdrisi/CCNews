
<!DOCTYPE HTML>
<html>
<head>
<title>All Inbox | CC News</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
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
    include("includes/connect.php");
     session_start();
                            if(isset($_GET['ids']))
                            {
                                $catid=$_GET['ids'];
                                $_SESSION['fd']=$catid;
                               
                                
                                 $ct=$_SESSION['fd'];

                                        $edit = mysqli_query($con,"delete from inbox where id = $ct");
                                            
                            }
    
    ?>
	<div class="main-content">
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
		<!--left-fixed -navigation-->
		<?php   include("includes/editor_header.php"); ?>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					
					
					<div class=" form-grids row form-grids-right">
						<div class="widget-shadow " data-example-id="basic-forms"> 
							<div class="form-title">
								<h4>All <small>Advertisment</small> :</h4>
							</div>
                            
							<div class="form-body">
								  <!--search-box-->
				<div class="search-box" style="float:right">
					<form class="input">
                        
						<!---<input class="sb-search-input input__field--madoka" id="myInput" onkeyup="myFunction()" placeholder="Filter" type="text" id="input-30" />--->
						<label class="input__label" for="input-30">
							<svg class="graphic" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
								<path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
							</svg>
						</label>
					</form>
				</div><!--//end-search-box-->
                                    
                                    <table class="table table-striped" id="myTable" style="margin-top:60px;">
                                            <tr>
                                                <th style="font-weight:bolder;">
                                                    Id
                                                </th>
                                                
                                                <th style="font-weight:bolder;">
                                                    Name
                                                </th>
                                                
                                                <th style="font-weight:bolder;">
                                                    Email
                                                </th>
                                                
                                                <th style="font-weight:bolder;">
                                                    Phone
                                                </th>
                                                
                                                <th style="font-weight:bolder;">
                                                    Massege
                                                </th>
                                                
                                                <th style="font-weight:bolder;">
                                                    Delete
                                                </th>
                                            </tr>
                                        
                                        
                                         <?php
                                        
                                            include("includes/connect.php");    
         
                $get_cat_pro = "select * from inbox ";
                
                $run_cat_pro = mysqli_query($con,$get_cat_pro);
                
           //.. $count = mysqli_num_rows($con,$run_cat_pro);
            
            ////if($count == 0){
           //     echo "<h2>No post found in this categories.</h2>";
//}
                while($row_ca_pro=mysqli_fetch_array($run_cat_pro)){
                    
                    $id=$row_ca_pro['id'];
                    $phone = $row_ca_pro['phone'];
                    $email = $row_ca_pro['email'];
                    
                    $msg = $row_ca_pro['msg'];
                    $name = $row_ca_pro['fullname'];
                    
                        
                        ?>
                                           
                                            
                                           <tr>
                                                <td>
                                               <?php echo $id; ?>
                                               </td>
                                               
                                               <td>
                                               <?php echo $name; ?>
                                               </td>
                                               
                                               <td>
                                                <?php echo $email; ?>
                                               </td>
                                               
                                               <td>
                                                <?php echo $phone; ?>
                                               </td>
                                               
                                               <td>
                                                <?php echo $msg; ?>
                                               </td>
                                               
                                               <td>
                                                    <a href="<?php echo "inbox.php?ids=$id";    ?>"><span style="font-size:20px;"><i class="fa fa-trash-o"></i></span></a>
                                               </td>
                                        </tr>
                                      
                                            
                                            <?php
                                            }
                                            
                                            ?>
                                        
                                    </table>
                                    
                                    
                                    
                               
							</div>
						</div>
					</div>
										
					
				</div>
			</div>
		</div>
		<!--footer-->
		<?php include("includes/footer.php");?>
        <!--//footer-->
	</div>
	
        <!--------------filter start ------------------------->
        
        <!-----------------end filter --------------------------->
        
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