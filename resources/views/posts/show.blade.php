@extends('layouts.app')
    @section('title')
        Create
    @endsection
    @section('content')
    <div class="card text-center mt-5">
    <div class="card-header">
        Title : {{$post->title}}
    </div>
    <div class="card-body">
        <h5 class="card-title">Created By : {{$post->user->name}}</h5>
        <p class="card-text">Created At : {{$post->created_at->format("Y-m-d")}}</p>
    </div>
    <div class="card-footer text-muted">
        Welcome here
    </div>
    </div>

    <div class="card text-center mt-5">
    <div class="card-header">
        Title : {{$post->user->name}}
    </div>
    <div class="card-body">
        <h5 class="card-title">Email : {{$post->user->email}}</h5>
    </div>
    <div class="card-footer text-muted">
        Welcome here
    </div>
    </div>

    @endsection