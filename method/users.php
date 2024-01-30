<?php
#[AllowDynamicProperties]
class users{

    public function __construct()
    {
        global $db;
        $this->db=$db;
}

    public function login($email)
    {
        $query = $this->db->query("SELECT * FROM users WHERE email='$email'");
        if ($query->rowCount() > 0) {
            return $query->fetch();
        } else {
            return false; // User not found
        }

    }
}