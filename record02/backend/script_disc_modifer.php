<?php
include 'connectiondb.php';
include 'traitement.php';

if (isset($_GET['update'])) {
  $id = $_GET['update'];
  $sql = "SELECT * FROM disc WHERE id ='$id'";
  $request   = $conn->query($sql);
  $one =  $request->fetch_assoc();

  //   var_dump($one);
  //   exit;
}


if (isset($_POST['submit_btn'])) {
  $id = $_POST['idDisque'];
  $title  = ($_POST['title']);
  $label = ($_POST['label']);
  $price = ($_POST['price']);
  $year = ($_POST['year']);
  $artist_id = ($_POST['artist']);
  $genre = ($_POST['genre']);
  $image = traitementImage($_FILES, $upload_dir, $id);
  //    var_dump($image);
  //     exit;

  $sql     = "
        UPDATE disc 
        SET 
          disc_title='$title',
          disc_year='$year',
          disc_picture='$image',
          disc_label='$label',
          disc_genre='$genre',
          disc_price='$price',
          artist_id='$artist_id' 
          
        WHERE id='$id'";
  $request   = $conn->query($sql);
  header('location:../discs.php');
  die();
}
