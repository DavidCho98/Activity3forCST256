<?php


namespace App\Models;

use APP\Service\Data\CustomerDAO;

class CustomerModel
{

    private $firstName;
    private $lastName;

    public function __construct($firstName, $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }


    /**
     * Getter for firstname
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Getter for lastname
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

}
