<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class HomeController extends Controller
{

    public function index()
    {
        return view('home.userpage');
    }


    // public function adminHome(){

    //     return 'pk';
    //     return view('admin.dashboard');
    // }


    public function redirect()
    {



        if (Auth::check()) {


        if(Auth::user()->usertype =='1')
        {
            return view('admin.dashboard');
            // return  redirect()->route('admin.dashboard');
        }

        else
        {
        return view('home.userpage');

        }
        }else {
            return  redirect()->route('login');
         }



}
}
