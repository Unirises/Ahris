<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class HomeController extends Controller
{
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::check();
        if ($user) {
            return redirect('/login');
        }
        else{
            return view('index');
        }

        // print_r($user);
        // $roleUser =  DB::table('role_user')->where('user_id', $user->id)->get();
        // // print_r($roleUser->toArray());
        // $roleID = $roleUser->toArray();
        // if ($roleID[0]->role_id == 3) {
        //     return redirect("/user");
        // }
        // else if ($roleID[0]->role_id == 2) {
        //     return redirect( "/admin");
        // }
        // else if ($roleID[0]->role_id == 1) {
        //     return redirect("/admin");
        // }
        // else{
        //     return view('index');
        // }
        
    }

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       
    }

}
