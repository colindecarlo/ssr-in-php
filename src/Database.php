<?php

namespace SSR;

use PDO;

class Database
{
    private $connection;

    private function connection()
    {
        if ($this->connection == null) {
            $this->connection = new PDO('mysql:host=localhost;dbname=ssr', 'root');
        }

        return $this->connection;
    }

    public function users()
    {
        return $this->connection()->query('SELECT * FROM users');
    }
}