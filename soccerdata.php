<?php
$results = shell_exec('GET http://api.football-data.org/alpha/soccerseasons/354/teams');
$arrayCode = json_decode($results);
var_dump($arrayCode);
?>


