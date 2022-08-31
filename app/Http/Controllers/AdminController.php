<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
        $user = User::first()->paginate(10);
        return view('user.index', [
            'title' => 'user'
        ],compact('user'));
    }

    public function destroy($id){
        DB::table('users')->where('id',$id)->delete();
        return redirect('/user');
    }

    public function dashboard(){
        return view('dashboard',[
            "title" => "dashboard"
        ]);
    }
    
    public function manage(){
        return view('admin',[
            "title" => "admin"
        ]);
    }
}