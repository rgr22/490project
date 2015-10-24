<?php

$m = new MongoClient("mongodb://robin:our490team@ds035348.mongolab.com:35348/490db");
$db = $m->selectDB('490db');
//new handler
$collection = new MongoCollection($db, 'test');

// search for user
$userQuery = array('users' => 'robin');

$cursor = $collection->find($userQuery);
foreach ($cursor as $doc) {
    var_dump($doc);
}



?>