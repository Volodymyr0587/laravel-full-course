@extends('layouts.layout')

@section('content')

    {{-- <x-user-donates :posts=$posts/> --}}
    <x-user-donates :stats=$stats/>

@endsection
