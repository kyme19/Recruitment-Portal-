@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Job Listing</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('job-listings.store') }}">
                            @csrf

                            <!-- Add form fields for job listing details -->

                            <div class="form-group">
                                <label for="position">Position</label>
                                <input type="text" class="form-control" id="position" name="position">
                            </div>

                            <div class="form-group">
                                <label for="job_group">Job Group</label>
                                <input type="text" class="form-control" id="job_group" name="job_group">
                            </div>

                            <div class="form-group">
                                <label for="job_ref">Job Ref</label>
                                <input type="text" class="form-control" id="job_ref" name="job_ref">
                            </div>

                            <div class="form-group">
                                <label for="duties_and_responsibilities">Duties and Responsibilities</label>
                                <textarea class="form-control" id="duties_and_responsibilities" name="duties_and_responsibilities"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="requirements">Requirements for Appointment</label>
                                <textarea class="form-control" id="requirements" name="requirements"></textarea>
                            </div>



                            <button type="submit" class="btn btn-primary">Create</button>

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
                            });
                            </script>
            

            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection