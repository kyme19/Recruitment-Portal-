@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @isset($job)
                        <div class="card-header">{{ $job->position }}</div>

                        <div class="card-body">
                            <h5 class="card-title">{{ $job->job_group }}</h5>
                            <p class="card-text">
                                <strong>Number of Posts:</strong> {{ $job->no_of_posts }}<br>
                                <strong>Job Reference:</strong> {{ $job->job_ref }}<br>
                                <strong>Terms of Service:</strong> {{ $job->terms_of_service }}
                            </p>

                            <h5>Duties and Responsibilities</h5>
                            <ul>
                                @foreach ($job->duties as $duty)
                                    <li>{{ $duty->duty }}</li>
                                @endforeach
                            </ul>

                            <h5>Requirements for Appointment</h5>
                            <ul>
                                @foreach ($job->requirements as $requirement)
                                    <li>{{ $requirement->requirement }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endisset
                </div>
            </div>
        </div>
    </div>
@endsection