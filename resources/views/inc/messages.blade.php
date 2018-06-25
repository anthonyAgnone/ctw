@if(count($errors) > 0)
    <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading">Error!</h4>
        @foreach($errors->all() as $error)
            <p>{{error}}</p>
        @endforeach
    </div>
@endif

@if(session('success'))
    <div class="alert alert-success" role="alert">
        <p>{{session('success')}}</p>
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger" role="alert">
        <p>{{session('error')}}</p>
    </div>
@endif