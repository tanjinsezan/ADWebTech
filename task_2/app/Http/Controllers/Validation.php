<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Validation extends Controller
{
    public function registration()
    {
        return \view('registration');
    }

    public function addPeople(Request $request)
    {
        $rules= [
            'Name'=> 'required|min:5|string:A-Z,a-z',
            'Email' => 'required|Email',
            'Contact'=> 'required|numeric',
            'Password'=> 'required|min:6'
        ];
        $messages= [
            'required'=> 'Please Fill-Up the Field',
            'Name.min'=> 'Minimum 5 Character',
            'string'=> 'Name Should Be String',
            'numeric'=> 'The contact must be Numeric',
            'Password.min' => 'Minimum 6 Character'
        ];

    $this->validate($request,$rules,$messages);
    $output ="<h3>Submited</h3>";
    $output.="<br>Name: ".$request->Name;
    $output.="<br>Email: ".$request->Email;
    $output.="<br>Password: ".$request->Password;
    $output.="<br>Contact: ".$request->Contact;
        return $output;
    }

    public function login()
    {
        return \view('login');
    }

    public function loginData(Request $request)
    {
        $rules= [
            'email' => 'required|email',
            'Password'=> 'required|min:6'
        ];
        $messages= [
            'required'=> 'Please Fill-Up the Field',
            'Password.min' => 'Minimum 6 Character'
        ];

    $this->validate($request,$rules,$messages);
    $output ="<h3>Login Successfull</h3>";
    if($request->email=="shahedislam600@gmail.com" && $request->Password=="123456s")
    {
        return $output;
    }
    else
    {
        return \view('login');
    } 
    }

    public function contact()
    {
        return \view('contact');
    }

    public function contactUs(Request $request)
    {
        $rules= [
            'Name'=> 'required|min:5|string:A-Z,a-z',
            'Email' => 'required|Email',
            'Contact'=> 'required|numeric',
            'Message'=> 'required'
        ];
        $messages= [
            'required'=> 'Please Fill-Up the Field',
            'Name.min'=> 'Minimum 5 Character',
            'string'=> 'Name Should Be String',
            'numeric'=> 'The contact must be Numeric',
        ];

    $this->validate($request,$rules,$messages);
    $output ="<h3>Submited</h3>";
        return $output;
    }
}
