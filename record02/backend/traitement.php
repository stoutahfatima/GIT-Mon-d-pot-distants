<?php
$upload_dir = 'uploads/';
function traitementImage($file, $path, $filename = null)
{

	$requestUri=explode('/', $_SERVER['REQUEST_URI']);

	$baseUrl=$requestUri[1];
	$status   = false;
	$imgName  = $file['image']['name'];
	$imgTmp   = $file['image']['tmp_name'];
	$imgSize  = $file['image']['size'];
	$imgType  = $file['image']['type'];
	$imgError = $file['image']['error'];
	$allowExt = array('image/jpeg', 'image/jpg', 'image/png', 'image/gif');
	$ext      = explode('/', $imgType);
	$image    = 'DISC_' . $filename . '.' . end($ext);

	// var_dump($image);
	// exit;

	if ($imgError  == 0) {
		if ($imgSize < 5000000) {
			if (in_array($imgType, $allowExt, true)) {
				$status = move_uploaded_file($imgTmp,'..'.$path . $image);
				
			}
		}
	}


	return ($status == false) ? false : $image;
}
