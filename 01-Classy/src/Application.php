<?php
require_once SRC_DIR.'/AnnonceLoader.php';
require_once SRC_DIR.'/Response.php';
require_once SRC_DIR.'/UrlReader.php';

class Application
{
    public function run(): Response
    {
        $reader = new UrlReader();
        try {
            $id = $reader->parse();
            $loader = new AnnonceLoader();
            $annonce = $loader->load($id);
            $response = new Response('Cette page est fonctionnel');
        } catch (Exception $e) {
            $response = new Response('Cette page n\'existe pas', 404);
        }
        return $response;
    }
}