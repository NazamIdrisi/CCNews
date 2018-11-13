<?php
        
include("includes/connect.php");

        if(isset($_POST["login"])){
            
            $username = $_POST["username"];
            $password = $_POST["pass"];
            $role=$_POST["role"];
            
            
            $select = "select * from admin where username=='$username' && pass=='$password' && role=='$role' ";
            
            $query=mysqli_query($con,$select);
            
            if($query){
             header("Location:admin/index.php");   
            }
            else{
                echo "<script>alert('invalid id or password')</script>";
                header("Location:index.php");  
            }
            
            //if($username=='' && $password=='123' OR $username=='admin' && $password=='123'){
               // header("Location:admin/index.php");
                
           // }
           // else{
           //     echo "<script>alert('invalid id or password')</script>";
          //  }
        }
    
    ?>   