<?php
Des// this script fetches data, creates a collection named teams and inserts the data fetched into it
$results = shell_exec('GET http://api.football-data.org/alpha/soccerseasons/354/teams');
$arrayCode = json_decode($results);
var_dump($arrayCode);
$connection = new MongoClient( "mongodb://test:test@ds039504.mongolab.com:39504/thetop" );
$mongodb = $connection->selectDB('thetop');
$collection = new MongoCollection($mongodb,'teams');
var_dump($connection);
var_dump($collection);
$collection->insert(array($arrayCode));

{
  var_dump($doc);
}



?>
