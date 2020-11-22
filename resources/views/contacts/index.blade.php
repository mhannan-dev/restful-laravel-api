@extends('layouts.app')
@section('title', 'Contacts page')
@section('content')
<div class="card">
    <div class="card-header">
        {{ $title }}
        <div class="float-right"> <a href="{{ route('contacts.create')}}" class="btn btn-outline-success">+ {{ $cteate }}</a></div>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Job Title</th>
                    <th scope="col">City</th>
                    <th scope="col">Country</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($contacts as $key => $contact)
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->job_title }}</td>
                        <td>{{ $contact->city }}</td>
                        <td>{{ $contact->country }}</td>
                        <td>
                            <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-success">
                               Edit
                            </a>
                            <a href="" class="btn btn-warning">
                               Delete
                            </a>
                        </td>

                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>

@endsection
