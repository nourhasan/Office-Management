<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Employee</title>

        @include('layouts.css')
        @include('layouts.js')
    </head>

    <body>
        <div id="wrapper" class="Index">
            @include('layouts.nb')

            <div id="page-wrapper" class="gray-bg">
                @include('layouts.topnavbar')
                <h2>Update Task</h2>
                <hr />
                <form class="m-t" method="post" action="{{ url('/employee/trytoupdatemytask') }}" enctype="multipart/form-data">
                	<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="hidden" value="{{ $data->id}}" id="id" name="id">
                	<table class="table table-striped" style="max-width: 50%">
						<tr>
							<th width="21%"><lable><font size="2">Task Name</font></lable></th>
							<td>: &nbsp;<font size="2">{{ $data->name}}</font></td>
						</tr>
	                	<tr>
	                		<th><lable><font size="2">Description</font></lable></th>
	                		<td>: &nbsp;<font size="2">{{ $data->body}}</font></td>
	                	</tr>
	                </table>
				        <div class="form-group">
				        	<div class="col-md-10" align="left"><label>Status</label></div>
				            <div class="col-md-10">
				            	<select class="form-control" id="status" name="status">
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