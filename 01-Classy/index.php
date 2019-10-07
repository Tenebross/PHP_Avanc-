<?php
include_once 'Response.php';
include_once 'UrlReader.php';
//include_once 'UrlRedirect.php';

$reader = new UrlReader();
try {
    $id = $reader->parse();
} catch (Exception $e) {
    $response = new Response();
    $response->send('Cette page n\'existe pas', 404);
    die;
}

$response = new Response();

$response->send('La page est fonctionnel');