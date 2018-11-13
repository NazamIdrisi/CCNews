<?php

    include("includes/connect.php");
    
    if(!empty($_POST['subs'])){
        
        
        $fullname = $_POST["fullname"];
        
        $email = $_POST["email"];
        
       
        
        $insert = "insert into subscribe(name,email) values('$fullname','$email')";
        
        $query = mysqli_query($con,$insert);
        
        
        if(!$query){
            
            echo "your data in not inserted....";
        }
        
        
    }

?>