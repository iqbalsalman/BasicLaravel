@extends('layout.master')
@section('title')
  Blog Toturial Laravel
@endsection


@section('content')


@foreach ( $users as $user)

<li> {{$user->username}} </li> 
<li>{{$user->password}}</li>

{{-- {!! $alert !!} --}}

@endforeach
@if (count($users) > 5 )
    <p>lebih dari lima</p>     
@else
    <p>Tidak Lebih dari Lima</p>
@endif

@endsection
