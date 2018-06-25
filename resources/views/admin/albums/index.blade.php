@extends('layouts.app')

@section('header')
    <h1>Projects View</h1>
    <h3><a href="create-album">Create new</a></h3>
@endsection

@section('content')
    <div class="d-flex align-content-around flex-wrap">
        @if(count($albums) > 0)

            @foreach($albums as $album)
                <div class="card bg-light mb-4 gallery-card mx-4" style="width: 35rem;">
                    <img class="card-img-top" src="../storage/album_covers/{{$album->cover_image}}" alt="{{$album->name}}">
                    <div class="card-body">
                    <h5 class="card-title">{{$album->name}}</h5>
                    <p class="card-text">{!!$album->description!!}</p>
                    <a href="/admin/albums/{{$album->id}}" role="button" class="card-link btn btn-success d-inline">Edit</a>
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