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
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<link rel="stylesheet" href="/resources/demos/style.css">
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script>
			$( function() {
				$( "#date" ).datepicker({dateFormat: 'yy-mm-dd'});
			} );
		</script>
    </head>

    <body>
        <div id="wrapper" class="Index">
            @include('layouts.navbar')

            <div id="page-wrapper" class="gray-bg">
                @include('layouts.topnavbar')
                
                <h2>Add Attendance</h2>
                <hr />
                <form class="m-t" method="post" action="{{ url('/admin/attendance/byDate') }}" enctype="multipart/form-data">
                	<input type="hidden" name="_token" value="{{ csrf_token() }}">
                	<div class="form-horizontal">
				        <div class="form-group">
				        	<div class="col-md-10" align="left"><label>Date</label></div>
				        	<div class="col-md-10">
				            	<input class="form-control" type="text" id="date" name="date" required="">
				            </div>
				        </div>
				        <div class="form-group">
				            <div class="col-md-10" align="left">
				                <input type="submit" value="Search" class="btn btn-primary block full-width m-b" />
				            </div>
				        </div>
				    </div>
                </form>
				<br><hr><br>
				<form class="m-t" method="post" action="{{ url('/admin/attendance/byMonth') }}" enctype="multipart/form-data">
                	<input type="hidden" name="_token" value="{{ csrf_token() }}">
                	<div class="form-horizontal">
				        <div class="form-group">
				        	<div class="col-md-10" align="left"><label>Month</label></div>
				        	<div class="col-md-10">
								<select class="form-control" id="month" name="month" >
									<option>01</option>
									<option>02</option>
									<option>03</option>
									<option>04</option>
									<option>05</option>
									<option>06</option>
									<option>07</option>
									<option>08</option>
									<option>09</option>
									<option>10</option>
									<option>11</option>
									<option>12</option>
								</select>
				            </div>
				        </div>
				        <div class="form-group">
				            <div class="col-md-10" align="left">
				                <input type="submit" value="Search" class="btn btn-primary block full-width m-b" />
				            </div>
				        </div>
				    </div>
                </form>
				<br><hr><br>
                <form class="m-t" method="post" action="{{ url('/admin/attendance/byYear') }}" enctype="multipart/form-data">
                	<input type="hidden" name="_token" value="{{ csrf_token() }}">
                	<div class="form-horizontal">
						<div class="form-group">
				        	<div class="col-md-10" align="left"><label>Year</label></div>
				        	<div class="col-md-10">
				            	<input class="form-control" type="number" id="year" name="year" min="2018" required="">
				            </div>
				        </div>
				        <div class="form-group">
				            <div class="col-md-10" align="left">
				                <input type="submit" value="Search" class="btn btn-primary block full-width m-b" />
				            </div>
				        </div>
				    </div>
                </form>
				<br><hr><br>
                <form class="m-t" method="post" action="{{ url('/admin/attendance/byUsername') }}" enctype="multipart/form-data">
                	<input type="hidden" name="_token" value="{{ csrf_token() }}">
                	<div class="form-horizontal">
						<div class="form-group">
				        	<div class="col-md-10" align="left"><label>Username</label></div>
				        	<div class="col-md-10">
				            	<input class="form-control" type="text" id="username" name="username" required="">
				            </div>
				        </div>
				        <div class="form-group">
				            <div class="col-md-10" align="left">
				                <input type="submit" value="Search" class="btn btn-primary block full-width m-b" />
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