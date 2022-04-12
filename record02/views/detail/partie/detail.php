<div class="row flex-lg-row-reverse align-items-center ">
    <div class=" col-lg-6 ">
        <div class="m-3">
            <span class="fw-bold">Artist </span>
            <input class="form-control" type="text" value="<?= $one_disc['artist_name'] ?>" readonly>
        </div>
        <div class="m-3">
            <span class="fw-bold">Gender </span>
            <input class="form-control" type="text" value="<?= $one_disc['disc_genre'] ?>" readonly>
        </div>
        <div class="m-3">
            <span class="fw-bold">Price </span>
            <input class="form-control" type="text" value="<?= $one_disc['disc_price'] ?>" readonly>
        </div>
    </div>
    <div class="col-lg-6 ">
        <div class="m-3">
            <span class="fw-bold">Titre </span>
            <input class="form-control" type="text" value="<?= $one_disc['disc_title'] ?>" readonly>
        </div>
        <div class="m-3">
            <span class="fw-bold">Année </span>
            <input class="form-control" type="text" value="<?= $one_disc['disc_year'] ?>" readonly>
        </div>
        <div class="m-3">
            <span class="fw-bold">Label </span>
            <input class="form-control" type="text" value="<?= $one_disc['disc_label'] ?>" readonly>
        </div>
    </div>
</div>
<div class="container">
    <div class="col-lg-6 ">
        <span class="fw-bold">Picture </span>
        <img src="<?= $upload_dir . '' . $one_disc['disc_picture'] ?>" class="d-block mx-lg-auto img-fluid" alt="img" loading="lazy">
    </div>
    <div class="d-grid gap-3 d-md-flex justify-content-start pt-3">
        <a href="disc_form.php?update=<?= $one_disc['disc_id'] ?>" class="btn btn-primary btn-lg px-4 me-md-2">Modifier</a>
        <a href="disc_detail.php?delete=<?= $one_disc['disc_id'] ?>" onclick="return confirm('Etes-vous sur de vouloir supprimer le Vinyle?')" class="btn btn-primary btn-lg px-4">Supprimer</a>
        <a href="discs.php" class="btn btn-primary btn-lg px-4">Retour</a>
    </div>
</div>