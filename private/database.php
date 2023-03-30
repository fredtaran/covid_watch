<?php

class Database {
    protected $connection;

    function __constructor() {
        $this->connection = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

        if($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    function getConnection() {
        return $this->connection;
    }
}

?>