@extends('layouts.app')

@section('content')
    <h1>Job Listings</h1>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <script>
    $(document).ready(function(){
        $(".alert-success").fadeTo(2000, 500).slideUp(500, function(){
            $(".alert-success").slideUp(500);
        });

        // Remove the loading animation after 3 seconds
        setTimeout(function() {
            $('.loader').remove();
        }, 3000);
    });
    </script>

    <div class="row">
        @if ($jobListings->isEmpty())
            <p>No job listing</p>
        @else
            @foreach ($jobListings as $jobListing)
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="loader"></div> <!-- Loading animation -->
                        <div class="card-body">
                            <h5 class="card-title">{{ $jobListing->position }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $jobListing->job_group }}</h6>
                            <p class="card-text">{{ $jobListing->duties }}</p>
                            <p class="card-text">{{ $jobListing->requirements }}</p>
                            <a href="{{ route('register') }}" class="btn btn-primary">Apply</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection