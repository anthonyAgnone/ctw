@extends('layouts.app')

@section('header')
    <h3 class="mb-3">Upload Photo</h3>
    <div class="form-group row p-4">
        {!! Form::open(['action' => 'PhotosController@store','method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
            {{Form::text('title', '',['placeholder'=> 'Photo Title', 'class'=>'form-control mb-3'])}}
            {{Form::textarea('description','',['placeholder'=> 'Photo Description','class'=>'form-control mb-3'])}}
            {{Form::hidden('album_id', $album_id)}}
            <label for=$name>Cover Image for Proprty</label>
            <div class="custom-file mb-3">
                {{Form::file('photo',['class'=>'form-control-file', 'id'=>'customFile'])}}
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
            {{form::submit('submit', ['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
@endsection

@section('content')

@endsection