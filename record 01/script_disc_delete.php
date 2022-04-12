<?php 
    include 'traitement.php'; 

    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $sql = "SELECT * FROM disc WHERE id = ".$id;

        $result   = $conn->query($sql);
        $one_disc =  $result->fetch_assoc();

        $image = traitementImage($_FILES, $upload_dir, $id);
        unlink($imgTmp ,$path.$image);


        $sql = "DELETE FROM disc WHERE id=".$id;
        
        $result   = $conn->query($sql);
        header('location:discs.php');
  }

