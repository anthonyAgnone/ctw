@extends('layouts.app')

@section('header')
    <h1>News</h1>
    <h3><a href="/admin/blog/create">Create new</a></h3>
@endsection

@section('content')
    <div class="d-flex align-content-around flex-wrap">
        @if(count($blogs) > 0)

            @foreach($blogs as $blog)
                <div class="card bg-light mb-4 gallery-card mx-4" style="width: 35rem;">
                    <img class="card-img-top" src="../storage/blog_covers/{{$blog->cover_image}}" alt="{{$blog->name}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$blog->title}}</h5>
                    <h6 class="card-title">{{$blog->created_at}}</h6>
                        <p class="card-text">{!! $blog->body !!}</p>
                        <a href="/admin/blog/{{$blog->id}}/edit" role="button" class="card-link btn btn-success d-inline">Edit</a>
                        {!! Form::open(['class' => 'form-inline d-inline', 'action' => ['BlogController@destroy', $blog->id], 'method' => 'POST']) !!}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('Delete Property', ['class' => 'btn btn-danger d-inline'])}}
                        {!! Form::close() !!}
                    </div>
                </div>
            @endforeach
        @else
            <p>No blog posts to display</p>
        @endif
    </div>
@endsection