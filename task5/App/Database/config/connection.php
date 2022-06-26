<?php 
namespace App\Database\Config;

class Connection {
    private $DBServerName = 'localhost';
    private $DBUserName = 'root';
    private $DBPassword = '';
    private $DBDatabaseName = 'x';
    private $DBPort = 3306;
    public $conn;


    public function __construct(){
        $this->conn = new \mysqli($this->DBServerName,$this->DBUserName,$this->DBPassword,$this->DBDatabaseName,$this->DBPort);
        
    }
    
     public function __destruct()
     {
        $this->conn->close();
     }   
    

 }



?> 

<!-- if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
          }
          echo "Connected successfully"; -->