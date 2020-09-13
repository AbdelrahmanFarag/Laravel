<?php

?>
@include('Partials.errors')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
    body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
<div class="wrapper">
    <h2>Sign Up</h2>
    <p>Please fill this form to create an account.</p>
    <form action="" method="post">

        <div class="form-group">

            <label>FullName</label>
            <input type="text" name="name" class="form-control" required>
            <span class="help-block"></span>
        </div>

        <div class="form-group">

            <label>Phone Number</label>
            <input type="text" name="phone" class="form-control" required >
            <span class="help-block"></span>
        </div>
        <div class="form-group">

            <label>Username</label>
            <input type="text" name="username" class="form-control" required >
            <span class="help-block"></span>
        </div>
        <div class="form-group ">
            <label>Email</label>
            <input type="text" name="email" class="form-control" required placeholder="someone@example.com">
            <span class="help-block"></span>
        </div>
        <div class="form-group ">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
            <span class="help-block"></span>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
            <input type="reset" class="btn btn-default" value="Reset">
        </div>
        <p>Already have an account? <a href="{{route('blog.login')}}">Login here</a>.</p>
        {{csrf_field()}}

    </form>

</div>
</body>
</html>

