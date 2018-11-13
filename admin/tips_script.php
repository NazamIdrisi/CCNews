<?php

    include("includes/connect.php");
    
    if(!empty($_POST['publish'])){
        
        
        $title_box = $_POST["title_box"];
        
        $msg_box = $_POST["msg_box"];
        
        $cat_box = $_POST["cat_box"];
        
        $tag_box = $_POST["tag_box"];
        
        $img_box = $_FILES["img_box"]['name'];
        
        
        
            
        
        $insert = "insert into tips(cat_title,title_box,msg_box,tag_box,img_box,date,time) values('$cat_box','$title_box','$msg_box','$tag_box','$img_box',NOW(),CURTIME())";
        
        $query = mysqli_query($con,$insert);
        move_uploaded_file($_FILES['img_box']['tmp_name'],"tips_images/".$img_box);
        
        
        if(!$query){
            
            echo "your data in not inserted....";
        }
        else{
            header("Location:tips.php");
        }
        
    }

?>