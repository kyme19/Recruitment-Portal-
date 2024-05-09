<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Ensure this import statement is present
use App\Models\Account;

class LoginController extends Controller
{
    /**
     * Show the login form.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Handle a login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        // Validate login credentials
        $credentials = $request->validate([
            'user_id' => 'required',
            'password' => 'required',
        ]);
    
        // Check if the user exists
        $user = Account::where('user_id', $credentials['user_id'])->first();
    
        if (!$user) {
            // User does not exist, return error message
            return back()->withErrors(['user_id' => 'User does not exist. Please sign up.'])->withInput($request->only('user_id'));
        }
    
        // Attempt to authenticate the user
        if (Auth::attempt(['user_id' => $credentials['user_id'], 'password' => $credentials['password']])) {
            // Authentication passed
            return redirect()->intended('/dashboard'); // Redirect to dashboard or intended URL
        }
    
        // Authentication failed
        return back()->withErrors(['user_id' => 'Invalid user ID or password.'])->withInput($request->only('user_id'));
    }
    
    

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
