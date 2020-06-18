<?php

//header("Content-Type: application/json");

$action = $_GET['action'];

if($action == 'getPlayers') {
    echo getPlayers();
}


function getPlayers() {

    $arrayName = array('1' => "Roger Federer", "2" => "Rafael Nadal", "3" => "Pit Sampras");

    return json_encode($arrayName);

}

 ?>