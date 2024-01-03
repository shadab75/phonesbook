<?php
class Migration{
    public function __construct()
    {
        global $db;
        $this->db=$db;
    }
    public function create_db($dbname)
    {
        try {
        $this->db->query("CREATE DATABASE $dbname");
        return true;
        }
        catch (PDOException $e){
            echo $e->getMessage();
        }

    }
}