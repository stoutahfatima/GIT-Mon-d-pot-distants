<?php

include 'connectiondb.php';
include 'traitement.php';

$url = explode("?", $_SERVER['HTTP_REFERER']);

if (isset($_POST['submit_btn']) and isset($_POST['title'])) {
	$title  = addslashes(htmlentities($_POST['title'], ENT_QUOTES));
	$label = ($_POST['label']);
	$price = ($_POST['price']);
	$year = ($_POST['year']);
	$genre = ($_POST['genre']);
	$artist_id = ($_POST['artist']);
	$upload_dir = '/uploads/';

	if (!is_numeric($title)) {

		$result    =   $conn->query("SELECT * FROM disc ORDER BY disc_id desc limit 0,1");
		$list_disc =   $result->fetch_all(MYSQLI_ASSOC);
		$id = (is_array($list_disc) and count($list_disc) > 0) ? $list_disc[0]['disc_id'] + 1 : 1;
		$image = traitementImage($_FILES, $upload_dir, $id);

		$sql     = "INSERT INTO disc ( disc_title, disc_year, disc_picture, disc_label, disc_genre, disc_price, artist_id)  VALUE('$title','$year', '$image', '$label', '$genre', '$price', '$artist_id')";
		$request = mysqli_query($conn, $sql);


		if (!$request) {
			redirect($url[0] . '?msg=' . urlencode('Failure to add disc.'));
		}
		header('location:../discs.php');
		exit;
	}
	redirect($url[0] . '?msg=' . urlencode('Please insert the title, the value most be a string value.'));
}
