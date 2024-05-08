<!-- resources/views/auth/register.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Register</h1>

    <form action="{{ route('register') }}" method="POST">
        @csrf

        <!-- Add form fields here -->
        
        <div class="form-group">
            <label for="surname">Surname</label>
            <input type="text" name="surname" id="surname" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" id="first_name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="date_of_birth">Date of Birth</label>
            <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="home_county">Home County</label>
            <input type="text" name="home_county" id="home_county" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="constituency">Constituency</label>
            <input type="text" name="constituency" id="constituency" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="ward">Ward</label>
            <input type="text" name="ward" id="ward" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="ethnicity">Ethnicity</label>
            <input type="text" name="ethnicity" id="ethnicity" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="id_number">ID Number</label>
            <input type="text" name="id_number" id="id_number" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="gender">Gender</label>
            <input type="text" name="gender" id="gender" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="postal_address">Postal Address</label>
            <input type="text" name="postal_address" id="postal_address" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="telephone">Telephone</label>
            <input type="text" name="telephone" id="telephone" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Register</button>
    </form>
@endsection