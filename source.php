#!/bin/sh
<?php

    $uri = 'http://api.football-data.org/alpha/soccerseasons/354/fixtures/?matchday=22';
    $reqPrefs['http']['method'] = 'GET';
    $reqPrefs['http']['header'] = 'X-Auth-Token: d93b571a15a143d7b85758dd83c31d86';
    $stream_context = stream_context_create($reqPrefs);
    $response = file_get_contents($uri, false, $stream_context);
    $fixtures = json_decode($response);

?>