<?php
require_once  "connectiondb.php";
$upload_dir = 'uploads/';
$result = $conn->query("
SELECT disc.*, artist.*
FROM disc
INNER JOIN artist ON disc.artist_id=artist.artist_id;
");
$list_disc =   $result->fetch_all(MYSQLI_ASSOC);
