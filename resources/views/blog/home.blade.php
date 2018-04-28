@extends('layout.master')
@section('title')
  Blog Toturial Laravel
@endsection


@section('content')

@foreach ($users as $user)

<li> {{$user}} </li> 

@endforeach


@endsection
