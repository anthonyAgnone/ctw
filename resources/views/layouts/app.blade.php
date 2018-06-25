<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CTW Admin</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">
    <link href="{{ asset('assets/css/admin.css') }}" rel="stylesheet" />
</head>

<body>

    <div class="wrapper">
        <nav>
            <p class="text-center pt-4">CTW Development Admin Panel</p>
        </nav>
        <aside class="nav flex-column effect1">
            <a role="button" class="btn btn-secondary btn-lg btn-brand" href="/">CTW</a>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="/admin">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/edit-content">Edit Content</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/albums">Properties</a>
                </li>
            </ul>
        </aside>
        <header class="p-4">

            @if(count($errors) > 0)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <h4 class="alert-heading">Error!</h4>
                    @foreach($errors->all() as $error)
                        <p>{{$error}}</p>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    @endforeach
                </div>
            @endif 

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <p>{{session('success')}}</p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif 

            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <p>{{session('error')}}</p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif 

            @yield('header')
        </header>
        <main class="p-4">
            @yield('content')
        </main>
        <footer>

        </footer>
    </div>

    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>


</body>

</html>