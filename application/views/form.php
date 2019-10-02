<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('meta'); ?>
    <title>Cielo - Coding Challenge</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
    <link href="assets/css/styles.css" rel="stylesheet">

</head>
<body>
<div>
    <?php $this->load->view('header'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 offset-sm-3">
                <h3 class="center-align py-4">Register Form</h3>

                <?php echo form_open('form/store', ['class' => 'd-flex flex-column', 'id' => 'register-form']); ?>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>
                <div class="form-group">
                    <label for="date">Date of Birth</label>
                    <input type="date" class="form-control" name="date_of_birth" id="date">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email">
                </div>
                <div class="form-group">
                    <label for="color">Favorite Color</label>
                    <select class="form-control" name="favorite_color" id="color">
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
            <div class="col-sm-3">
                <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
                    <!-- Position it -->
                    <div style="position: absolute; top: 0; right: 0;">
                        <!-- Then put toasts within -->
                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" id="toastSuccess" data-delay="5000">
                            <div class="toast-header">
                                <i class="fas fa-user-check mr-2 text-success"></i>
                                <strong class="mr-auto text-success">Success</strong>
                                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="toast-body" id="toastBodySuccess">
                            </div>
                        </div>

                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" id="toastError" data-delay="5000">
                            <div class="toast-header">
                                <i class="fas fa-exclamation-circle mr-2 text-danger"></i>
                                <strong class="mr-auto text-danger">Error</strong>
                                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="toast-body" id="toastBodyError">
                                Heads up, toasts will stack automatically
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('footer'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.min.js"></script>
<script src="assets/js/underscore-min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/index.js"></script>
</body>
</html>
</html>