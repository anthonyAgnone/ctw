@extends('layouts.app')

@section('header')
    <h3 class="mb-3">Edit Property</h3>
    

    
@endsection

@section('content')
    <div class="form-group row p-4">
        {!! Form::open(['action' => ['ProjectsController@update', $album->id],'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
            
            <label for="name">Name</label>
            {{Form::text('name', $album->name,['placeholder'=> 'Name', 'class'=>'form-control mb-3'])}}
            <label for="Location">Location</label>
            {{Form::text('location', $album->location,['placeholder'=> 'Location', 'class'=>'form-control mb-3'])}}
            <label for="description">Description</label>
            {{Form::textarea('description', $album->description,['id'=> 'article-ckeditor', 'placeholder'=> 'Property Description','class'=>'form-control mb-5'])}}
                <label for="cover_image" class="mt-3">PDF for Proprty (save pdf as image)</label>
                <div class="custom-file mb-3">
                    {{Form::file('cover_image',['class'=>'form-control-file', 'id'=>'customFile'])}}
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            {{Form::hidden('_method', 'PATCH')}}
            {{Form::submit('submit', ['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
@endsection