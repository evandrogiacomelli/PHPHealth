<?php

namespace infra\database;

use PDO;

class DB
{
    public static function connect()
    {
        $host = 'db';
        $user = 'postgres';
        $password = 'postgres';
        $database = 'api';

        return new PDO("pgsql:host=$host;dbname=$database", $user, $password);
    }
}
