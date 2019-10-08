<?php

class UrlReader
{
    public function parse(): intl_error_name
    {
        $urlParts = explode('/',trim($_SERVER['REQUEST_URI'],'/'));
        //$annonce = substr($url,-5,5);
        $this->match($urlParts);
        if ($this->match($urlParts)) {
            return intval($urlParts[1]);
        }

        throw new Exception("L'url n'est pas reconnue");
    }

    private function match(array $parts): bool
    {
        return count($parts) === 2 && $parts[0] === 'annonce' && is_numeric($parts[1]);
    }
}