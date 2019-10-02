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

        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/styles.css" rel="stylesheet">
    </head>
    <body>
        <div>
            <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand" href="#">CIELO Coding Challenge</a>
            </nav>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 offset-sm-3">
                        <h3 class="center-align py-4">Register Form</h3>
                        <form class="d-flex flex-column" id="register-form" method="post">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
                            <div class="form-group">
                                <label for="date">Date of Birth</label>
                                <input type="date" class="form-control" name="date" id="date">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email">
                            </div>
                            <div class="form-group">
                                <label for="color">Favorite Color</label>
                                <select class="form-control" name="color" id="color">
                                    <option selected value="">Select your favorite color</option>
                                    <option value="white">White</option>
                                    <option value="black">Black</option>
                                    <option value="red">Red</option>
                                    <option value="blue">Blue</option>
                                    <option value="green">Green</option>
                                    <option value="yellow">Yellow</option>
                                    <option value="purple">Purple</option>
                                    <option value="grey">Grey</option>
                                    <option value="brown">Brown</option>
                                    <option value="orange">Orange</option>
                                    <option value="pink">Pink</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary align-self-center">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/index.js"></script>
    </body>
</html>