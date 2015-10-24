#!/usr/bin/php
<?php
require_once('path.inc');
require_once('get_host_info.inc');
require_once('rabbitMQLib.inc');


function getData()
{
	


	//$results = shell_exec('GET http://api.football-data.org/alpha/soccerseasons/354');
	//$arrayCode = json_decode($results);
	//var_dump($arrayCode);
	$connection = new MongoClient( "mongodb://test:test@ds039504.mongolab.com:39504/thetop" );
	$mongodb = $connection->selectDB('thetop');
	$collection = new MongoCollection($mongodb,'test');
	var_dump($connection);
	var_dump($collection);
	$collection->insert(array($arrayCode));

	{
 	 var_dump($doc);
	}
	return $collection;
}

function requestProcessor($request)
{
  echo "received request".PHP_EOL;
  var_dump($request);
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

