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
            @include('layouts.navbar')

            <div id="page-wrapper" class="gray-bg">
                @include('layouts.topnavbar')
                <h2>Update Employee</h2>
                <hr />
				<form class="m-t" method="post" action="{{ url('/admin/trytoupdateemployee') }}" enctype="multipart/form-data">
                	<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="hidden" value="{{ $data->id}}" id="id" name="id">
                	<div class="form-horizontal">
				        <div class="form-group">
				        	<div class="col-md-10" align="left"><label>Name</label></div>
				        	<div class="col-md-10">
				            	<input class="form-control" type="text" id="name" name="name" required="" placeholder="Full Name" value="{{ $data->email }}">
				            </div>
				        </div>
						<div class="form-group">
				        	<div class="col-md-10" align="left"><label>Username</label></div>
				        	<div class="col-md-10">
				            	<input class="form-control" type="text" id="username" name="username" required="" placeholder="Username" value="{{ $data->username }}">
				            </div>
				        </div>
				        <div class="form-group">
				        	<div class="col-md-10" align="left"><label>Position</label></div>
				        	<div class="col-md-10">
				            	<input class="form-control" type="text" id="position" name="position" required="" placeholder="Position" value="{{ $data->position }}">
				            </div>
				        </div>
				        <div class="form-group">
				        	<div class="col-md-10" align="left"><label>Admin Role</label></div>
				        	<div class="col-md-10">
				            	<input class="form-control" type="checkBox" id="admin" name="admin" placeholder="Position" value="{{ $data->admin }}">
				            </div>
				        </div>
				        <div class="form-group">
				        	<div class="col-md-10" align="left"><label>Email</label></div>
				            <div class="col-md-10">
				            	<input class="form-control" type="email" id="email" name="email" required="" placeholder="Email" value="{{ $data->email }}">
				            </div>
				        </div>
				        <div class="form-group">
				        	<div class="col-md-10" align="left"><label>Password</label></div>
				            <div class="col-md-10">
				            	<input class="form-control" type="password" id="password" name="password" required="" placeholder="Password" value="{{ $data->password }}"></input>
				            </div>
				        </div>
				        <div class="form-group">
				            <div class="col-md-10" align="left">
				                <input type="submit" value="Update" class="btn btn-primary block full-width m-b" />.
				            </div>
				        </div>
				    </div>
                </form>
            </div>
        </div>

        @include('layouts.footer')
    </body>
</html>

<script>
	$(document).ready(function () {
	    $("#myInput").on("keyup", function () {
	        var value = $(this).val().toLowerCase();
	        $("#myTable tr").filter(function () {
	            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
	        });
	    });
	});
</script>