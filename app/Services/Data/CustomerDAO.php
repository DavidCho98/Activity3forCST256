<?php


namespace app\Services\Data;

use App\Models\CustomerModel;
use App\Services\Data\Utility\DBConnect;



class CustomerDAO
{
    private $conn;

    private $dbname = "activity2";

    private $dbQuery;



    public function __construct($dbObj) {

        $this->$dbObj= $dbObj;
    }


    public function addCustomer(CustomerModel $customer){

        //$firstName = $customer->getFirstName();
        //$lastName = $customer->getLastName();
        $this->dbQuery = "INSERT INTO `customer` (`FirstName`, `LastName`) VALUES ('{$customer->getFirstName()}', '{$customer->getLastName()}')";

        if ($this->dbObj->query($this->dbQuery)) {
            //$this->conn->closeDbConnect();
            return TRUE;
        }
        //$this->conn->closeDbConnect();
        return FALSE;
    }

    public function getNextID(){

        try{

            $this->dbQuery = "SELECT CustomerID FROM custoemr ORDER BY customer_CUSTOMERID DESC LIMIT 0,1";

            $result = $this->dbObj->query($this->dbQuery);

            while($row = mysqli_fetch_array($result)){

                return  $row['CustomerID'] + 1;
            }

        }catch (Exception $e){


            echo $e->getMessage();
        }

    }


}
