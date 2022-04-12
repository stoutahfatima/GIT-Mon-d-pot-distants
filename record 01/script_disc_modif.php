<?php 
  include 'connectiondb.php'; 
  include 'traitement.php'; 

  if(isset($_GET['update'])){
      $id = $_GET['update'];
      $sql = "SELECT * FROM disc WHERE id ='$id'";
      $request   = $conn->query($sql);
      $one =  $request->fetch_assoc();

    //   var_dump($one);
    //   exit;
  }


 if (isset($_POST['submit_btn']) ) {
      $title  = ($_POST['title']);
      $label = ($_POST['label']);
      $price = ($_POST['price']);
      $année = ($_POST['année']);
      $artist = ($_POST['artist']);
      $gender = ($_POST['gender']);
      $image = traitementImage($_FILES, $upload_dir, $id);
        //    var_dump($image);
        //     exit;

      $sql     = "UPDATE disc SET title='$title', label='$label', price='$price', année='$année', artist='$artist', gender='$gender', picture='$image' WHERE id='$id' ";
      $request   = $conn->query($sql);
      header('location:discs.php');
  
  }

