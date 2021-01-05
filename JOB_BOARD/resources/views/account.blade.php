<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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



    <div class="container mt-5">

        <div class="row">

            <!-- annonce site Entries Column -->
            <div class="col-md-12">

                <h1 class="my-4">Informations compte
                </h1>
                <div class="container">
                    <div class="row my-2">
                        <div class="col-lg-8 order-lg-2">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a href="" data-target="#profile" data-toggle="tab"
                                        class="nav-link active">Profil</a>
                                </li>
                                <li class="nav-item">
                                    <a href="" data-target="#messages" data-toggle="tab"
                                        class="nav-link">Candidatures</a>
                                </li>
                                <li class="nav-item">
                                    <a href="" data-target="#edit" data-toggle="tab" class="nav-link">Modifier</a>
                                </li>
                            </ul>
                            <div class="tab-content py-4">
                                <div class="tab-pane active" id="profile">
                                    <h5 class="mb-3">Profil</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p>Prenom : {{ $users->firstname }} </p>
                                            <p>Nom : {{ $users->lastname }} </p>
                                            <p>Email : {{ $users->email }} </p>
                                            <p>Phone : {{ $users->phone }} </p>






                                        </div>

                                        <div class="col-md-12">
                                            <h5 class="mt-2"><span class="fa fa-clock-o ion-clock float-right"></span>
                                                Activités récentes </h5>
                                            <table class="table table-sm table-hover table-striped">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <strong>{{ $users->firstname }}</strong> à envoyé une
                                                            Candidatures à
                                                            <strong>`Collaboration`</strong>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <strong>{{ $users->firstname }}</strong> à envoyé une
                                                            Candidatures à
                                                            <strong>`Evolutiv`</strong>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <strong>{{ $users->firstname }}</strong> à envoyé une
                                                            Candidatures à
                                                            <strong>`Agemetra`</strong>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <strong>{{ $users->firstname }}</strong> à envoyé une
                                                            Candidatures à
                                                            <strong>`Siruplab`</strong>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <strong>{{ $users->firstname }}</strong> à envoyé une
                                                            Candidatures à
                                                            <strong>`Lorelab`</strong>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!--/row-->
                                </div>
                                <div class="tab-pane" id="messages">
                                    <table class="table table-hover table-striped">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <strong>{{ $users->firstname }}</strong> à envoyé une
                                                    Candidatures à
                                                    <strong>`Collaboration`</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ $users->firstname }}</strong> à envoyé une
                                                    Candidatures à
                                                    <strong>`Evolutiv`</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ $users->firstname }}</strong> à envoyé une
                                                    Candidatures à
                                                    <strong>`Agemetra`</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ $users->firstname }}</strong> à envoyé une
                                                    Candidatures à
                                                    <strong>`Siruplab`</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>{{ $users->firstname }}</strong> à envoyé une
                                                    Candidatures à
                                                    <strong>`Lorelab`</strong>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane" id="edit">
                                    <form class="section" action="/account" method="post">
                                        {{ csrf_field() }}

                                        <div class="field">
                                            <label class="label">Prenom</label>
                                            <div class="control">
                                                <input class="input" type="text" name="firstname"
                                                    value="{{ $users->firstname }}">
                                            </div>
                                            @if($errors->has('password'))
                                            <p class="help is-danger">{{ $errors->first('password') }}</p>
                                            @endif
                                        </div>

                                        <div class="field">
                                            <label class="label">Nom</label>
                                            <div class="control">
                                                <input class="input" type="text" name="lastname"
                                                    value="{{ $users->lastname }}">
                                            </div>
                                            @if($errors->has('password'))
                                            <p class="help is-danger">{{ $errors->first('password') }}</p>
                                            @endif
                                        </div>

                                        <div class="field">
                                            <label class="label">email</label>
                                            <div class="control">
                                                <input class="input" type="email" name="email"
                                                    value="{{ $users->email }}">
                                            </div>
                                            @if($errors->has('password'))
                                            <p class="help is-danger">{{ $errors->first('password') }}</p>
                                            @endif
                                        </div>

                                        <div class="field">
                                            <label class="label">Téléphone</label>
                                            <div class="control">
                                                <input class="input" type="tel" name="phone"
                                                    value="{{ $users->phone }}">
                                            </div>
                                            @if($errors->has('password'))
                                            <p class=" help is-danger">{{ $errors->first('password') }}</p>
                                            @endif
                                        </div>

                                        <div class="field">
                                            <label class="label">Nouveau mot de passe</label>
                                            <div class="control">
                                                <input class="input" type="password" name="password">
                                            </div>
                                            @if($errors->has('password'))
                                            <p class="help is-danger">{{ $errors->first('password') }}</p>
                                            @endif
                                        </div>

                                        <div class="field">
                                            <label class="label">Mot de passe (confirmation)</label>
                                            <div class="control">
                                                <input class="input" type="password" name="password_confirmation">
                                            </div>
                                            @if($errors->has('password_confirmation'))
                                            <p class="help is-danger">{{ $errors->first('password_confirmation') }}
                                            </p>
                                            @endif
                                        </div>
                                        <br>
                                        <div class="field">
                                            <div class="control">
                                                <button class="button is-link" type="submit">Modifier</button>
                                            </div>
                                        </div><br>
                                        <div class="field">
                                            <div class="control">
                                                <a href="/delete">
                                                    Supression du
                                                    compte</a>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 order-lg-1 text-center">
                            <img src="//placehold.it/150" class="mx-auto img-fluid img-circle d-block" alt="avatar">
                            <h6 class="mt-2">Télécharger une nouvelle photo</h6>
                            <label class="custom-file">
                                <input type="file" id="file" class="custom-file-input">
                                <span class="custom-file-control">Choisir le fichier</span>
                            </label>
                        </div>
                    </div>
                </div>

                <a href="/deconnexion" class="btn btn-primary">Déconnexion</a>

            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

</body>

</html>