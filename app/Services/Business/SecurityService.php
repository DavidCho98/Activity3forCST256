<?php
namespace App\Services\Business;

use App\Models\CustomerModel;
use App\Models\UserModel;

use app\Services\Data\OrderDAO;
use App\Services\Data\SecurityDAO;
use App\Services\Data\CustomerDAO;
use App\Services\Data\Utility\DBConnect;

class SecurityService
{
    private $dao;

    public function __construct()
    {
        $this->dao = new SecurityDAO();
    }


    public function login(UserModel $user)
    {
        $this->dao = new SecurityDAO();

        return $this->dao->findByUser($user);
    }

    public function addCustomer(CustomerModel $customer)
    {
        $this->dao = new CustomerDAO();

        return $this->dao->addCustomer($customer);
    }

    public function addOrder(string $product, int $customerID)
    {

        $this->addNewOrder = new OrderDAO();

        return $this->addNewOrder->addOrder($product,$customerID);
    }

    public function addAllInformation(string $product, int $customerID,CustomerModel $customerData ){

        $conn = new DBConnect("activity2");

        $dbObj = $conn->getDBConnect();

        $conn->setDbAutoCommitFalse();

        $conn->beginTransaction();

        $this->addNewCustomer = new CustomerDAO($dbObj);

        $customerID = $this->addNewCustomer->getNextID();

        $isSuccessful = $this->addNewCustomer->addCustomer($customerData);

        $this->addNewOrder = new OrderDAO($dbObj);

        $isSuccessfulOrder = $this->addNewOrder->addOrder($product,$customerID);

        if($isSuccessful&& $isSuccessfulOrder){
            $conn->commitTransaction();
            return true;
        }else{
            $conn->rollbackTransaction();
            return false;

        }




    }

}
