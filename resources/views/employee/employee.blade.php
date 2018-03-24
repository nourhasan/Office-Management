<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Admin</title>

        @include('layouts.css')
        @include('layouts.js')
    </head>

    <body>
        <div id="wrapper" class="Index">
            @include('layouts.nb')

            <div id="page-wrapper" class="gray-bg">
                @include('layouts.topnavbar')
                <center>
                    <h3 class="logo-name">Hello</h3>
                    <br/>
                    <h2 class="logo-name">{{ $user->name }}</h2>
                </center>
            </div>
        </div>

        @include('layouts.footer')
    </body>
</html>