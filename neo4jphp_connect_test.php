<?php
    require('vendor/autoload.php');

    $client = new Everyman\Neo4j\Client('localhost', 7474);
    $client->getTransport()
      ->setAuth('neo4j', 'neo4j');
    print_r($client->getServerInfo());
