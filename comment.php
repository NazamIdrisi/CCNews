<?php

include("includes/connect.php");

    if(!empty($_POST['send'])){
        
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $cmt=$_POST['cmt'];
        
        $insert="insert into comment(firstname,lastname,email,phone,cmt) values('$firstname','$lastname','$email','$phone','$cmt')";
        
        $query=mysqli_query($con,$insert);
        
        if(!$query){
            echo "not inserted";
        }
    }

?>