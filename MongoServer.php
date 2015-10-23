#!/usr/bin/php
<?php
require_once('path.inc');
require_once('get_host_info.inc');
require_once('rabbitMQLib.inc');


function getData()
{
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
	$returnArray = array();
	foreach ($cursor as $doc)
	{
  		var_dump($doc);
		array_push($returnArray, $doc);
	}
	return $returnArray;
}

function requestProcessor($request)
{
  echo "received request".PHP_EOL;
  var_dump($request);
  $logger = implode(" | ",$request);
  
  $logFile = "log.txt";
  $lf = fopen($logFile, 'a') or die("Can't open file.");
  fwrite($lf, "received request\n");
  fwrite($lf, $logger);
  fwrite($lf, "\n\n");
  fclose($lf);



  if(!isset($request['type']))
  {
    return "ERROR: unsupported message type";
  }
  switch ($request['type'])
  {
    case "getData":
        $information = getData();
	return $information;

  }
  //return array("returnCode" => '0', 'message'=>"Server received request and processed");
}

$server = new rabbitMQServer("RabbitMQ.ini","testServer");

$server->process_requests('requestProcessor');
exit();
?>

