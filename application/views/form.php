<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php $this->load->view('meta'); ?>
</head>
<body>
<div id="wrapper">
    <?php $this->load->view('header'); ?>

    <div id="content">

        <?php echo form_open('cielo-app.dev/form/store'); ?>

        <h5>name</h5>
        <input type="text" name="name" value="" size="120"/>

        <h5>date_of_birth</h5>
        <input type="text" name="date_of_birth" value="" size="50"/>

        <h5>email</h5>
        <input type="text" name="email" value="" size="50"/>

        <h5>favorite_color</h5>
        <input type="text" name="favorite_color" value="" size="50"/>

        <div><input type="submit" value="Submit"/></div>

        </form>
    </div>

    <?php $this->load->view('footer'); ?>
</div>
</body>
</html>