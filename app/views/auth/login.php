<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 4/10/2019
 * Time: 1:51 PM
 */
//    include '../../../public/bootstrap/bootstrap.php';
?>
{% block title %}Registration{% endblock %}
{% block body %}
        <div class="col-sm-4 mx-auto mt-4">
            <div class="card card-body">
                <form method="POST" action="">
                    <div class="form-group">
                        <label for="email">Email</label><br>
                        <input type="text" class="form-control" name="email" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label><br>
                        <input type="password" class="form-control" name="password" id="pass" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block" id="btn-login">Login</button>
                    </div>
                    <div class="form-group">
                        <p> Did not have an account yet? <a href="register.php">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
{% endblock %}