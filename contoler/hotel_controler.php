<?php
require_once 'model/hotel.php';
function listehAction(){
    $hotel = liste_hotel();
    require_once 'views/listeH.php';
}







?>
