<?php


namespace app\Services\Data;


use App\Models\CustomerModel;
use App\Services\Data\Utility\DBConnect;

class OrderDAO
{

    private $conn;

    private $dbname = "activity2";

    private $dbQuery;

    private $dbObj;



    public function __construct($dbObj) {

        $this->$dbObj = $dbObj;
    }


    public function addOrder(string $product, int $customerID){

//        $firstName = $customer->getFirstName();
//        $lastName = $customer->getLastName();

        $this->dbQuery = "INSERT INTO `order` (`Product`, `customer_CustomerID`) VALUES ('".$product ."',".$customerID.")";

        if ($this->connection->query($this->dbQuery)) {
            $this->conn->closeDbConnect();
            return TRUE;
        }
        $this->conn->closeDbConnect();
        return FALSE;
    }

}
