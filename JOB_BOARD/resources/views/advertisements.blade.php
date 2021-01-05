<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>JOB BOARD</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">




</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">

            <a class="navbar-brand" href="#"><img class="logo_header" src="img/logo_job_board_white.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">Annonces</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/account">Compte</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="alert_connexion">@include('flash::message')</div>

    <!-- Page Content -->
    <div class="container mt-5">

        <div class="row">

            <!-- annonce site Entries Column -->
            <div class="col-md-8">

                <h1 class="my-4">Annonces
                </h1>

                <!-- annonce Post -->
                @foreach($advertisements as $advertisement)

                <div class="card mb-4">

                    <div class="card mb-4 yolo">
                        <div class="card-body">
                            <button type="button" class="close" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button></br>
                            <h2 class="card-title">{{$advertisement->title}}</h2>
                            <p class="card-text">{{$advertisement->description}}</p>

                            <h4>Salaires :</h4>
                            <p>{{$advertisement->wage}}</p>
                            <h4>Lieu :</h4>
                            <p>{{$advertisement->location}}</p>
                            <h4>Temps de travail :</h4>
                            <p>{{$advertisement->workingTime}}</p>
                            <a href="#" class="btn btn-warning postuler" data-toggle="modal" data-target="#exampleModal"
                                data-whatever="@mdo">Postuler</a>

                        </div>
                    </div>
                    <div class="card-body">
                        <h2 class="card-title">{{$advertisement->title}}</h2>
                        <p class="card-text">{{$advertisement->short_description}}</p>
                        <div class="buttoncla">
                            <a href="#" class="btn btn-primary button1">En savoir plus &rarr;</a>
                        </div>
                    </div>

                    <div class="card-footer text-muted">
                        Posted on {{$advertisement->created_at}} by
                        <a href="companie">{{$advertisement->companie_name}}</a>
                    </div>
                    <!-- Formulaire postulation -->

                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{$advertisement->title}}
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="/candidature" method="post" id="my_form">

                                        {{ csrf_field() }}

                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Nom :</label>
                                            <input type="text" name="lastname" class="form-control" id="name">

                                            <label for="recipient-lastname" class="col-form-label">Prenom :</label>
                                            <input type="text" name="firstname" class="form-control" id="lastname">

                                            <label for="recipient-lastname" class="col-form-label">Telephone :</label>
                                            <input type="tel" class="form-control" name="phone" id="tel">

                                            <label for="recipient-mail" class="col-form-label">Mail :</label>
                                            <input type="mail" class="form-control" name="email" id="email"></br>

                                            <label for="file" class="">CV :</label>
                                            <input type="file" name="cv" class="form-control" id="file"></br>

                                            <label for="message-text" class="col-form-label">Message:</label>
                                            <textarea class="form-control" name="message" id="message-text"></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" form="my_form" class="btn btn-primary">Send
                                        message</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end Formulaire postulation -->

                </div>

                @endforeach

                <!-- Pagination -->
                <ul class="pagination justify-content-center mb-4">
                    <li class="page-item">
                        <a class="page-link" href="#">&larr; Older</a>
                    </li>
                    <li class="page-item disabled">
                        <a class="page-link" href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>


            <!-- def Post -->

            <!-- /.row -->

        </div>
    </div>
    </div>

    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark w-100">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; JOB BOARDS 2020</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

</body>

</html>