<?php
function getId()
{
    switch (isset($_GET['id']) or isset($_GET['update'])) {
        case isset($_GET['id']):
            $id = $_GET['id'];
            break;
        default:
            $id = $_GET['update'];
            break;
    }
    return $id;
}
function getOne($conn)
{
    $upload_dir = 'uploads/';
    //le meme sript utiliser pour detail et visualiser les champs avant de modifier
    if (isset($_GET['id']) or isset($_GET['update'])) {



        $id = getId();
        $sql = "
        SELECT disc.*, artist.* FROM disc
        INNER JOIN artist ON disc.artist_id=artist.artist_id
        WHERE disc_id = $id;
        ";

        $result   = $conn->query($sql);
        $one_disc =  $result->fetch_assoc();
   
        return $one_disc;
    }
}
//appelle fonction
$one_disc=getOne($conn);
