<?php
//only retrieves data and displays it the screen
$results = shell_exec('GET http://api.football-data.org/alpha/soccerseasons/354');
$arrayCode = json_decode($results);
var_dump($arrayCode);
?>
