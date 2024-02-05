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

    public function signup($data)
    {
        $firstname = $data['firstname'];
        $lastname = $data['lastname'];
        $email = $data['email'];
        $mobile = $data['mobile'];
        $password = strtolower(sha1($data['password']));
        $address = $data['address'];
        try {
            $this->db->query("INSERT INTO users(firstname,lastname,email,mobile,password,address)
                           values ('$firstname','$lastname','$email','$mobile','$password','$address')");
            return true;
        }
        catch (PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }
}