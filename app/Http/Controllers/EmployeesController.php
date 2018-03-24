<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Input;
use File;

class EmployeesController extends Controller
{
	public function index(Request $request){
		if($request->session()->has('currentUser')){
    		$employees = DB::table('employees')->get();
			return view('admin.employees.index', ['employees' => $employees]);
        }
        else{
            return view('errors/unauthorized');
        }
    }

    public function getEmployee(Request $request, $id){
        if($request->session()->has('currentUser')){
            $data = DB::table('employees')->where('id', $id)->first();
            return view('admin.employees.detailsEmployee', ['data' => $data]);
        }
        else{
            return view('errors/unauthorized');
        }
    }

    public function editEmployee(Request $request, $id){
        if($request->session()->has('currentUser')){
            $data = DB::table('employees')->where('id', $id)->first();
            return view('admin.employees.editEmployee', ['data' => $data]);
        }
        else{
            return view('errors/unauthorized');
        }
    }

    public function addEmployee(Request $request){
		if($request->session()->has('currentUser')){
    		return view('admin.employees.addEmployee');
        }
        else{
            return view('errors/unauthorized');
        }
    }

    public function deleteEmployee(Request $request, $id){
        if($request->session()->has('currentUser')){
            $data = DB::table('employees')->where('id', $id)->first();
            return view('admin.employees.deleteEmployee', ['data' => $data]);
        }
        else{
            return view('errors/unauthorized');
        }
    }

    public function create(Request $request){
		if($request->session()->has('currentUser')){
            $name = $request->input('name');
            $username = $request->input('username');
    		$position = $request->input('position');
            $admin = $request->input('admin');
    		$email = $request->input('email');
            $password = $request->input('password');


            date_default_timezone_set('Asia/Dhaka');
            $date = date('Y-m-d H:i:s', time());

            $data = array('name' => $name, 'username' => $username, 'position' => $position, 'admin' => $admin, 'email' => $email, 'password' => $password, 'created_at' => $date, 'updated_at' => $date);

            if(DB::table('employees')->insert($data)){
                return redirect('/admin/employees');
            }
            else{
                var_dump(DB::table('employees')->insert($data));
            }

            return redirect('/admin/employees');
        }
        else{
            return view('errors/unauthorized');
        }
    }

    public function update(Request $request){
        if($request->session()->has('currentUser')){
            $id = $request->input('id');
            $name = $request->input('name');
            $username = $request->input('username');
            $position = $request->input('position');
            $admin = $request->input('admin');
            $email = $request->input('email');
            $password = $request->input('password');

            date_default_timezone_set('Asia/Dhaka');
            $date = date('Y-m-d H:i:s', time());

            $data = array('name' => $name, 'username' => $username, 'position' => $position, 'admin' => $admin, 'email' => $email, 'password' => $password, 'updated_at' => $date);

            if(DB::table('employees')->where('id', $id)->update($data)){
                return redirect('/admin/employees');
            }
            else{
                var_dump(DB::table('employees')->where('id', $id)->update($data));
            }
        }
        else{
            return view('errors/unauthorized');
        }
    }

    public function delete(Request $request){
        if($request->session()->has('currentUser')){
            $id = $request->input('id');

            DB::table('employees')->where('id', '=', $id)->delete();

            return redirect('/admin/employees');
        }
        else{
            return view('errors/unauthorized');
        }
    }
}
