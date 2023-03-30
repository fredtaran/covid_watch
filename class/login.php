<?php

class Login{

    private $conn;
    private $table_name = "tbl_user";
    public $uname;

    public function __construct($db){
        $this->conn = $db;
    }

    public function parseform(){
        
        //check if username is present
        $sql = "SELECT * FROM " . $this->table_name . " WHERE username = '" . $this->uname."' LIMIT 1";
        $result = $this->conn->query($sql);
        $this->conn->close();
        return $result;
        exit();
    }

}

?>