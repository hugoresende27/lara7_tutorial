@extends('layouts.app')

@section('content')
<x-header title="Submit a form" :name="$name"/>
    <h1>User Account</h1>
    <form action="users" method="POST">
        @csrf
        <div class="form-group">
            <input class="form-control"  type="text" name="email"><br>
            <input class="form-control"  type="password" name="password"><br>
            <div class="text-center w-16">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

@endsection
