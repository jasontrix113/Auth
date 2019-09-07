{% extends ''%}
{% block title %}Registration{% endblock %}
{% block body %}
    <div class="registrion_form col-sm-5 mt-4 mx-auto" id="reg_form">
        <div class="card card-body">
            <div class="card-head mb-2 mt-2 mx-auto">
                <h4>Customer Details</h4>
            </div>
            <form class="form" method="POST" action="">
                <div class="form-group">
                    <label for="firstname" class="label-form">First Name</label><br>
                    <input type="text" class="form-control" name="firstname" id="fname" required>
                </div>
                <div class="form-group">
                    <label for="lastname" class="label-form">Last Name</label><br>
                    <input type="text" class="form-control" name="lastname" id="lname" required>
                </div>
                <div class="form-group">
                    <label for="email" class="label-form">Email</label><br>
                    <input type="email" class="form-control" name="email" id="email" required>
                </div>
                <div class="form-group">
                    <label for="confirm_email" class="label-form">Confirm Email</label><br>
                    <input type="email" class="form-control" name="confirm_email" id="c_email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label><br>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <div class="form-group">
                    <label for="confirm_password"> Confirm Password</label><br>
                    <input type="password" class="form-control" name="confirm_password" id="c_password">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block" id="btn_reg">Register</button>
                </div>
                <div class="form-group">
                    <p> Already have an account? <a href="">Login</a></p>
                </div>
            </form>
        </div>
    </div>
{% endblock %}
