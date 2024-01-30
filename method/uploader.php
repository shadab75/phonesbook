<?php
class uploader{
    public function __construct()
    {
        global $db;
        $this->db=$db;

    }
    public function uploader ($data){
        $folder = "uploads/";
        $path = $folder.basename($data['name']);
        $upload_ok  = 1 ;
        $fileType = mime_content_type($data['tmp_name']);
        $extensions = ['image/jpeg','image/png','image/gif','image/jpg'];
        if (!in_array($fileType,$extensions))
        {
            echo 'file not allowed.your file is ' . $fileType;
            $upload_ok = 0;
        }
        if (file_exists($path)){
            echo 'sorry file already exist';
            $upload_ok = 0;
        }
        if ($data['size']>5000000){
            echo 'your file is to large';
            $upload_ok = 0;
        }
        if ($upload_ok==0){
            echo 'sorry your file was not uploaded';
        } else {
            if ( move_uploaded_file($data['tmp_name'],$path)){
//                echo 'the file ' .$data['name'] . ' has been uploaded!';
                return $path;
            }else{
                echo 'sorry there was an error during uploading file';
            }
        }
    }
}