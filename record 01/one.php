<?php
    include 'connectiondb.php'; 
    $upload_dir = 'uploads/';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM disc WHERE id = '$id' ";
        
        $result   = $conn->query($sql);
        $one_disc =  $result->fetch_assoc();
    }
