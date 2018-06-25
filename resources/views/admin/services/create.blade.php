@extends('layouts.app')

@section('header')
    <h3 class="mb-3">Create Service</h3>
    <div class="form-group row p-4">
        {!! Form::open(['action' => 'ServicesController@store','method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
            {{Form::text('title', '',['placeholder'=> 'Title', 'class'=>'form-control mb-3'])}}
            {{Form::textarea('body','',['placeholder'=> 'body','class'=>'form-control mb-3'])}}
            {{form::submit('submit', ['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
@endsection

@section('content')
    @if(count($services) > 0) 
        @foreach($services as $service)
            <div class="card mx-auto mb-2 border border-primary" style="width: 50rem;">
                <div class="card-body">
                    <h3 class="card-title">{{$service->title}}</h3>
                    <h6 class="card-subtitle mb-2 text-muted">Edit Change Whatevs</h6>
                    <p class="card-text">{!!$service->body!!}</p>
                    <a href="/admin/{{$service->id}}/edit" class="btn btn-default">Edit</a>
                </div>
            </div>
        @endforeach 
    @else
    <p>No content found</p>
    @endif
@endsection