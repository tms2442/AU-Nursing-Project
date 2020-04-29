@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3 class="mb-3">Logged in as {{ Auth::user()->name }}</h3> 

            <a class="btn btn-primary" href="/export">Export Student List</a>
            <br><br>
            <a class ="btn btn-warning" href="">Manage User Accounts</a>
            <br><br>
            <a class = "btn btn-danger" href='/settings/clear' onclick="return confirm('Are you sure you want to clear all data?')">Clear All Data?</a>

        </div>
    </div>
</div>

@endsection