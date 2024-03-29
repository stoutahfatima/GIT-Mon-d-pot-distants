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
          <div class="col-lg-12">
            <h1 class="mb-3">Ajouter un Vinyle</h1>

            	<!-- 
						-- Erreur Message
						-->
						<?php if(isset($_GET['msg'])){ ?>
							<div class="alert alert-info">
								<strong><?=  html_entity_decode($_GET['msg'], ENT_QUOTES) ; ?></strong>
							</div> 
            <?php } ?>
						<!-- 
						-- fin Erreur Message
						-->
						
					<!-- 
					-- Debut formulaire
					-->

            <form class="needs-validation" method="post" action='http://localhost/record/script_disc_ajout.php' novalidate enctype="multipart/form-data">
              <div class="row g-3">
                <div class="col-12">
                  <label for="title" class="form-label text-uppercase">Titre: *</label>
                  <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" value="" required>
                  <div class="invalid-feedback">
                    Valid title is required.
                  </div>
                </div>

                 <div class="col-12">
                    <label for="artiste" class="form-label text-uppercase">Artiste: *</label>
                    <select class="form-select" id="artiste" name="artist" required>
                        <option value="">Choisir un artiste...</option>
                          <option value="Johnny Hallyday">AC/DC</option>
                          <option value="Michel Sardou">Marillion</option>
                          <option value="Jacques Brel">Queen of the stone Age</option>
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
                    <input type="text" class="form-control" id="year" name="année" placeholder="Enter year" required>
                  <div class="invalid-feedback">
                      Your year is required.
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <label for="gender" class="form-label text-uppercase">Genre *</label>
                  <div class="input-group has-validation">
                    <input type="text" class="form-control" id="gender" name="gender" placeholder="Enter gender(Rock, Pop, Prog...)" required>
                    <div class="invalid-feedback">
                      Please enter a gender
                    </div>
                  </div>
                </div>

                <div class="col-12">
                  <label for="label" class="form-label text-uppercase">Label: *</label>
                  <input type="text" class="form-control" id="label" name="label" placeholder="Enter label(EMI, Warner, PolyGram, Univers sale...)" required>
                  <div class="invalid-feedback">
                    Please enter label.
                  </div>
                </div>

                <div class="col-12">
                  <label for="price" class="form-label text-uppercase">Prix: *</label>
                  <input type="number" class="form-control" id="price" name="price" placeholder="" required>
                  <div class="invalid-feedback">
                    Please enter price.
                  </div>
                </div>

                <div class="col-12">
                  <label for="formfile" class="form-label text-uppercase">Picture*</label>
                  <input class="form-control" type="file" id="formfile" name="image">
                </div>

              <div class="div form-inline">
                  <button class=" btn btn-primary btn-md m-2" type="submit" name="submit_btn">Ajouter</button>
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
