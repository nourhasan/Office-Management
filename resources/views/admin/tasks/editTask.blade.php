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
                <h2>Update Task</h2>
                <hr />
                <form class="m-t" method="post" action="{{ url('/admin/trytoupdatetask') }}" enctype="multipart/form-data">
                	<input type="hidden" name="_token" value="{{ csrf_token() }}">
                	<div class="form-horizontal">
						<input type="hidden" value="{{ $data->id}}" id="id" name="id">
				        <input class="form-control" type="hidden" id="from" name="from" value="{{ session('currentUser') }}">
						<div class="form-group">
							<div class="col-md-10" align="left"><label>Name</label></div>
							<div class="col-md-10">
								<input class="form-control" type="text" id="name" name="name" required="" placeholder="Task Name" value="{{ $data->name }}">
							</div>
						</div>
				        <div class="form-group">
				        	<div class="col-md-10" align="left"><label>To</label></div>
				        	<div class="col-md-10">
				            	<input class="form-control" type="text" id="to" name="to" required="" placeholder="Assigning To" value="{{ $data->to }}">
				            </div>
				        </div>
				        <div class="form-group">
				        	<div class="col-md-10" align="left"><label>Body</label></div>
				            <div class="col-md-10">
				            	<textarea class="form-control" id="body" name="body" required="" placeholder="Description">{{ $data->body }}</textarea>
				            </div>
				        </div>
				        <div class="form-group">
				        	<div class="col-md-10" align="left"><label>Duration</label></div>
				            <div class="col-md-10">
								<input class="form-control" type="text" id="duration" name="duration" required="" placeholder="Duration" value="{{ $data->duration }}">
							</div>
				        </div>
				        <div class="form-group">
				        	<div class="col-md-10" align="left"><label>Status</label></div>
				            <div class="col-md-10">
				            	<select class="form-control" id="status" name="status">
									<option @if ($data->status == "To Do") selected="selected" @endif>To Do</option>
									<option @if ($data->status == "Doing") selected="selected" @endif>Doing</option>
									<option @if ($data->status == "Done") selected="selected" @endif>Done</option>
								</select>
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