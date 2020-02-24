<?php

namespace App\Http\Controllers;
use App\info;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ATGController extends Controller
{
    //redirect
    protected $redirectTo = RouteServiceProvider::HOME;

    //validate data
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255','unique:infos'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:infos','filter_var($email, FILTER_VALIDATE_EMAIL)'],
            'pincode' => ['required', 'string', 'min:6', 'unique:infos'],
        ]);
    }


    public function store(){
        $data= request()->validate([
            'name' => ['required', 'string', 'max:255','unique:infos'],
            'email' => ['required', 'string', 'email', 'max:255','regex:/(.*)@(.*)\.com/i','unique:infos'],
            'pincode' => ['required', 'string', 'min:6', 'max:6', 'unique:infos'],
        ]);
        \App\info::create($data);
        return redirect('/')->with('message', 'data added successfully');

    }

    public function index()
    {
        return view('entry');
    }

}
