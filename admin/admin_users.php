
<!DOCTYPE HTML>
<html>
<head>
<title>All Category | CC News</title>
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
    
    
	<div class="main-content">
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
		<!--left-fixed -navigation-->
		<?php   include("includes/header.php"); ?>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					
					
					<div class=" form-grids row form-grids-right">
						<div class="widget-shadow " data-example-id="basic-forms"> 
							<div class="form-title">
								<h4>All <small>Admins</small> :</h4>
                                
							</div>
                            
							<div class="form-body">
                                <!-- InstanceBeginEditable name="EditRegion3" -->
 

				<h4>Only you can change password</h4>
                                
                                    <table class="table table-striped" id="myTable" style="margin-top:60px;">
                                            <tr>
                                                <th style="font-weight:bolder;">
                                                    Id
                                                </th>
                                                <th style="font-weight:bolder;">
                                                    Name
                                                </th>
                                                <th style="font-weight:bolder;">
                                                    password
                                                </th>
                                                <th style="font-weight:bolder;">
                                                    Role
                                                </th>
                                                <th style="font-weight:bolder;">
                                                    Edit
                                                </th>
                                                
                                            </tr>
                                        
                                        
                                        <?php 
                                        
                                        include("includes/connect.php");
                                        
                                            $select="select * from admin";
                                        
                                            $query=mysqli_query($con,$select);
                                        
                                            while($row=mysqli_fetch_array($query)){
                                                
                                                $id = $row['id'];
                                                $username = $row['username'];
                                                $pass = $row['pass'];
                                                $roll = $row['role'];
                                                
                                                ?>
                                        
                                        <tr>
                                            <td><?php echo $id; ?></td>
                                            <td><?php echo $username; ?></td>
                                            <td><?php echo $pass; ?></td>
                                            <td><?php echo $roll; ?></td>
                                            <td><a href="<?php echo "edit_admin.php?ids=$id"; ?>"><span style="font-size:25px;"><i class="fa fa-edit"></i></span></a></td>
                                            
                                        </tr>
                                        
                                        <?php
                                            }
                                        ?>
                                        
                                    </table>
                                    
                                  <?php 

                                     
                                            
                                
                                        ?>
                                    
                               
                                
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