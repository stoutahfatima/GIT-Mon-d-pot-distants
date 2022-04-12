<?php
include 'connectiondb.php';
include 'traitement.php';
ob_start();
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "SELECT * FROM disc WHERE disc_id = " . $id;

    $result   = $conn->query($sql);
    $one_disc =  $result->fetch_assoc();


    unlink('uploads/' . $one_disc['disc_picture']);


    $sql = "DELETE FROM disc WHERE disc_id=" . $id;

    $result   = $conn->query($sql);
 
    header("location: discs.php");  exit;

}
ob_end_flush();
?>