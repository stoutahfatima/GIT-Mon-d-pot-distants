<?php
    include 'connectiondb.php'; 
    $upload_dir = 'uploads/';

    $result    =  $conn->query( "SELECT * FROM disc");
    $list_disc =   $result->fetch_all(MYSQLI_ASSOC);
