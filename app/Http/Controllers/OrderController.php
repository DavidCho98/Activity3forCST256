<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerModel;
use App\Services\Business\SecurityService;


class OrderController extends Controller
{
   public function index(Request $request)
   {


       $customerData = new CustomerModel(request()->get('firstName'), request()->get('lastName'));

       $product = request()->get('product');

       $customerID = $request->input('customer_CUSTOMERID');

       $service = new SecurityService();

       $isSuccess = $service->addAllInformation($product,$customerID,$customerData);

       if ($isSuccess)
           echo("Order Data Committed Successfully");

       else
           echo("Order Data was rolled back");

       return view('order');
   }

    public function validateForm(Request $request){

        $rules = [
            'user_name' => 'Required | Between: 4, 10 | Alpha',
            'password' => 'Required | Between: 4, 10'
        ];

        $this->validate($request, $rules);
    }
}
