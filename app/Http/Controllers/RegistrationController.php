<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    
    public function store(Request $request)
    {
        $request->validate([
            'surname' => 'required',
            'first_name' => 'required',
            'other_names' => 'nullable',
            'title' => 'required',
            'date_of_birth' => 'required|date',
            'home_county' => 'required',
            'constituency' => 'required',
            'ward' => 'required',
            'ethnicity' => 'required',
            'id_number' => 'required|unique:registrations',
            'gender' => 'required',
            'email' => 'required|email|unique:registrations',
            'postal_address' => 'required',
            'telephone' => 'required',
            'living_with_disability' => 'required|boolean',
            'nature_of_disability' => 'nullable',
            'password' => 'required|min:8|confirmed',
        ]);

        $validated = $request->all();
        $validated['password'] = Hash::make($validated['password']);

        Registration::create($validated);

        return redirect()->route('login')->with('success', 'Your account has been created. You can now log in.');
    }
}
?>