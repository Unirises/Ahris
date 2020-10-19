<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;
use Analytics;
use Spatie\Analytics\Period;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('role:superadministrator|administrator');
    }

    public function logout() {
        Auth::logout();
        return redirect('/');  
    }

    public function index()
    {

        // $users =  DB::select('SELECT count(*) FROM role_user WHERE role_id=3');
        $users = DB::table('role_user')->where('role_id', 3)->get()->count();
        //  $users = User::all();
        // return view('admin.index')->with('users', $users);
        return view('admin-dashboard.home')->with('users',$users);
    }

    public function updateAdmin(Request $req)
    {
        $id = $request->id;
        $user = User::find($id);
        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        // $user->username = $request->input('username');
        // $user->facebook = $request->input('facebook');
        // $user->linkedin = $request->input('linkedin');
        // $user->twitter = $request->input('twitter');
        $user->city = $request->input('city');
        $user->address = $request->input('address');
        $user->province = $request->input('province');
        $user->zip_code = $request->input('zip_code');
        $user->phonenumber = $request->input('phonenumber');
        // $user->birthday = $request->input('birthday');
        // $user->job_title = $request->input('jobtitle');
        $user->about_me = $request->input('about_me');
        $user->save();
        return redirect('/admin');
    }
    public function register()
    {
       return view('admin-dashboard.register');
    }
    public function adminDashboard() {
       return view('admin-dashboard.home');
   }

   //ar-admin Profile
   public function adminProfile() {

       $user = Auth::user();
       return view('admin-dashboard.ar-admin-profile',compact('user'));
   }

   //ar-analytics
   public function adminAnalytics() {
    // $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::days(7));
    $analyticsData =  Analytics::fetchMostVisitedPages(Period::days(7));
    //    return view('admin-dashboard.ar-analytics');
    return $analyticsData;
   }

   //ar-crashlogs Report
   public function adminCrashLogs() {
       return view('admin-dashboard.ar-crashlogs-report');
   }

   //ar-transaction Overview
   public function adminOverview() {
       return view('admin-dashboard.ar-transaction-overview');
   }

   //ar-user Authentication
   public function adminUserAuth() {
       return view('admin-dashboard.ar-user-authentication');
   }

   //ar-user User Control
   public function adminUserControl() {
       return view('admin-dashboard.ar-user-control');
   }

   //ar-web Monitoring
   public function adminMonitoring() {
       return view('admin-dashboard.ar-web-monitoring');
   }

   // ar-web Updates
   public function adminWebUpdates() {
       return view('admin-dashboard.ar-web-updates');
   }
}
