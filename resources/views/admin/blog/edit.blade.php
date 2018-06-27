@extends('layouts.app')

@section('header')
    <div class="container text-center">
        <h1 class="mb-3">Edit Property</h1>
        <img style="max-width: 45%;" class="img-fluid" src="../../../storage/blog_covers/{{$blog->cover_image}}" alt="{{$blog->title}}">    
    </div>
@endsection

@section('content')

    <div class="container">
            <div class="form-group p-4 d-flex justify-content-center">
                {!! Form::open(['action' => ['BlogController@update', $blog->id],'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
                    {{Form::text('title', $blog->title,['placeholder'=> 'Title', 'class'=>'form-control mb-3'])}}
                    {{Form::textarea('body', $blog->body,['id'=>'article-ckeditor', 'placeholder'=> 'body','class'=>'form-control mb-3'])}}
                    <div class="custom-file mb-3 mt-3">
                        {{Form::file('cover_image',['class'=>'form-control-file', 'id'=>'customFile2'])}}
                        <label class="custom-file-label" for="customFile2">Choose file for blog image</label>
                    </div>
                    {{Form::hidden('_method', 'PUT')}}
                    {{form::submit('submit', ['class'=>'justify-self-start btn btn-primary'])}}
                {!! Form::close() !!}
            </div>
        </div>
@endsection
            