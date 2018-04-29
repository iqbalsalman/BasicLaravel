@extends('layout.master')
@section('title')
  Blog Toturial Laravel
@endsection


@section('content')

{{-- @foreach ($users as $user)

<li> {{$user}} </li>  --}}

{{-- @endforeach --}}

@foreach ($blogs as $blog)

{{$blog->blogs}}    
@endforeach

@endsection
