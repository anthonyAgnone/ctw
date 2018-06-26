@extends('layouts.app')

@section('header')
    <a href="/admin/create-album" class="btn"><< Back</a>
    <h1>{{$album->name}}</h1>
    <p style="max-width: 40%;" class="pl-3">{!!$album->description!!}</p>
    <a href="/admin/photos/create/{{$album->id}}" class="btn mb-3 d-inline">Add new photo</a>
    <a href="/admin/albums/{{$album->id}}/edit" class="btn mb-3 d-inline">Edit Info</a>
    {!! Form::open(['class' => 'form-inline d-inline', 'action' => ['ProjectsController@destroy', $album->id], 'method' => 'POST']) !!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete Property', ['class' => 'btn btn-link d-inline'])}}
    {!! Form::close() !!}
    <img style="max-width: 45%;" class="mb-5 d-block border border-secondary" src="../../storage/album_covers/{{$album->cover_image}}" alt="Album Pdf">
@endsection

@section('content')
    <div class="d-flex align-content-around flex-wrap">

        @if(count($album->photos) > 0)

            @foreach($album->photos as $photo)
                <div class="card bg-light mb-4 gallery-card mx-4" style="width: 35rem;">
                    <img  class="card-img-top" src="../../storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}">
                    <div class="card-body">
                    <h5 class="card-title">{{$photo->title}}</h5>
                    <p class="card-text">{!!$photo->description!!}</p>
                    <a href="/admin/photos/{{$photo->id}}" class="card-link">View</a>
                    {!! Form::open(['class' => 'form-inline d-inline', 'action' => ['ProjectsController@destroy', $album->id], 'method' => 'POST']) !!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete Property', ['class' => 'btn btn-danger d-inline'])}}
                    {!! Form::close() !!}
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection