<?php

class DatabaseConnexion
{
    public function connect()
    {
        new PDO(,'dawan','dawan');
    }
}