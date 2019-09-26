<?php 

include "sql_config.php";

$id = $_GET['id'];


/* $q = 'DELETE FROM `member_data` WHERE id = $id'; */

$query="DELETE FROM `member_data`  WHERE id=$id";
mysqli_query($conn, $query);


 header('location: running_member.php' );


?>