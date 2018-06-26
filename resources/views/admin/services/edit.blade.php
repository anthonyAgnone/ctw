@extends('layouts.app')

@section('header')
    <a href="/admin/edit-content" class="btn"><< Back</a>
    <h1>Edit Services</h1>
@endsection

@section('content')
    {!! Form::open(['action' => ['AdminController@update', $admin->id], 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!}
    <div class="container">
        <div class="form-group">
            {{Form::label('title', 'Title')}} 
            {{ Form::text('title', $admin->title, ['class' => 'form-control', 'placeholder' => 'Title']) }}
        </div>
        <div class="form-group">
            {{Form::label('body', 'First Paragraph')}} 
            {{ Form::textarea('body', $admin->body, ['id'=>'article-ckeditor','class' => 'form-control', 'placeholder' => 'Body Text'] ) }}
        </div>
        <div class="form-group">
            {{Form::label('bodyTwo', 'Second Paragraph (if section two says null, do not edit. will not display)')}} 
            {{ Form::textarea('bodyTwo', $admin->bodyTwo, ['class' => 'form-control', 'placeholder' => 'Body Text'] ) }}
        </div>
        {{Form::hidden('_method', 'PUT')}} 
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    </div>
    {!! Form::close() !!}
@endsection