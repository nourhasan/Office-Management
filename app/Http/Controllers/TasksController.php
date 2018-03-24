<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Input;
use File;

class TasksController extends Controller
{
    public function index(){
        $tasks = DB::table('tasks')->get();
        return view('admin.tasks.index', ['tasks' => $tasks]);
    }

    public function getTask(Request $request, $id){
        if($request->session()->has('currentUser')){
            $data = DB::table('tasks')->where('id', $id)->first();
            return view('admin.tasks.detailsTask', ['data' => $data]);
        }
        else{
            return view('errors/unauthorized');
        }
    }

    public function getTaskOfEmployee(Request $request, $id){
        if($request->session()->has('currentUser')){
            $data = DB::table('tasks')->where('id', $id)->first();
            return view('employee.tasks.detailsTask', ['data' => $data]);
        }
        else{
            return view('errors/unauthorized');
        }
    }

    public function adminTasks(Request $request){
        if($request->session()->has('currentUser')){
            $data = DB::table('tasks')->where('to', session('currentUser'))->get();
            return view('admin.tasks.myTasks', ['tasks' => $data]);
        }
        else{
            return view('errors/unauthorized');
        }
    }

    public function employeeTasks(Request $request){
        if($request->session()->has('currentUser')){
            $data = DB::table('tasks')->where('to', session('currentUser'))->get();
            return view('employee.tasks.myTasks', ['tasks' => $data]);
        }
        else{
            return view('errors/unauthorized');
        }
    }

    public function editTask(Request $request, $id){
        if($request->session()->has('currentUser')){
            $data = DB::table('tasks')->where('id', $id)->first();
            return view('admin.tasks.editTask', ['data' => $data]);
        }
        else{
            return view('errors/unauthorized');
        }
    }

    public function editTaskOfEmployee(Request $request, $id){
        if($request->session()->has('currentUser')){
            $data = DB::table('tasks')->where('id', $id)->first();
            return view('employee.tasks.editTask', ['data' => $data]);
        }
        else{
            return view('errors/unauthorized');
        }
    }

    public function addTask(Request $request){
        if($request->session()->has('currentUser')){
            return view('admin.tasks.addTask');
        }
        else{
            return view('errors/unauthorized');
        }
    }

    public function deleteTask(Request $request, $id){
        if($request->session()->has('currentUser')){
            $data = DB::table('tasks')->where('id', $id)->first();
            return view('admin.tasks.deleteTask', ['data' => $data]);
        }
        else{
            return view('errors/unauthorized');
        }
    }

    public function create(Request $request){
        if($request->session()->has('currentUser')){
            $name = $request->input('name');
            $from = $request->input('from');
            $to = $request->input('to');
            $body = $request->input('body');
            $duration = $request->input('duration');
            $status = $request->input('status');


            date_default_timezone_set('Asia/Dhaka');
            $date = date('Y-m-d H:i:s', time());

            $data = array('name' => $name, 'from' => $from, 'to' => $to, 'body' => $body, 'duration' => $duration, 'status' => $status, 'created_at' => $date, 'updated_at' => $date);
            DB::table('tasks')->insert($data);

            return redirect('/admin/tasks');
        }
        else{
            return view('errors/unauthorized');
        }
    }

    public function update(Request $request){
        if($request->session()->has('currentUser')){
            $name = $request->input('name');
            $id = $request->input('id');
            $from = $request->input('from');
            $to = $request->input('to');
            $body = $request->input('body');
            $duration = $request->input('duration');
            $status = $request->input('status');

            date_default_timezone_set('Asia/Dhaka');
            $date = date('Y-m-d H:i:s', time());

            $data = array('name' => $name, 'from' => $from, 'to' => $to, 'body' => $body, 'duration' => $duration, 'status' => $status, 'updated_at' => $date);
            DB::table('tasks')->where('id', $id)->update($data);

            return redirect('/admin/tasks');
        }
        else{
            return view('errors/unauthorized');
        }
    }

    public function employeeTaskUpdate(Request $request){
        if($request->session()->has('currentUser')){
            $id = $request->input('id');
            $status = $request->input('status');

            date_default_timezone_set('Asia/Dhaka');
            $date = date('Y-m-d H:i:s', time());

            $data = array('status' => $status, 'updated_at' => $date);
            DB::table('tasks')->where('id', $id)->update($data);

            return redirect('/employee/mytasks');
        }
        else{
            return view('errors/unauthorized');
        }
    }

    public function delete(Request $request){
        if($request->session()->has('currentUser')){
            $id = $request->input('id');
            DB::table('tasks')->where('id', '=', $id)->delete();
            return redirect('/admin/tasks');
        }
        else{
            return view('errors/unauthorized');
        }
    }
}
