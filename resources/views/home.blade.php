@extends('layouts.app')

@section('content')

@if(session()->has('message'))
    <div class="alert alert-success center">
        {{ session()->get('message') }}
    </div>
@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
               
            <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">email</th>
                            <th scope="col">pincode</th>
                            </tr>
                        </thead>
                        <tbody>
                     @foreach ($users as $user)
                        <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->pincode }}</td>
                        
                        </tr>
                        @endforeach
                  </tbody>
                </table>
                

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
