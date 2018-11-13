<!doctype html>
<html><!-- InstanceBegin template="/Templates/atemplate.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-state=1 "/>

<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
<script src="js/bootstrap.min.js"></script>
<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
<link type="text/css" rel="stylesheet" href="css/style.css"/>
<link type="text/css" rel="stylesheet" href="css/menu.css"/>
<link type="text/css" rel="stylesheet" href="css/font-awesome.css"/>
<link type="text/css" rel="stylesheet" href="css/ken-burns.css"/>
<link type="text/css" rel="stylesheet" href="css/animate.min.css"/>
<link type="text/css" rel="stylesheet" href="css/owl.carousel.css"/>
<link type="text/css" rel="stylesheet" href="css/datepicker.css"/>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/bootstrap.js"></script>
<!-- InstanceBeginEditable name="doctitle" -->
<title>Trip-on</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top" id="navbar">
<div class="container-fluid">
	<div class="navbar-header">
  <a href="admin.php" style="color: white;"  class="navbar-brand">Trip-on</a>
  
 
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse-nav">
		<span class="icon-bar icb"></span>
		<span class="icon-bar icb"></span>
		<span class="icon-bar icb"></span>
	</button>
	</div>
	<div class="collapse navbar-collapse navbar-right" id="collapse-nav">
		<ul class="nav navbar-nav ">
			<li><a href="buses.php" id="menu">Add Buses</a>
			
			</li>
			<li ><a href="tour.php"  id="menu">Tour</a>
			
			</li>
			
			<li ><a href="users.php"  id="menu">Users</a>
			
			</li>
			
			
			<li><a href="logout.php"  id="myBtn">Logout</a></li>
			
			
		</ul>
	</div>

  </div>
</nav>
<!-- InstanceBeginEditable name="EditRegion3" -->
 <script>
	$(document).ready(function(){
		$('#srch').keyup(function(){
			var txt=$(this).val();
			if(txt!='')
				{
						$('#res').html('');
				$.ajax({
				url:"userajax.php",
					method:"post",
					data:{search:txt},
					dataType:"text",
					success:function(data)
					{
					$('#res').html(data);
				}
					
				});
					
				}
			else{
				$('#res').html('');
			
			}
			});
	});
	</script>

<div class="container-fluid">
	<div class="row" style="margin-top: 120px;">
	<div class="col-sm-3"></div>
	<form action="users.php" method="post">
	<div class="col-sm-4">
		
			<input type="text" class="form-control" name="src" id="srch" placeholder=" search User id..."/>
			
				
			
	</div>
	</form>
</div>
<div id="res"></div>
</div>
<?php
	$r="select * from users";
	$co=mysqli_connect("127.0.0.1","root","","znews");
	if($co)
	{
		$a=mysqli_query($co,$r);
		while($b=mysqli_fetch_array($a))
		{
			$name=$b[0];
			$uid=$b[1];
			$pass=$b[2];
			$mail=$b[3];
			$mob=$b[4];
			$city=$b[5];
			?>
			<div class="table-responsive" style="margin-top: 70px;">
				<table class="table table-striped">
					<thead>
						<th>Name</th>
						<th>Userid</th>
						<th>
							E-mail
						</th>
						<th>Mobile</th>
						<th>City</th>
						
					</thead>
					<tr>
						<td><?php echo $name;  ?></td>
						<td><?php echo $uid;  ?></td>
						<td><?php echo $mail;  ?></td>
						<td><?php echo $mob;  ?></td>
						<td><?php echo $city;  ?></td>
						
					</tr>
				</table>
			</div>
"
			<?php
		}
	}
	
	
	?>
<!-- InstanceEndEditable -->



<footer id="footer">
  <div class="container">
      <div class="copyright">
      &copy; Copyright <strong>Trip-on</strong>. All Rights Reserved </div>
      <div class="credits">
      
        Best Design by <a href="https://rajatsrivastav.wordpress.com">Rajat Srivastav</a>
      </div>
  </div>
</footer>
</body>
<!-- InstanceEnd --></html>
