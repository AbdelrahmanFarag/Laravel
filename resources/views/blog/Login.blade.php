<?php


?>
@include('Partials.errors')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
<div class="wrapper">
    <h2>Login</h2>
    <p>Please fill in your credentials to login.</p>
    <form action="" method="post">
        <div class="form-group ">
            <label>Username</label>
            <input type="text" name="username" class="form-control" value="" required>
            <span class="help-block"></span>
        </div>
        <div class="form-group ">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
            <span class="help-block"></span>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Login">
        </div>
        <p>Don't have an account? <a href="{{route('blog.registration')}}">Sign up now</a>.</p>
        {{csrf_field()}}
    </form>
</div>
</body>
</html>
