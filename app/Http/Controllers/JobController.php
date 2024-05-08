<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function show($id)
    {
        $job = Job::find($id);
        return view('show', compact('job')); // Changed from 'jobs.show' to 'show'
    }

    
}