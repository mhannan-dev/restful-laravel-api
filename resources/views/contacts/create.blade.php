@extends('layouts.app')
@section('title', 'Contacts page')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                {{ $cteate }}
            </div>
            <div class="card-body">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                @endif


                  <form method="post" action="{{ route('contacts.update',$contact->id) }}">
                   @csrf
                  <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" name="name" id="name" placeholder="Enter name">

                  </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">

                    </div>

                    <div class="form-group">
                        <label for="job_title">Job title</label>
                        <input type="text" class="form-control" name="job_title" id="job_title" placeholder="Enter job title">

                    </div>

                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" class="form-control" name="city" id="city" placeholder="Enter city name">
                    </div>

                    <div class="form-group">
                        <label for="country">Country</label>
                        <input type="text" class="form-control" name="country" id="country" placeholder="Enter country name">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>


    </div>
</div>
@endsection
