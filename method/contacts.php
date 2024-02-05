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

    public function show($id)
    {
        $query =  $this->db->query("SELECT * from contacts where id='$id'");
        return $query->fetch();
    }

    public function update($data,$pic)
    {
        $id = $data['id'];
        $firstname = $data['firstname'];
        $lastname = $data['lastname'];
        $email = $data['email'];
        $mobile = $data['mobile'];
        $address = $data['address'];
        $query = $this->db->query("UPDATE contacts SET firstname='$firstname',lastname='$lastname',email='$email',
                    mobile='$mobile',address='$address',pic='$pic' WHERE id='$id'");
    }

    public function delete($id)
    {
        $this->db->query("DELETE from contacts WHERE id='$id'");
    }

    public function last_contacts($creator)
    {
        $query = $this->db->query("SELECT * FROM contacts WHERE creator = '$creator' order by id desc limit 2");
        return $query->fetchAll();
    }

}
