<?php
    include 'list.php'; 
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

  </head>
  <body >
    <main class="mt-2 ">

      <div class="container-fluid col-xxl-8 px-4 py-5">
        <div class="p-3 d-flex justify-content-between">
          <h2 >Liste des disques ( <?= count($list_disc) ?> )</h2>
          <a href="disc_new.php" class="btn btn-primary">Ajouter</a>
        </div>
        <div class="row mb-2 ">
           <?php
	          if($list_disc){
              foreach ($list_disc as $key => $value) {
                 
          ?> 
          <div class="col-md-6">
            <div class=" g-0 border rounded overflow-hidden d-flex position-relative">
              <div class="col-lg-6">
                <img src="<?= $upload_dir.''.$value['picture'] ?>" class="d-block mx-lg-auto img-fluid">
              </div>
              <div class="col-lg-6 p-2 lh-1  flex-column  position-static">
                  <p class="fs-4 text-capitalize"><?= $value['title'] ?></p>
                <div class="d-flex ">
                  <p class="fw-bolder text-start">Artiste : &nbsp</p>
                  <span > <?= $value['artist'] ?></span>
                </div>
                <div class="d-flex ">
                  <p class="fw-bolder">Label : &nbsp</p>
                  <span > <?= $value['label'] ?></span>
                </div>
                <div class="d-flex ">
                  <p class="fw-bolder">Année : &nbsp</p>
                  <span > <?= $value['année'] ?></span>
                </div>
                <div class="d-flex ">
                  <p class="fw-bolder">Genre : &nbsp</p>
                  <span > <?= $value['gender'] ?></span>
                </div>
                <div class=" mt-4">
                  <a class="btn btn-primary btn-sm" href="disc_detail.php?id=<?= $value['id'] ?>" class="stretched-link">Details</a>
                </div>
              </div>

            </div>
          </div>
          <?php
              } 
            }else {
          ?> 
            <div class="alert alert-primary">
              <h3>Aucun disque enregistré</h3>
            </div>
            <?php
              } 
          ?> 
        </div>
      </div>
    </main>
    <script src="dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>