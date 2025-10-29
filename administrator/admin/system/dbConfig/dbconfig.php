<?php

class Connection{

    protected $db = null;

    public function Open(){

        try{

            // $dsn = "mysql:dbname=u441502015_db; host=localhost";
            // $user = "root";
            // $pass = "Otechnix@123#";

            $dsn = "mysql:dbname=shristi; charset=utf8mb4; host=localhost";
            $user = "root";
            $pass = "Otechnix@123";

            $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
            $this->db = new PDO($dsn,$user,$pass,$options);

            return $this->db;
        }
        catch(PDOException $e){

            echo "Connection Failed : ".$e->getMessage();
        }
    }
    public function Close(){

        $this->db = null;
        return true;
    }
}
?>
