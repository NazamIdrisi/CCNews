<?php
    include("includes/connect.php");

 $ids = $_GET['ids'];

$del = mysqli_query("delete from ad where id= '$ids'");

header("location:all_add.php");

?>