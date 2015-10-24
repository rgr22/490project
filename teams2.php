<?php
try
{
    $connection = new Mongo("mongodb://test:test@ds039504.mongolab.com:39504/thetop");
    $database   = $connection->selectDB('thetop');
    $collection = $database->selectCollection('teams');

    var_dump($connection);
    var_dump($collection);
}
catch(MongoConnectionException $e)
{
    die("Failed to connect to database ".$e->getMessage());
}

$cursor = $collection->find();
echo "find results:\n";
foreach ($cursor as $doc)
{
  var_dump($doc);
}
?>
