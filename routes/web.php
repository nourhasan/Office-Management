<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//************************ Login Route Start *****************************
Route::get('/', 'LoginController@index');
Route::post('/trytologin',array('uses'=>'LoginController@login'));
//************************** Login Route End *****************************



//************************ Logout Route Start *****************************
Route::get('/logout','LogoutController@index');
//************************ Logout Route End *****************************



//************************ Admin Route Start *****************************
Route::get('/admin', 'AdminController@index');
//************************ Admin Route End *****************************



//************************ Employee Route Start *****************************
Route::get('/employee', 'EmployeeController@index');
//************************ Employee Route End *****************************



//************************ Employees Route Start *****************************
Route::get('/admin/employees','EmployeesController@index');
Route::get('/admin/addemployee','EmployeesController@addEmployee');
Route::get('/admin/employee/details/{id}','EmployeesController@getEmployee');
Route::get('/admin/employee/edit/{id}','EmployeesController@editEmployee');
Route::get('/admin/employee/delete/{id}','EmployeesController@deleteEmployee');

Route::post('/admin/trytoaddemployee','EmployeesController@create');
Route::post('/admin/trytoupdateemployee',array('uses'=>'EmployeesController@update'));
Route::post('/admin/trytodeleteemployee',array('uses'=>'EmployeesController@delete'));
//************************ Employees Route End *****************************



//************************ Tasks Route Start *****************************
Route::get('/admin/tasks','TasksController@index');
Route::get('/admin/mytasks','TasksController@adminTasks');
Route::get('/employee/mytasks','TasksController@employeeTasks');
Route::get('/admin/addtask','TasksController@addTask');
Route::get('/admin/task/details/{id}','TasksController@getTask');
Route::get('/admin/task/edit/{id}','TasksController@editTask');
Route::get('/employee/task/details/{id}','TasksController@getTaskOfEmployee');
Route::get('/employee/task/edit/{id}','TasksController@editTaskOfEmployee');
Route::get('/admin/task/delete/{id}','TasksController@deleteTask');

Route::post('/admin/trytoaddtask','TasksController@create');
Route::post('/admin/trytoupdatetask',array('uses'=>'TasksController@update'));
Route::post('/admin/trytoupdatemytask',array('uses'=>'TasksController@update'));
Route::post('/employee/trytoupdatemytask',array('uses'=>'TasksController@employeeTaskUpdate'));
Route::post('/admin/trytodeletetask',array('uses'=>'TasksController@delete'));
//************************ Tasks Route End *****************************



//************************ Attendance Route Start *****************************
Route::get('/admin/attendance','AttendanceController@index');
Route::get('/admin/attendances','AttendanceController@all');
Route::get('/admin/attendance/search', function () {
    return view('admin/attendance/search');
});
Route::get('/admin/addattendance','AttendanceController@addAttendance');
Route::get('/admin/attendance/details/{id}','AttendanceController@getAttendance');
Route::get('/admin/attendance/edit/{id}','AttendanceController@editAttendance');
Route::get('/admin/attendance/delete/{id}','AttendanceController@deleteAttendance');

Route::post('/admin/trytoaddattendance','AttendanceController@create');
Route::post('/admin/trytoupdateattendance',array('uses'=>'AttendanceController@update'));
Route::post('/admin/trytodeleteattendance',array('uses'=>'AttendanceController@delete'));
Route::post('/admin/attendance/byDate','AttendanceController@searchByDate');
Route::post('/admin/attendance/byMonth','AttendanceController@searchByMonth');
Route::post('/admin/attendance/byYear','AttendanceController@searchByYear');
Route::post('/admin/attendance/byUsername','AttendanceController@searchByUsername');
//************************ Attendance Route End *****************************