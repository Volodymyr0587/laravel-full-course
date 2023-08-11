@extends('layouts.layout')

@section('page.title', $post->title)
@section('content')

    <x-show :post=$post/>

@endsection
