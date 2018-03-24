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
                    <table class="table table-hover table-bordered">
					    <tr>
							<th>Task Name</th>
					    	<th>Assigned From</th>
					        <th>Duration</th>
					        <th>Status</th>
							<th>Operations</th>
					    </tr>
					    <tbody id="myTable">
					        @foreach ($tasks as $task)
					            <tr>
					            	<td>
					                    {{ $task->name }}
					                </td>
					            	<td>
					                    {{ $task->from }}
					                </td>
					                <td>
					                    {{ $task->duration }}
					                </td>
					                <td>
					                    {{ $task->status }}
					                </td>
					                <td>
					                    <a href="/admin/task/details/{{ $task->id }}">Details</a> | 
					                
					                    <a href="/admin/task/edit/{{ $task->id }}">Edit</a> | 
					                
					                    <a href="/admin/task/delete/{{ $task->id }}">Delete</a>
					                </td>
					            </tr>
					        @endforeach
					    </tbody>
					</table>
					<br>
					<button class="btn btn-info block m-b" onclick="exportTableToCSV('tasks.csv')">Export To CSV File</button>
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