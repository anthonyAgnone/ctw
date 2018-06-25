@extends('layouts.app')

@section('header')
    <a href="/admin/albums/{{$photo->album_id}}" class="btn"><< Back</a>
@endsection

@section('content')
    <div class="container">

        <div class="card">
            <h1 class="card-title text-center my-4">{{$photo->title}}e</h1>
            <img class="card-img-top" src="../../storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}">
            <div class="card-body">
              <p class="card-text">{{$photo->description}}</p>
              
              {!! Form::open(['class' => 'form-inline d-inline', 'action' => ['PhotosController@destroy', $photo->id], 'method' => 'POST']) !!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete Photo', ['class' => 'btn btn-danger d-inline'])}}
              {!! Form::close() !!}
              <a href="#" class="btn btn-primary d-inline">Edit Photo</a>
              <hr>
              <small>Size: {{$photo->size}}</small>
            </div>
          </div>
    </div>
@endsection