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
					    	<th>Name</th>
							<th>Username</th>
					        <th>Position</th>
					        <th>Email</th>
					        <th>Operation</th>
					    </tr>
					    <tbody id="myTable">
					        @foreach ($employees as $employee)
					            <tr>
					            	<td>
					                    {{ $employee->name }}
					                </td>
					                <td>
					                    {{ $employee->username }}
					                </td>
					                <td>
					                    {{ $employee->position }}
					                </td>
					                <td>
					                    {{ $employee->email }}
					                </td>
					                <td>
										<a href="/admin/employee/details/{{ $employee->id }}">Details</a> |
					                 
					                    <a href="/admin/employee/edit/{{ $employee->id }}">Edit</a> | 
					                
					                    <a href="/admin/employee/delete/{{ $employee->id }}">Delete</a>
					                </td>
					            </tr>
					        @endforeach
					    </tbody>
					</table>
					<br>
					<button class="btn btn-info block m-b" onclick="exportTableToCSV('employees.csv')">Export To CSV File</button>
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