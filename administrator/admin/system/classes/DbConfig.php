<?php
  /**
   *
   */
  class DbConfig  {

      protected $servername='localhost';
      protected $username="root";
      protected $password="Otechnix@123";

    public function connect() {
        try {
          	// $connection = new PDO("mysql:host=$this->servername;dbname=u441502015_db",$this->username,$this->password);
          	$connection = new PDO("mysql:host=$this->servername;dbname=shristi;charset=utf8mb4",$this->username,$this->password);

          	$connection -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            // echo "Connected!";

            return $connection;

          } catch(PDOException $e) {

          	echo '<br>'.$e->getMessage();

          }

    }

}
?>
