


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Login</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen  animated fadeInDown">
        <div>
            <h3>Welcome to Ingenium Portal</h3>

            <p>Login in To Admin Panel</p>
            <form class="m-t" method="post" action="{{ url('/trytologin') }}">
                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" name="email" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="password" required="">
                </div>
                <label style="color:red">{{ $message }}</label><br />
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
                <a href="http://localhost:13533/"><h3>Back to Home</h3></a>
            </form>
            
        </div>
    </div>
</body>

</html>