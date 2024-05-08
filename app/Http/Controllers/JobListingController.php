<?php

namespace App\Http\Controllers;

use App\Models\JobListing;
use Illuminate\Http\Request;

class JobListingController extends Controller
{
    /**
     * Show the form for creating a new job listing.
     *
     * @return \Illuminate\Http\Response
     */

     public function index()
     {
         $jobListings = JobListing::all();
 
         return view('job-listings.index', compact('jobListings'));
     }
 

    

    public function create()
    {
        return view('job-listings.create');
    }

    /**
     * Store a newly created job listing in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    
    public function store(Request $request)
    {
        $jobListing = new JobListing;

        $jobListing->position = $request->input('position');
        $jobListing->job_group = $request->input('job_group');
        // Fill in the rest of the fields

        $jobListing->save();

        // Flash a success message to the session
        session()->flash('success', 'Job listing created successfully.');

        return redirect()->route('job-listings.index');
    }
}