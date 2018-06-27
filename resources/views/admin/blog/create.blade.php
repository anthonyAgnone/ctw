@extends('layouts.app')

@section('header')
<div class="container">

    <h3 class="mb-3">Create News Post</h3>
</div>
@endsection

@section('content')
    <div class="container">
        <div class="form-group row p-4">
            {!! Form::open(['action' => 'BlogController@store','method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
                {{Form::text('title', '',['placeholder'=> 'Title', 'class'=>'form-control mb-3'])}}
                {{Form::textarea('body','',['id'=>'article-ckeditor', 'placeholder'=> 'body','class'=>'form-control mb-3'])}}
                <div class="custom-file mb-3 mt-3">
                    {{Form::file('cover_image',['class'=>'form-control-file', 'id'=>'customFile2'])}}
                    <label class="custom-file-label" for="customFile2">Choose file for blog image</label>
                </div>
                {{form::submit('submit', ['class'=>'btn btn-primary mt-4'])}}
            {!! Form::close() !!}
        </div>
    </div>
@endsection