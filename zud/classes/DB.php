<?php

class DB
{

    private $db_host = "localhost";
    private $db_user = "u0365237_admin";
    private $db_password = "y=Lr.Eu}vJN(";
    private $db_name = "u0365237_zayedfund";
    private $connectToDB;

    public $id;
    // for inserting records to the database.
    public $insert_keys = array();
    public $insert_values = array();
    // for updating records.
    public $update_records = array();

    public $last_query = null;
    public $affected_rows = 0;

    // Constructor of this class. Executed automatically when this class is instantiated
    public function __construct() {
        $this->connect(); // connecting to the database.
    }

    // Connecting to the database
    private function connect() {
        $this->connectToDB = mysqli_connect($this->db_host, $this->db_user, $this->db_password, $this->db_name);
        // Check connection
        if (!$this->connectToDB) {
            die("Ошибка соединения с базой данных!<br><br>" . mysqli_connect_error());
        }
        mysqli_set_charset($this->connectToDB, "utf8");
    }

    // closing the connection
    public function close() {
        if (!mysqli_close($this->connectToDB)) {
            die("Ошибка при закрытии соединения с базой данных.");
        }
    }

    // To escape all illegal characters for interacting with the database.
    public function escape($value) {
        if(function_exists("mysqli_real_escape_string")) {
            if (get_magic_quotes_gpc()) {
                $value = stripslashes($value);
            }
            $value = mysqli_real_escape_string($this->connectToDB, $value);
        } else {
            if(!get_magic_quotes_gpc()) {
                $value = addslashes($value);
            }
        }
        return $value;
    }

    public function query($sql) {
        $this->last_query = $sql;
        $result = mysqli_query($this->connectToDB, $sql);
        $this->displayQuery($result);
        return $result;
    }

    public function displayQuery($result) {
        if(!$result) {
            $print  = "Ошибка в функции query: ". mysqli_connect_error() . "<br>";
            $print .= "Последним sql query был: ".$this->last_query;
            die($print);
        } else {
            $this->affected_rows = mysqli_affected_rows($this->connectToDB);
        }
    }

    // To get all records from the table in db
    public function getAllRecords($sql) {
        $result = $this->query($sql);
        $output = array();
        while($row = mysqli_fetch_assoc($result)) {
            $output[] = $row;
        }
        mysqli_free_result($result);
        return $output;
    }

    // To get just one specific record from the table in db
    public function getOneRecord($sql) {
        $output = $this->getAllRecords($sql);
        return array_shift($output);
    }

    // the id of the lastly inserted record to the database
    public function lastID() {
        return mysqli_insert_id($this->connectToDB);
    }


    // Method for preparing the data to insert into the table using insertData()
    public function insert($array = null){
        if(!empty($array)){
            foreach($array as $key => $value){
                $this->insert_keys[] = $key;
                $this->insert_values[] = $this->escape($value);
            }
        }
    }

    // Inserts data into the table
    public function insertData($users = null){
        if(!empty($users) && !empty($this->insert_keys) && !empty($this->insert_values)){
            $sql  = "INSERT INTO {$users} (";
            $sql .= implode(", ", $this->insert_keys); // implode - joins the values from array using concatinator (,)
            $sql .= ") VALUES ('";
            $sql .= implode("', '", $this->insert_values);
            $sql .= "');";
            if($this->query($sql)){
                $this->id = $this->lastID();
                return true;
            }
            return false;
        }
    }

    // Method for preparing the info to update the table using updateTable()
    public function update($array = null){
        if(!empty($array)){
            foreach($array as $key => $value){
                $this->update_records[] = "{$key} = '".$this->escape($value)."'";
            }
        }
    }

    // Updates the table info
    public function updateTable($table = null, $id = null){
        if(!empty($table) && !empty($id) && !empty($this->update_records)){
            $sql  = "UPDATE {$table} SET ";
            $sql .= implode(", ", $this->update_records);
            $sql .= " WHERE id = '".$this->escape($id)."'";
            return $this->query($sql);
        }
    }



}