<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class VolunteerLoginController extends Controller
{
    //
    
    public function __construct()
    {
        $this->middleware('guest:volunteer');
    }
    
    public function showLoginForm()
    {
        return view('auth.volunteer-login');
    }
    
    public function login(Request $request)
    {
        // Validate the form data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required:min:6'
        ]);
        
        //Attempt to log the user in - automatically sets up session and returns either true or false
        if(Auth::guard('volunteer')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
        {
           //if successful, then redirect to their intended location
            return redirect()->intended(route('volunteer.dashboard'));
        }
        //if unsuccessful, then redirect back to the login with the form data
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }
}
