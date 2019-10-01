<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Cielo - Coding Challenge</title>

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="assets/css/styles.css" rel="stylesheet">
    </head>
    <body>
        <div>
            <nav class="indigo accent-3">
                <div class="nav-wrapper">
                    <a href="#" class="brand-logo center">CIELO Coding Challenge</a>
                </div>
            </nav>
            <div class="row">
                <div class="col s6 offset-s3">
                    <h3 class="center-align">Register Form</h3>
                    <form class="col s12" id="register-form" method="post">
                        <div class="row">
                            <div class="input-field col s12">
                                <input name="name" type="text" placeholder="Name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input name="date" type="text" class="datepicker" placeholder="Date of Birth">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input name="email" type="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input name="color" type="text" placeholder="Favorite Color">
                            </div>
                        </div>
                        <button class="btn waves-effect waves-light btn-large indigo accent-3" type="submit" name="action">Submit
                            <i class="material-icons right">send</i>
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script src="assets/js/index.js"></script>
    </body>
</html>