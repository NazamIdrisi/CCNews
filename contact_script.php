<?php

    include("includes/connect.php");
    
    if(!empty($_POST['send'])){
        
        
        $name = $_POST["fullname"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $descc = $_POST["msg"];
        
       
        
        
        
        
        
            
        
        $insert = "insert into inbox(fullname,email,phone,msg) values('$name','$email','$phone','$descc')";
        
        $query = mysqli_query($con,$insert);
        
        
        
        if(!$query){
            
            echo "your data in not inserted....";
        }
        else{
            header("Location:contact.php");
           
                                    echo "<label class='col-md-2 control-label' style='color:green;'>Inserted Succesfull</label>";
                              
        }
        
    }

?>