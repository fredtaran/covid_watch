<?php


class Patient {

    // Database connection
    private $conn;
    private $table_name = "patient_log";

    public $id;
    public $p_name;
    public $p_age;
    public $p_num;
    public $p_temp;
    public $diagnose;
    public $encounter;
    public $vacinated;
    public $nationality;
    public $p_gender;

    function __constructor($db) {
        $this->conn = $db;
    }

    // Add patient log

    // Delete patient log

    // Patient log count

    // Get all patient
}