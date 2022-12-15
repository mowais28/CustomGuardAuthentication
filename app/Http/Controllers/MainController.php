<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\app_account;
use Illuminate\Support\Facades\Hash;




class MainController extends Controller
{
    //
    public function index()
    {
        return view("login");
    }


    /**
     * 
     * Added Custom Guard In Config Folder auth.php file guard Array
     * Added Custom Provider of guard in same file provider array
     * 
     */

    public function login(Request $response)
    {
        // Validate
        $response->validate([
            "email" => ["required"],
            "password" => ["required"],
        ]);

        // User Credentials
        $credentials = [
            "email_address" => $response->email,
            "password" => $response->password
        ];
        $authenticate = Auth::guard(name: "new_users")->attempt($credentials);
        if ($authenticate) {
            return redirect('dash');
        } else {
            return back()->with('fail', "Email Address or Password Incorrect");
        }
    }

    public function logout()
    {
        Auth::guard(name: "new_users")->logout();
        return redirect("/");
    }
}
