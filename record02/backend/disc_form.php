<?php
  include 'script_disc_modif.php'; 
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
    <div class="container">
      <main class="mt-5 ">
        <div class="text-end p-3">
          <a href="discs.php" class="btn btn-primary">Retour Liste</a>
        </div>
        <div class="row g-5 ">
          <div class="col-md-7 col-lg-8">
            <h1 class="mb-3">Modifier un disque</h1>

            <form class="needs-validation" method="post" novalidate enctype="multipart/form-data">
              <div class="row g-3">
                <div class="col-12">
                  <label for="title" class="form-label text-uppercase">Titre: *</label>
                   <input type="text" class="form-control" id="title" name="title" value="<?= $one['title'] ?>" required>  
                  <div class="invalid-feedback">
                    Valid title is required.
                  </div>
                </div>

                 <div class="col-12">
                    <label for="artiste" class="form-label text-uppercase">Artiste: *</label>
                    <select class="form-select" id="artiste" name="artist" required>
                        <option value="">Choisir...</option>
                          <option value="Johnny Hallyday">Johnny Hallyday</option>
                          <option value="Michel Sardou">Michel Sardou</option>
                          <option value="Jacques Brel">Jacques Brel</option>
                          <option value="Claude François">Claude François</option>
                          <option value="Serge Gainsbourg">Serge Gainsbourg</option>
                          <option value="Florent Pagny">Florent Pagny</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid artiste.
                    </div>
                </div>

                <div class="col-12">
                  <label for="year" class="form-label text-uppercase">Année *</label>
                  <div class="input-group has-validation">
                    <input type="text" class="form-control" id="year" name="année"  value="<?= $one['année'] ?>" required>
                  <div class="invalid-feedback">
                      Your year is required.
                    </div>
                  </div>
                </div>

                <div class="col-12">
                  <label for="gender" class="form-label text-uppercase">Genre: *</label>
                  <input type="text" class="form-control" id="gender" name="gender" value="<?= $one['gender'] ?>" required>
                  <div class="invalid-feedback">
                    Please enter a gender
                  </div>
                </div>

                <div class="col-12">
                  <label for="label" class="form-label text-uppercase">Label: *</label>
                  <input type="text" class="form-control" id="label" name="label" value="<?= $one['label'] ?>" required>
                  <div class="invalid-feedback">
                    Please enter label.
                  </div>
                </div>

                <div class="col-12">
                  <label for="price" class="form-label text-uppercase">Prix: *</label>
                  <input type="number" class="form-control" id="price" name="price" value="<?= $one['price'] ?>" required>
                  <div class="invalid-feedback">
                    Please enter price.
                  </div>
                </div>

                <div class="col-12">
                  <label for="formfile" class="form-label text-uppercase">modifier une image: *</label>
                  <input class="form-control" type="file" id="formfile" name="image">
                  <div class="invalid-feedback">
                    inserer une image
                  </div>
                </div>

              <div class="div form-inline">
                  <button class=" btn btn-primary btn-md m-2" type="submit" name="submit_btn">Modifier</button>
                  <a class=" btn btn-primary btn-md m-2" href="discs.php">Retour</a>
              </div>
            </form>
          </div>
        </div>
      </main>
    </div>


    <script src="dist/js/bootstrap.bundle.min.js"></script>

      <script src="dist/js/form-validation.js"></script>
  </body>
</html>
