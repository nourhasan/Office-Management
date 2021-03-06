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
                	<h1>Details Task</h1>
	                <hr />
	                <table class="table table-striped" style="max-width: 50%">
						<tr>
							<th width="21%"><lable><font size="2">Task Name</font></lable></th>
							<td>: &nbsp;<font size="2">{{ $data->name}}</font></td>
						</tr>
						<tr>
	                		<th><lable><font size="2">Assigned To</font></lable></th>
	                		<td>: &nbsp;<font size="2">{{ $data->to}}</font></td>
	                	</tr>
	                	<tr>
	                		<th><lable><font size="2">Assigned From</font></lable></th>
	                		<td>: &nbsp;<font size="2">{{ $data->from}}</font></td>
	                	</tr>
	                	<tr>
	                		<th><lable><font size="2">Description</font></lable></th>
	                		<td>: &nbsp;<font size="2">{{ $data->body}}</font></td>
	                	</tr>
	                	<tr>
	                		<th><lable><font size="2">Duration</font></lable></th>
	                		<td>: &nbsp;<font size="2">{{ $data->duration}}</font></td>
	                	</tr>
	                	<tr>
	                		<th><lable><font size="2">Status</font></lable></th>
	                		<td>: &nbsp;<font size="2">{{ $data->status}}</font></td>
	                	</tr>
						<tr>
							<th><lable><font size="2">Created at</font></lable></th>
							<td>: &nbsp;<font size="2">{{ $data->created_at}}</font></td>
						</tr>
						<tr>
							<th><lable><font size="2">Updated at</font></lable></th>
							<td>: &nbsp;<font size="2">{{ $data->updated_at}}</font></td>
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