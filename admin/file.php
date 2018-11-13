<html>
<head>
    
    </head>
    
    <body>
        
  <?php

    include("includes/connect.php");
    
    if(isset($_POST['upload'])){
        
        
       
        
        $img_box = $_FILES["img_box"]['name'];
        
        if ($_FILES["img_box"]["size"] > 20971520) {
    echo "Sorry, your file is too large.";
   
}
        else{
            
            $insert = "insert into img(img) values('$img_box')";
        
        $query = mysqli_query($con,$insert);
        move_uploaded_file($_FILES['img_box']['tmp_name'],"images/".$img_box);
        
        }
        
            
        
        
    }
        

?>


 <form action="file.php" method="post" enctype="multipart/form-data">
<label>Upload An Image</label>
<input type="file" name="img_box" />
<input type="submit" name="upload"/>
</form>

    </body>
</html>