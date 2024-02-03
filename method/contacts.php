<?php
#[AllowDynamicProperties]
class contacts{
    public function __construct()
    {
        global $db;
        $this->db=$db;
}

    public function create($creator,$data,$pic)
    {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $this->db->query("insert into contacts(creator,firstname,lastname,email,mobile,address,pic)
                    values ($creator,'$firstname','$lastname','$email','$mobile','$address','$pic')");
   }

    public function list($creator)
    {
     $query = $this->db->query("SELECT * from contacts WHERE creator='$creator'");
     return $query->fetchAll();
   }

    public function edit($id)
    {

    }

}
