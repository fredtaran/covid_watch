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


    public function __construct($db) {
        $this->conn = $db;
    }

    // Save patient log
    public function save_patient_log() {
        $stmt = $this->conn->prepare("INSERT INTO " . $this->table_name . " (p_name, p_age, p_num, p_temp, diagnose, encounter, vacinated, nationality, p_gender) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sisdiiisi", $this->p_name, $this->p_age, $this->p_num, $this->p_temp, $this->diagnose, $this->encounter, $this->vacinated, $this->nationality, $this->p_gender);

        // Sanitize input
        $this->p_name       = htmlspecialchars(strip_tags($this->p_name));
        $this->p_age        = htmlspecialchars(strip_tags($this->p_age));
        $this->p_num        = htmlspecialchars(strip_tags($this->p_num));
        $this->p_temp       = htmlspecialchars(strip_tags($this->p_temp));
        $this->diagnose     = htmlspecialchars(strip_tags($this->diagnose));
        $this->encounter    = htmlspecialchars(strip_tags($this->encounter));
        $this->vacinated    = htmlspecialchars(strip_tags($this->vacinated));
        $this->nationality  = htmlspecialchars(strip_tags($this->nationality));
        $this->p_gender     = htmlspecialchars(strip_tags($this->p_gender));

        if($stmt->execute()) {
            $stmt->close();
            return true;
        }

        echo ("Error: " . $this->conn->error());
        return false;
    }
    // Delete patient log

    // Patient log count

    // Get all patient

    // Get all data for dashboard
    public function getdashboarddata() {
        // mysqli_next_result($this->conn);;
        $sql = "SELECT * FROM " . $this->table_name;

        $result = $this->conn->query($sql);
        $this->conn->close();
        return $result;
    }
}