<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubmitController extends Controller
{

    public function contact(Request $request)
    {

        $request->validate([
            'f_name' => 'required',
            'l_name' => 'required',
            'email' => 'required|email',
            'phone_number' => [
                'required',
                'regex:/^(079|077|078)\d{7}$/'
            ],
        ]);
    }
}
