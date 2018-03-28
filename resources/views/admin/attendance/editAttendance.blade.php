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
                <h2>Update Attendance</h2>
                <hr />
				<form class="m-t" method="post" action="{{ url('/admin/trytoupdateattendance') }}" enctype="multipart/form-data">
                	<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="hidden" value="{{ $data->id}}" id="id" name="id">
                	<div class="form-horizontal">
				        <div class="form-group">
				        	<div class="col-md-10" align="left"><label>Date</label></div>
				        	<div class="col-md-10">
				            	<input class="form-control" type="text" id="date" name="date" required="" value="{{ $data->date }}">
				            </div>
				        </div>
						<div class="form-group">
				        	<div class="col-md-10" align="left"><label>Username</label></div>
				        	<div class="col-md-10">
				            	<input class="form-control" type="text" id="username" name="username" required="" value="{{ $data->username }}">
				            </div>
				        </div>
				        <div class="form-group">
				        	<div class="col-md-10" align="left"><label>Attendance</label></div>
				        	<div class="col-md-10">
								<select class="form-control" id="attendance" name="attendance" >
									<option @if ($data->attendance == "0") selected="selected" @endif>0</option>
									<option @if ($data->attendance == "1") selected="selected" @endif>1</option>
								</select>
				            </div>
				        </div>
				        <div class="form-group">
				        	<div class="col-md-10" align="left"><label>In Time</label></div>
				            <div class="col-md-10">
				            	<input class="form-control" type="text" id="in" name="in" placeholder="In Time" value="{{ $data->in }}">
				            </div>
				        </div>
				        <div class="form-group">
				        	<div class="col-md-10" align="left"><label>Out Time</label></div>
				            <div class="col-md-10">
				            	<input class="form-control" type="text" id="out" name="out" placeholder="Out Time" value="{{ $data->out }}">
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