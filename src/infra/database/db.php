<?php

namespace infra\database;

use PDO;

class db
{
    public static function connect()
    {
        $host = 'localhost';
        $port = '5432';
        $user = 'postgres';
        $password = 'postgres';
        $database = 'api';

        return new PDO("pgsql:host=$host;port=$port;dbname=$database", $user, $password);
    }
}
