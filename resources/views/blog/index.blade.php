@extends('layouts.layout')

@section('content')

    <x-posts :posts=$posts :options=$categories />

@endsection
