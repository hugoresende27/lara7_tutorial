
@extends('layouts.app')

@section('content')

<x-header title="Component Lesson" :name="$name"/>

<h1>Sample page</h1>

<h2>{{$name}}</h2>
@endsection
