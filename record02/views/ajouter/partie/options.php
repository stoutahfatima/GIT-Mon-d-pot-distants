<?php foreach ($artists as $artist) : ?>
    <option value="<?= $artist['artist_id'] ?>"><?= $artist['artist_name'] ?></option>
<?php endforeach; ?>