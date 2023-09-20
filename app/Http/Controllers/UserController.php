<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function user()
    {
       

        $data['users'] = User::get();

        $data['businessInfo'] = [
            'company_name'    =>'Mahmudul',
            'address'        =>"Dhaka-Bangladesh",
            'contact_person'     => "Rifat",

        ];



        return view('user', $data);
    }
}
