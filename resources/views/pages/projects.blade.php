<!doctype html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif|Open+Sans:400,700' rel='stylesheet' type='text/css'>


    <!-- Hamburger Menu -->
    <link href="{{ asset('assets/plugins/hamburgers/dist/hamburgers.min.css') }}" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="{{ asset('assets/css/loader.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/style3.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/projects.css') }}" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <!-- Resource style -->
    <link rel="stylesheet" href="css/demo.css">
    <!-- Demo style -->

    <title>Projects</title>

    <style>
        @media only screen and (min-width: 768px) {
            .d-md-flex .card {
                width: 32%;
            }
        }

        @media only screen and (min-width: 1170px) {
            .d-md-flex .card {
                width: calc(100%/5.2);
            }
        }

        a {
            color: #fff;
            font-weight: bold;
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div id="loader-wrapper">
        <div id="loader"></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div>

    @include('inc.nav')

    <header>
        <div class="container">
            <img src="{{ asset('assets/images/logo.png') }}" alt="">
            <div class="container">
                <p class="display-3 text-white">Projects</p>
            </div>
        </div>
    </header>


    @foreach($albums as $album)
    <?php 
        $i = .2; 
        $colcount = count($album->photos);
    ?>
    <section id="section{{$album->id}}" class="bp-sections">

        <div class="gallery-section">

            <div class="topBan" id="banner{{$album->id}}">

                <div class="banTop">
                    <div>
                        <p class="bold">CTW</p>
                    </div>
                    <div>
                        <p class="bold">Development</p>
                    </div>
                </div>

                <div class="banBot">
                    <div class="banLeft d-flex align-items-stretch">
                        <div class="w-50 border-right border-white d-flex align-items-center text-center">
                            <a href="/" class="text-center mx-auto">
                                <i class="fas fa-home"></i>
                            </a>
                        </div>
                        <div class=" w-50 d-flex flex-column align-items-center">
                            <div class="d-flex align-items-center h-50 w-100 border-bottom border-white">
                                <p class="mt-2 text-center mx-auto">ctw</p>
                            </div>
                            <div class="h-50">
                                <p class="mt-2 text-center mx-auto">dev</p>
                            </div>
                        </div>
                    </div>
                    <div class="banRight">
                        <p class="h2 mx-auto text-white">What We've Done</p>
                    </div>
                </div>

            </div>

            <div class="section-inner">
                <h1 class="display-1 text-white wow fadeInLeft">{{$album->name}}</h1>
                <h3 class="p-2 font-italic font-weight-light pl-5 text-white wow fadeInUp" data-wow-duration="1.6s">{!! $album->location !!}</h3>
                <a href="storage/brochures/{{$album->brochure}}" target="_blank" class="font-weight-bold pl-5 h5 text-white mb-5 wow fadeIn"
                    data-wow-delay=".8s" data-wow-duration="1.3s">
                    <u>Brochure</u>
                </a>
                <div class="mb-3 text-white p-3 wow fadeIn" data-wow-delay=".6s" data-wow-duration="1.8s">{!! $album->description !!}</div>
                <div class="d-md-flex justify-content-around flex-wrap">
                    @foreach($photos as $photo) @if($photo->album_id == $album->id)
                    <div class="wow slideInUp card border border-white mb-5" data-wow-delay="{{$i}}s">
                        <a href="#exampleModal{{$photo->id}}" role="button" data-toggle="modal" data-target="#exampleModal{{$photo->id}}">
                            <img class="card-img-top mb-1 flex-item border border-white" src="storage/photos/{{$album->id}}/{{$photo->photo}}" alt="{{$photo->title}}">
                        </a>
                        <div class="card-body">
                            <h3 class="card-title text-white">{{$photo->title}}</h3>
                            <p class="text-white card-text">{{$photo->description}}</p>
                        </div>
                    </div>

                    <div class="modal fade bd-example-modal-lg" id="exampleModal{{$photo->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{$photo->title}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <img style="width:100%; height: auto;" src="storage/photos/{{$album->id}}/{{$photo->photo}}" alt="{{$photo->title}}">
                                </div>
                                <div class="modal-footer">
                                    {{$photo->description}}
                                </div>
                            </div>
                        </div>
                    </div>

                    @else
                    <?php $i = .2; ?> @endif

                    <?php
                            $i += .1;
                        ?>
                        @endforeach
                </div>
            </div>
        </div>

    </section>
    @endforeach
    <!-- cd-timeline -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/projects.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!-- Resource JavaScript -->
</body>

</html>