<?php
    include("includes/connect.php");

 $post_id = $_GET['post_id'];

$del = mysqli_query("delete from po where post_id= '$post_id'");

header("location:all_post.php");

?>