<?php

namespace App\Services\Data\Utility;

use mysqli;

class DBConnect
{
    private $conn;
    private $servername;
    private $username;
    private $password;
    private $dbname;


    public function __construct(string $dbname)
    {
        //initialize the property
        $this->dbname = $dbname;
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";




    }

    public function getDBConnect(){

        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        if($this->conn->connect_errno){
            echo "Failed to connect to MySQL: " .$this->conn->connect_errno;
            exit();
        }

        return($this->conn);

    }

    public function closeDbConnect(){

        $this->conn->close();

    }

    public function setDbAutocommitTrue(){

    $this->conn->autocommit(TRUE);

    }
    public function setDbAutoCommitFalse(){

        $this->conn->autocommit(FALSE);

    }
    public function beginTransaction(){

        $this->conn->begin_transaction();

    }
    public function commitTransaction(){
        $this->conn->commit();
    }
    public function rollbackTransaction(){
        $this->conn->rollback();

    }
}
