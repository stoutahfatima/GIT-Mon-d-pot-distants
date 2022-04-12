<?php 

include 'connectiondb.php'; 
include 'traitement.php'; 

$url = explode("?", $_SERVER['HTTP_REFERER']);

if (isset($_POST['submit_btn']) AND isset($_POST['title']) ) {
    $title  = addslashes(htmlentities($_POST['title'], ENT_QUOTES));
	$label = ($_POST['label']);
	$price = ($_POST['price']);
	$année = ($_POST['année']);
	$artist = ($_POST['artist']);
	$gender = ($_POST['gender']);

	if(is_numeric($title)) {
		redirect($url[0].'?msg='.urlencode('Please insert the title, the value most be a string value.'));
	}else{
		$result    =   $conn->query( "SELECT * FROM disc ORDER BY id desc limit 0,1");
    	$list_disc =   $result->fetch_all(MYSQLI_ASSOC);
		
		if(is_array($list_disc ) and count($list_disc) > 0){
			$id = $list_disc[0]['id'] + 1;
		}else{
			$id = 1;
		}
		
		$image = traitementImage($_FILES, $upload_dir, $id);
		// var_dump($id);
		// exit;
		$sql     = "INSERT INTO disc (title, label, price, année, artist, picture, gender)  VALUE('$title', '$label', '$price', '$année', '$artist', '$image', '$gender')";
		$request = mysqli_query($conn, $sql);

		if($request){ 
			// redirect( $url[0].'?msg='.urlencode('New disc added successfully'));
			header('location:discs.php');
		}else{
			redirect($url[0].'?msg='.urlencode('Failure to add disc.'));
		}
	}
}