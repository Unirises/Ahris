<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;
use App\Role;
class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            
            $user = Auth::user();
            // $roleUser = DB::select('SELECT * FROM role_user');
            $roleUser =  DB::table('role_user')->where('user_id', $user->id)->get();
            // print_r($roleUser->toArray());
            $roleID = $roleUser->toArray();
            if ($roleID[0]->role_id == 3) {
                return redirect("/user");
            }
            else if ($roleID[0]->role_id == 2) {
                return redirect( "/admin/home");
            }
            else if ($roleID[0]->role_id == 1) {
                return redirect("/admin/home");
            }

            // print_r(Auth::user());
            // $role = Role::where('id',$user->id)->get();
            // print_r($roleUser);
            // return redirect(RouteServiceProvider::HOME);
            // return redirect('/user');
            // return " ";
        }

        return $next($request);
    }
}
