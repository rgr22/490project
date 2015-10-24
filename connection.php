
<?php
// the script creates a collection from scratch and inserts the data
$connection = new MongoClient( "mongodb://test:test@ds039504.mongolab.com:39504/thetop" );
$mongodb = $connection->selectDB('thetop');
$collection = new MongoCollection($mongodb,'users');
var_dump($connection);
var_dump($collection);
$collection->insert(array("username"=>"robin", "password"=>"test"));
echo "data inserted\n";
$cursor = $collection->find(array("username"=>"robin"));
echo "find results:\n";
foreach ($cursor as $doc)
{
  var_dump($doc);
}
?>



