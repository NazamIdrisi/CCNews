<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	
	include("includes/connect.php");
	$output='';
	$i="select * from cat where cat_title LIKE '%".$_POST['search']."%'";
	
		$rs=mysqli_query($con,$i);
		if(mysqli_num_rows($rs) > 0)
		{
			while($fr=mysqli_fetch_array($rs))
			{
				$id=$fr[0];
				$title=$fr[1];
				$img=$fr[2];
							$output .='
			<div class="table-responsive">
			<table class="table  table-striped" style="margin-top: 30px;">
  
    <thead>
      <tr>
       
       
        <th>Id</th>
        <th>Category Title</th>
        <th>Image</th>
              </tr>        
    </thead>
	  <tr>
	 
		  <td>'.  $id.'</td>
		  <td>'. $title .'</td>
		  <td>' . $img . '</td>
		  
	  </tr>
			 </table>
	</div>';
			
			
			}
			echo $output;
			}
		else{
			echo "Data Not Found";
		}
	
	
	?>
</body>
</html>