<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use Illuminate\Support\Facades\Hash;

class FormController extends Controller
{
    public function validation(Request $req){
        $req->validate([
            'name'=> 'required | max:10',
            'username'=>'required | max:10',
            'dob' => 'required',
            'email'=>'required',
            'telephone'=>'required',
            'nic' => 'required',
            'gender'=>'required',
            'password'=>'required | min:8',
            'repassword'=>'required',
        ]);

        $data = new Form();
        $data->name = $req->name;
        $data->username = $req->username;
        $data->dob = $req->dob;
        $data->email = $req->email;
        $data->telephone = $req->telephone;
        $data->nic = $req->nic;
        $data->gender = $req->gender;
        $data->password =  Hash::make($req->password);
        $data->repassword =  Hash::make($req->repassword);
        $data->save();
        return view ('user');
    }
    public function index()
    {  
       $data['name'] = Form::paginate(10);
       $data['dob'] = Form::paginate(10);
       $data['telephone'] = Form::paginate(10);
       $data['nic'] = Form::paginate(10);
       $data['gender'] = Form::paginate(10);
       return view('user', $data);
    }

    
}
