<?php

    include("includes/connect.php");
    
    if(!empty($_POST['publish'])){
        
        
        
        $img_box = $_FILES["img_box"]['name'];
        
        
         if ($_FILES["img_box"]["size"] > 20 * 1024 * 1024) {
    echo "Sorry, your file is too large.";
   
}
        else{
            
            
        $insert = "insert into ad(ad_img) values('$img_box')";
        
        $query = mysqli_query($con,$insert);
        move_uploaded_file($_FILES['img_box']['tmp_name'],"advertisment/".$img_box);
        
            echo "your data in not inserted....";
            
            header("Location:advertise_post.php");
        }
            
        
        
        
        
        
        
    }

?>