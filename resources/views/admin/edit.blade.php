<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">

    <!-- Styles -->
    <style>
        body {
            display: grid;
            grid-template-columns: .63fr repeat(3, 1.33fr);
            grid-template-rows: 6vh minmax(88vh, min-content) 6vh;
            /* grid-gap: 1em; */
        }

        header {
            grid-column: 2 / span 3;

            background-color: #545454;
        }

        footer {
            grid-column: 2 / span 4;
            grid-row: 3;
            background-color: #ddd;
            padding: 2em 0;
        }

        header p {
            color: black;
            width: 100%;
            background-color: white;
            text-align: center;
            font-size: 2rem;
            padding: .2em 0;
        }

        main {
            grid-column: 2/ span 3;
            background-color: #ddd;
            grid-row: 2/span 2;
            padding: 3em 0;
        }

        aside {
            grid-column: span 1;
            grid-row: 1/ span 3;
            background-color: #545454;
            color: white;

        }

        aside p {
            height: 6vh;
            background-color: red;
            color: white;
            font-size: 1.5rem;
            padding: .5em 1em;
        }

        @media (max-width: 700px) {

            main,
            aside {
                grid-column: 1 / span 5;
            }

        }
    </style>

</head>

<body>

    <header>
        <p>CTW ADMIN</p>
    </header>
    <aside>
        <p>Navigation</p>
        <a href="/">Visit Site</a>
    </aside>
    <main class="p-4">
        <h1>Edit Section</h1>

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
            {{Form:hidden('_method', 'PUT')}} 
            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        </div>
        {!! Form::close() !!}
        
        
    </main>
    <footer>
        Footer
    </footer>

    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('article-ckeditor');
    </script>
</body>

</html>