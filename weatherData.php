<?php 

$connection = new MongoClient("mongodb://test:test@ds039504.mongolab.com:39504/thetop" );
$mongodb = $connection->selectDB('thetop');
$collection = new MongoCollection($mongodb,'NJ');
$collection->drop();

$results = shell_exec('GET http://api.wunderground.com/api/cfe632a32ad965c6/conditions/q/NJ/Andover.json');
$arrayCode =json_decode($results);
var_dump($arrayCode);
$connection = new MongoClient("mongodb://test:test@ds039504.mongolab.com:39504/thetop" );
$mongodb = $connection->selectDB('thetop');
$collection = new MongoCollection($mongodb,'NJ');
var_dump($connection);
var_dump($collection);
$collection->insert(array($arrayCode));

$results = shell_exec('GET http://api.wunderground.com/api/cfe632a32ad965c6/conditions/q/NJ/Atlantic_City.json');
$arrayCode =json_decode($results);
var_dump($arrayCode);
$connection = new MongoClient("mongodb://test:test@ds039504.mongolab.com:39504/thetop" );
$mongodb = $connection->selectDB('thetop');
$collection = new MongoCollection($mongodb,'NJ');
var_dump($connection);
var_dump($collection);
$collection->insert(array($arrayCode));

$results = shell_exec('GET http://api.wunderground.com/api/cfe632a32ad965c6/conditions/q/NJ/Belmar.json');
$arrayCode =json_decode($results);
var_dump($arrayCode);
$connection = new MongoClient("mongodb://test:test@ds039504.mongolab.com:39504/thetop" );
$mongodb = $connection->selectDB('thetop');
$collection = new MongoCollection($mongodb,'NJ');
var_dump($connection);
var_dump($collection);
$collection->insert(array($arrayCode));

$results = shell_exec('GET http://api.wunderground.com/api/cfe632a32ad965c6/conditions/q/NJ/Caldwell.json');
$arrayCode =json_decode($results);
var_dump($arrayCode);
$connection = new MongoClient("mongodb://test:test@ds039504.mongolab.com:39504/thetop" );
$mongodb = $connection->selectDB('thetop');
$collection = new MongoCollection($mongodb,'NJ');
var_dump($connection);
var_dump($collection);
$collection->insert(array($arrayCode));

$results = shell_exec('GET http://api.wunderground.com/api/cfe632a32ad965c6/conditions/q/NJ/Morristown.json');
$arrayCode =json_decode($results);
var_dump($arrayCode);
$connection = new MongoClient("mongodb://test:test@ds039504.mongolab.com:39504/thetop" );
$mongodb = $connection->selectDB('thetop');
$collection = new MongoCollection($mongodb,'NJ');
var_dump($connection);
var_dump($collection);
$collection->insert(array($arrayCode));

$results = shell_exec('GET http://api.wunderground.com/api/cfe632a32ad965c6/conditions/q/NJ/Newark.json');
$arrayCode =json_decode($results);
var_dump($arrayCode);
$connection = new MongoClient("mongodb://test:test@ds039504.mongolab.com:39504/thetop" );
$mongodb = $connection->selectDB('thetop');
$collection = new MongoCollection($mongodb,'NJ');
var_dump($connection);
var_dump($collection);
$collection->insert(array($arrayCode));

$results = shell_exec('GET http://api.wunderground.com/api/cfe632a32ad965c6/conditions/q/NJ/Somerville.json');
$arrayCode =json_decode($results);
var_dump($arrayCode);
$connection = new MongoClient("mongodb://test:test@ds039504.mongolab.com:39504/thetop" );
$mongodb = $connection->selectDB('thetop');
$collection = new MongoCollection($mongodb,'NJ');
var_dump($connection);
var_dump($collection);
$collection->insert(array($arrayCode));

$results = shell_exec('GET http://api.wunderground.com/api/cfe632a32ad965c6/conditions/q/NJ/Teterboro.json');
$arrayCode =json_decode($results);
var_dump($arrayCode);
$connection = new MongoClient("mongodb://test:test@ds039504.mongolab.com:39504/thetop" );
$mongodb = $connection->selectDB('thetop');
$collection = new MongoCollection($mongodb,'NJ');
var_dump($connection);
var_dump($collection);
$collection->insert(array($arrayCode));

$results = shell_exec('GET http://api.wunderground.com/api/cfe632a32ad965c6/conditions/q/NJ/Trenton.json');
$arrayCode =json_decode($results);
var_dump($arrayCode);
$connection = new MongoClient("mongodb://test:test@ds039504.mongolab.com:39504/thetop" );
$mongodb = $connection->selectDB('thetop');
$collection = new MongoCollection($mongodb,'NJ');
var_dump($connection);
var_dump($collection);
$collection->insert(array($arrayCode));

$results = shell_exec('GET http://api.wunderground.com/api/cfe632a32ad965c6/conditions/q/NJ/Wildwood.json');
$arrayCode =json_decode($results);
var_dump($arrayCode);
$connection = new MongoClient("mongodb://test:test@ds039504.mongolab.com:39504/thetop" );
$mongodb = $connection->selectDB('thetop');
$collection = new MongoCollection($mongodb,'NJ');
var_dump($connection);
var_dump($collection);
$collection->insert(array($arrayCode));





/*
{
  var_dump($doc);
}
*/

?>

