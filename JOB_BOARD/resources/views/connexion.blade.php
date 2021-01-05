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

<body class="body_connexion">
    @include('flash::message')
    <div class="container contact-form connect">
        <div class="contact-image">
            <img class="logo_connexion" src="img/logo_simple.png">
        </div>
        <form action="/connexion" method="post">

            {{ csrf_field() }}

            <h3>Connectez vous</h3>
            <div class="row">
                <div class="col-md-12">

                    <div class="form-group">
                        <input type="mail" name="email" class="form-control" placeholder="Email *" value="" />
                    </div>
                    @if($errors->has('email'))
                    <p class="error_form">{{ $errors->first('email') }}</p>
                    @endif

                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="mot de passe *"
                            value="" />
                        @if($errors->has('password'))
                        <p class="error_form">{{ $errors->first('password') }}</p>
                        @endif
                        </br>

                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="S'inscrire" />
                        </div>
                        <div class="form-group">
                            <p><a href="/inscription" class="btn_co">Vous decouvrez Job board ? Créez un compte.</a></p>
                        </div>

                    </div>

                </div>
        </form>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

</body>

</html>