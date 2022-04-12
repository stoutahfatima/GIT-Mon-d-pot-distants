<?php
  include 'one.php'; 
  include 'script_disc_delete.php'; 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Record</title>    

    <!-- Bootstrap core CSS -->
<link href="dist/css/bootstrap.min.css" rel="stylesheet">

    
    <!-- Custom styles for this template -->
    <link href="heroes.css" rel="stylesheet">
  </head>
  <body>
    <main class="mt-2">
      <div class="container">
        <div class="p-3 d-flex justify-content-between">
          <h3 >Details</h3>
          <a href="disc_new.php" class="btn btn-primary">Ajouter</a>
        </div>
        <div class="row flex-lg-row-reverse align-items-center ">
          <div class=" col-lg-6 ">
            <div class="m-3">
              <span class="fw-bold">Artist  </span>
              <input class="form-control" type="text" value="<?= $one_disc['artist'] ?>" readonly>
            </div>
            <div class="m-3">
              <span class="fw-bold">Gender  </span>
              <input class="form-control" type="text" value="<?= $one_disc['gender'] ?>" readonly>
            </div>
            <div class="m-3">
              <span class="fw-bold">Price  </span>
              <input class="form-control" type="text" value="<?= $one_disc['price'] ?>" readonly>
            </div>
          </div>
          <div class="col-lg-6 ">
            <div class="m-3">
              <span class="fw-bold">Titre  </span>
              <input class="form-control" type="text" value="<?= $one_disc['title'] ?>" readonly>
            </div>
            <div class="m-3">
              <span class="fw-bold">Année  </span>
              <input class="form-control" type="text" value="<?= $one_disc['année'] ?>" readonly>
            </div>
            <div class="m-3">
              <span class="fw-bold">Label  </span>
              <input class="form-control" type="text" value="<?= $one_disc['label'] ?>" readonly>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="col-lg-6 ">
            <span class="fw-bold">Picture  </span>
            <img src="<?= $upload_dir.''.$one_disc['picture'] ?>" class="d-block mx-lg-auto img-fluid" alt="img"  loading="lazy">
          </div>
          <div class="d-grid gap-3 d-md-flex justify-content-start pt-3">
            <a href="disc_form.php?update=<?= $one_disc['id'] ?>" class="btn btn-primary btn-lg px-4 me-md-2">Modifier</a>
            <a href="disc_detail.php?delete=<?= $one_disc['id'] ?>" onclick="return confirm('Etes-vous sur de vouloir supprimer le Vinyle?')" class="btn btn-primary btn-lg px-4">Supprimer</a>
            <a href="discs.php" class="btn btn-primary btn-lg px-4">Retour</a>
          </div>
        </div>
      </div> 

    </main>
    <script src="dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
