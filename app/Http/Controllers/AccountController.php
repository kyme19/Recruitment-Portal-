<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    /**
     * Show the registration form.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    /**
     * Handle registration form submission.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function register(Request $request)
    {
        // Validate form data
        $validatedData = $request->validate([
            'user_id' => 'required|unique:accounts',
            'password' => 'required|min:8',
            // Add validation rules for other fields here
            'surname' => 'required',
            'first_name' => 'required',
            // ... (add validation rules for other fields)
        ]);
    
        // Create a new account instance
        $account = new Account();
        $account->user_id = $validatedData['user_id'];
        $account->password = Hash::make($validatedData['password']);
        //$account->surname = $validatedData['surname'];
        //$account->first_name = $validatedData['first_name'];
        // Assign values for other fields from $validatedData
    
        $account->save();
    
        // Redirect with success message
        return Redirect::route('login')->with('success', 'Account created successfully! Please log in.');
    }
}
