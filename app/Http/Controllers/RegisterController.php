<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register',[
            'title'=>'register'
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name'=>'required|max:255',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:4|max:255',
            'usia' => 'required|max:100',
            'pendidikan' => 'required|max:100',
            'alamat' => 'required|max:255',
            'role'=>'required|max:50',
            'jenis_kelamin' => 'required'
        ]);
        
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/login');
    }
}