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
        mysqli_next_result($this->conn);;
        $sql = "SELECT * FROM " . $this->table_name . " WHERE username = '" . $this->uname."' LIMIT 1";

        $result = mysqli_query($this->conn, $sql);
        mysqli_close($this->conn);
        return $result;
        exit();
    }

}

?>