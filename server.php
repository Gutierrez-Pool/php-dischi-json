<?php

$dischiList = file_get_contents("./dischi.json");
$dischi_json = json_decode($dischiList);


header("Content-Type: application/json");
echo json_encode($dischi_json);
?>