<?php

namespace App\Http\Controllers;

use App\Models\CustomerModel;
use App\Services\Business\SecurityService;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(Request $request) {

        $customer = new CustomerModel($request->get('firstName'),  $request->get('lastName'));

        $nextID = 0;

        //$service = new SecurityService();
//        $isSuccess = $service->addCustomer($customer);
//
//        if($isSuccess)
//            echo("Customer Data Added Succesfully");
//
//        else
//            echo("Customer Data Failed to Add");
            return redirect('neworder')->with('nextID',$nextID)
                                            ->with('firstName',request()->get('firstName'))
                                            ->with('lastName',request()->get('lastName'));
    }

    public function validateForm(Request $request){

        $rules = [
            'user_name' => 'Required | Between: 4, 10 | Alpha',
            'password' => 'Required | Between: 4, 10'
        ];

        $this->validate($request, $rules);
    }
}
