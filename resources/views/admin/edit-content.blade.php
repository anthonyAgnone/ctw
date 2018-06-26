@extends('layouts.app') 

@section('header')
    <h3>Edit Site Content</h3>
@endsection 

@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="false">
    
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">

        <div class="carousel-item active p-5">

            <div class="container">
                <h3 class="text-center mb-5">Main Content</h3>
            </div>

            @if(count($admin) > 0) 
            @foreach($admin as $admins)
            <div class="card mx-auto mb-2 border border-primary" style="width: 50rem;">
                <div class="card-body">
                    <h3 class="card-title">{{$admins->title}}</h3>
                    <h6 class="card-subtitle mb-2 text-muted">Edit Change Whatevs</h6>
                    <p class="card-text">{!!$admins->body!!}</p>
                    <p class="card-text">{!!$admins->bodyTwo!!}</p>
                    <a href="/admin/{{$admins->id}}/edit" class="btn btn-default">Edit</a>
                </div>
            </div>
            @endforeach @else
            <p>No content found</p>
            @endif
        </div>

        <div class="carousel-item">

            <div class="container text-center">
                <h3 class="text-center mb-3">Services</h3>
                <a class="text-center mb-5" href="/admin/services/create">Create New</a>
            </div>

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
        </div>


    </div>

    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
@endsection