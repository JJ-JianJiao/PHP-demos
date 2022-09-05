<?php

// require_once "app/Email.php";
// require_once "app/Person.php";

require_once "vendor/autoload.php";

use app\Email;
use app\Person;
// use app\Email as E;
// use app\Person as P;

$email = new Email();
$person = new Person();
// $email = new E();
// $person = new P();

$client = new \GuzzleHttp\Client();
$response = $client->request('GET', 'https://api.github.com/repos/guzzle/guzzle');

echo $response->getStatusCode(); // 200
echo $response->getHeaderLine('content-type'); // 'application/json; charset=utf8'
echo $response->getBody(); // '{"id": 1420053, "name": "guzzle", ...}'