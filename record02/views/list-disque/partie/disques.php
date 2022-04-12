<div class="row mb-2 ">
    <?php if ($list_disc) : ?>
        <?php foreach ($list_disc as $key => $value) : ?>
            <div class="col-md-6">
                <div class=" g-0 border rounded overflow-hidden d-flex position-relative">
                    <div class="col-lg-6">
                        <img src="/record/<?= $upload_dir . '' . $value['disc_picture'] ?>" class="d-block mx-lg-auto img-fluid">
                    </div>
                    <div class="col-lg-6 p-2 lh-1  flex-column  position-static">
                        <p class="fs-4 text-capitalize"><?= $value['disc_title'] ?></p>
                        <div class="d-flex ">
                            <p class="fw-bolder text-start">Artiste : &nbsp</p>
                            <span> <?= $value['artist_name'] ?></span>
                        </div>
                        <div class="d-flex ">
                            <p class="fw-bolder">Label : &nbsp</p>
                            <span> <?= $value['disc_label'] ?></span>
                        </div>
                        <div class="d-flex ">
                            <p class="fw-bolder">Année : &nbsp</p>
                            <span> <?= $value['disc_year'] ?></span>
                        </div>
                        <div class="d-flex ">
                            <p class="fw-bolder">Genre : &nbsp</p>
                            <span> <?= $value['disc_genre'] ?></span>
                        </div>
                        <div class=" mt-4">
                            <a class="btn btn-primary btn-sm" href="disc_detail.php?id=<?= $value['disc_id'] ?>" class="stretched-link">Details</a>
                        </div>
                    </div>

                </div>
            </div>
        <?php endforeach; ?>
    <?php else : ?>
        <div class="alert alert-primary">
            <h3>Aucun disque enregistré</h3>
        </div>
    <?php endif; ?>

</div>