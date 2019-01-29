<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration form</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-sm-8 col-md-4 m-auto form-block">
            <form>
                <div class="form-group">
                    <label for="inputUsername">Username</label>
                    <input type="text" class="form-control" id="inputUsername" placeholder="Enter Username">
                </div>
                <div class="form-group">
                    <label for="inputEmail">Email address</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="inputPassword">Password</label>
                    <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="inputConfirmPassword">Confirm Password</label>
                    <input type="password" class="form-control" id="inputConfirmPassword" placeholder="Confirm Password">
                </div>
                <div class="form-group">
                    <label for="inputFirstName">First name</label>
                    <input type="text" class="form-control" id="inputFirstName" placeholder="Enter First name">
                </div>
                <div class="form-group">
                    <label for="inputLastName">Last name</label>
                    <input type="text" class="form-control" id="inputLastName" placeholder="Enter Last name">
                </div>
                <div class="form-group">
                    <label for="inputAge">Age</label>
                    <input type="number" min="7" class="form-control" id="inputAge" placeholder="Enter age">
                </div>
                <div class="form-group">
                    <label for="formControlSelect">Gender</label>
                    <select class="form-control" id="formControlSelect">
                        <option>male</option>
                        <option>female</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php

?>

<script src="assets/js/libs.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
