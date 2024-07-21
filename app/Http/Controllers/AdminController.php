<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('adminlogin');
    }
    // Handle login form submission


    public function adminlogin(Request $request)
    {
        $incomingfields = $request->validate([
            'loginname' => 'required',
            'loginpassword' => 'required'
        ]);
        
    
        // Check hardcoded credentials
        if ($incomingfields['loginname'] == 'admin' && $incomingfields['loginpassword'] == 'admin123') {
            // Authentication passed...
            return redirect('adminindex');
        }
    
        return redirect()->route('adminlogin')->with('error', 'Invalid username or password');
    }


}
?>