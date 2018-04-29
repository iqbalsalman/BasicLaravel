@extends('layout.master')
@section('title')
  Blog Toturial Laravel
@endsection


@section('content')

{{$blogs->blogs}}

@endsection
