<?php 

session_start();
                                         $ct=$_SESSION['fd'];

                                         $edit = mysqli_query($con,"delete from cat where cat_id = $ct");
                                        
                                
header("Location:all_cat.php");
                                        ?>