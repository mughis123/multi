<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Employee;
class employeeController extends Controller
{
    public function index() {
        $employee = DB::table('employees')->
        join('positions','positions.id','=','employees.gender_id')->
        join('genders','genders.id','=','employees.position_id')->
        get();
        $gender = DB::table('genders')->get();
        $position = DB::table('positions')->get();
        return view('home',['employees'=>$employee,'positions'=>$position,'genders'=>$gender]);
    }

    public function save(Request $req) {
        $employee = new Employee;
        $employee->name = $req->name;
        $employee->gender_id = $req->gender;
        $employee->position_id = $req->position;
        $employee->save();
        return redirect('/');
    }
}
