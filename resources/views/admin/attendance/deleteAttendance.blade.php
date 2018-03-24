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
                
                <center>
                	<h1 style="color: red">Are you sure to DELETE this Attendance ?</h1>
	                <hr />
	                <table class="table table-striped" style="max-width: 50%">
	                	<tr>
	                		<th><lable><font size="2">Date</font></lable></th>
	                		<td>: &nbsp;<font size="2">{{ $data->date}}</font></td>
	                	</tr>
	                	<tr>
	                		<th><lable><font size="2">Employee</font></lable></th>
	                		<td>: &nbsp;<font size="2">{{ $data->username}}</font></td>
	                	</tr>
	                	<tr>
	                		<th><lable><font size="2">In Time</font></lable></th>
	                		<td>: &nbsp;<font size="2">{{ $data->in}}</font></td>
	                	</tr>
	                	<tr>
	                		<th><lable><font size="2">Out Time</font></lable></th>
	                		<td>: &nbsp;<font size="2">{{ $data->out}}</font></td>
	                	</tr>
	                	<tr>
	                		<th><lable><font size="2">Created at</font></lable></th>
	                		<td>: &nbsp;<font size="2">{{ $data->created_at}}</font></td>
	                	</tr>
	                	<tr>
	                		<th><lable><font size="2">Updated at</font></lable></th>
	                		<td>: &nbsp;<font size="2">{{ $data->updated_at}}</font></td>
	                	</tr>
	                	<tr>
	                		<td colspan="2">
	                			<form class="m-t" method="post" action="{{ url('/admin/trytodeleteemployee') }}">
				                	<input type = "hidden" name = "_token" value = "{{ csrf_token() }}">
				                	<div class="form-horizontal">
				                		<input type="hidden" value="{{ $data->id}}" id="id" name="id">
								        <div class="form-group">
								            <input type="submit" class="btn btn-danger block full-width m-b" value="Delete"/>.
								        </div>
								    </div>
				                </form>
	                		</td>
	                	</tr>
	                </table>
                </center>

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