<div class="row g-5 ">
    <div class="col-lg-12">


        <?php if (isset($_GET['msg'])) { ?>
            <div class="alert alert-info">
                <strong><?= html_entity_decode($_GET['msg'], ENT_QUOTES); ?></strong>
            </div>
        <?php } ?>


        <form class="needs-validation" method="post" action='http://localhost/record/backend/script_disc_modifer.php' novalidate enctype="multipart/form-data">
            <div class="row g-3">
                <div class="col-12">
                    <label for="title" class="form-label text-uppercase">Titre: *</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" value="<?= $one_disc['disc_title'] ?>" required>
                    <div class="invalid-feedback">
                        Valid title is required.
                    </div>
                </div>

                <div class="col-12">
                    <label for="artiste" class="form-label text-uppercase">Artiste: *</label>
                    <select class="form-select" id="artiste" name="artist" required>
                        <!-- ce fichier séparer contient une boucle qui génere les element options-->
                        <?php include('options.php') ?>
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid artiste.
                    </div>
                </div>

                <div class="col-12">
                    <label for="year" class="form-label text-uppercase">Année *</label>
                    <div class="input-group has-validation">
                        <input type="text" class="form-control" id="year" name="year" placeholder="Enter year" value="<?= $one_disc['disc_year'] ?>" required>
                        <div class="invalid-feedback">
                            Your year is required.
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <label for="gender" class="form-label text-uppercase">Genre *</label>
                    <div class="input-group has-validation">
                        <input type="text" class="form-control" id="genre" name="genre" value="<?= $one_disc['disc_genre'] ?>" placeholder="Enter gender(Rock, Pop, Prog...)" required>
                        <div class="invalid-feedback">
                            Please enter a gender
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <label for="label" class="form-label text-uppercase">Label: *</label>
                    <input type="text" class="form-control" id="label" name="label" value="<?= $one_disc['disc_label'] ?>" placeholder="Enter label(EMI, Warner, PolyGram, Univers sale...)" required>
                    <div class="invalid-feedback">
                        Please enter label.
                    </div>
                </div>

                <div class="col-12">
                    <label for="price" class="form-label text-uppercase">Prix: *</label>
                    <input type="number" class="form-control" id="price" name="price" value="<?= $one_disc['disc_price'] ?>" placeholder="" required>
                    <div class="invalid-feedback">
                        Please enter price.
                    </div>
                </div>

                <div class="col-12">
                    <label for="formfile" class="form-label text-uppercase">Picture*</label>
                    <input class="form-control" type="file" id="formfile" name="image">
                </div>
               <input type="hidden" name="idDisque" id='idDisque' value="<?= $one_disc['disc_id'] ?>">
                <div class="div form-inline">
                    <button class=" btn btn-primary btn-md m-2" type="submit" name="submit_btn">Modifier</button>
                    <a class=" btn btn-primary btn-md m-2" href="../../discs.php">Retour</a>
                </div>
        </form>
    </div>
</div>