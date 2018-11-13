<?php

    include("includes/connect.php");
    
    if(!empty($_POST['publish'])){
        
        
        $title_box = $_POST["cat_name"];
        
       
        
        $img_box = $_FILES["img_box"]['name'];
        
        
        
            
        
        $insert = "insert into cat(cat_title,img_box) values('$title_box','$img_box')";
        
        $query = mysqli_query($con,$insert);
        move_uploaded_file($_FILES['img_box']['tmp_name'],"../post_images/".$img_box);
        
        
        if(!$query){
            
            echo "your data in not inserted....";
        }
        else{
            header("Location:add_cat.php");
           
                                    echo "<label class='col-md-2 control-label' style='color:green;'>Inserted Succesfull</label>";
                              
        }
        
    }

?>