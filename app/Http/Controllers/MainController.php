<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bakat;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class MainController extends Controller
{
    public function index(){
        return view('home', [
            "title" => "Home"
        ]);
    }

    public function bakat(){
        $data = Bakat::all();
        return view('bakat', [
            "title" => "Bakat"
        ], compact('data'));
    }

    public function about(){
        return view('about', [
            "title" => "About"
        ]);
    }

    public function profile()
    {
        $user = Auth::user();
        return view('profile', [
            "title" => "Profile"
        ], compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);

        return view('edit', [
            "title" => "Edit"
        ], compact('user'));
    }

    public function update(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $usia = $request->input('usia');
        $pendidikan = $request->input('pendidikan');
        $alamat = $request->input('alamat');
        $jenis_kelamin = $request->input('jenis_kelamin');

        $user = Auth::user();
        $user->name = $name;
        $user->email = $email;
        $user->usia = $usia;
        $user->pendidikan = $pendidikan;
        $user->alamat = $alamat;
        $user->jenis_kelamin = $jenis_kelamin;
        $user->save();
        return redirect('/profile/{{Auth::user()->id }}');
    }
}