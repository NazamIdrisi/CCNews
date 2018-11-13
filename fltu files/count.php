<?php
                                                        
                                                    include("../connect.php");
                                                    
                                                    $select="select * from cat ";
                                                    
                                                    $query=mysqli_query($con,$select);
                                            
                                           
                                                        
                                                
                                           
                                                    while($row=mysqli_fetch_array($query))
                                                      {
                                                        
                                                          $cat_id=$row[0];
                                                        $cat_title=$row[1];
                                                     
                                                        
                                                        for($cat_id = 0; $cat_id<= 0; $cat_id++) {
                                                        echo "The number is: $cat_id <br>";
                                                    
                                                        count($cat_title);
                                                          
                                                            echo "$cat_title";
                                                        
 
?>
                                                    
                                                
                    <h2><?php echo $cat_title; ?></h2>
                                              

                                                 <?php       
                                                       
                                                   
                                                    }
                                                    }
?>
                                                