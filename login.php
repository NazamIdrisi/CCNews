<?php
        
    session_start();
        
        $con = mysqli_connect("localhost","root","","znews");
    
        if(!$con){
            echo "<script>alert('connection is not establish')</script>";
        }
    
        if(!empty($_POST["login"])){
            
            $username = $_POST["username"];
            
            $pass = $_POST["pass"];
            $role = $_POST["role"];
            
            $query ="select * from admin where username = '$username' and pass = '$pass'";
              $rs=mysqli_query($con,$query);
            $fr=mysqli_fetch_row($rs);
           
            $username=$fr['username'];
            $pass=$fr['pass'];
            $role=$fr['role'];
                      
            if($username==$username && $pass==$pass && $role==$role )
            {
               $_SESSION['ID']=$unm;
                $_SESSION['username']=$username;
                $_SESSION['pass']=$pass;
                $_SESSION['role']=$role;
                
                
                                
                
                header("Location:admin/index.php");
                
                
            }
            else{
                
                echo "<script>alert('Invalid id and password')</script>";
                header("Location:index.php");
            }
            
            
        }
    
    ?>