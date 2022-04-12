<?php
require_once  "connectiondb.php";
$result = $conn->query("
SELECT  artist.*
FROM artist
;
");
$artists =   $result->fetch_all(MYSQLI_ASSOC);
