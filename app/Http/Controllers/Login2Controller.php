<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Services\Business\SecurityService;

class Login2Controller extends Controller
{

    public function index(Request $request){

        $this->validateForm($request);

        $credentials = new UserModel(request()->get('user_name'),request()->get('password'));


        $serviceLogin = new SecurityService();


        $isValid = $serviceLogin->login($credentials);

        if($isValid){
            return view('loginPassed2')->with('model', $credentials);
        }else{
            return view('loginFailed')->with('model', $credentials);
        }


//        $formValues = $request->all();
//
//        $userName = request()->get('user_name');
//
//        //$userName = request()->input('user_name');
//
//        return request()->all();
    }

    // Validation added for activity 3
    public function validateForm(Request $request)
    {
      //set up the data validation rulesf or login form
        $rules = ['user_name' => 'Required | Between 4,10 | Alpha',
            'password' => 'Required | Between 4,10 | Alpha'];

        //Run data validation rules
        $this->validate($request, $rules);


    }

}
