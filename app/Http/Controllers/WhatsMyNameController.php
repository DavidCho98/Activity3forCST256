<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhatsMyNameController extends Controller
{
    public function index(Request $request)
    {
        $firstName = $request->input('firstname');
        $lastName = $request->input('lastname');

        echo "Your name is: " . $firstName . " " . $lastName;
        echo '<br>';

        $data = ['firstName' => $firstName, 'lastName' => $lastName];
        return view('thatswhoami')->with($data);



    }

}
