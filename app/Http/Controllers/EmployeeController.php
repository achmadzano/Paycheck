<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\employee_detail;
use App\Models\attendance_record;
use App\Models\payroll_record;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Join all tables
        $employee = Employee::leftJoin('attendance_records', 'employees.id', '=', 'attendance_records.employee_id')
        ->select('employees.*', 
            \DB::raw('TIME_FORMAT(attendance_records.check_in_time, "%H:%i:%s") as check_in_time'), 
            \DB::raw('TIME_FORMAT(attendance_records.check_out_time, "%H:%i:%s") as check_out_time'))
        ->whereNotNull('attendance_records.check_in_time') // Employees who have check-in times
        ->orWhereNull('attendance_records.check_in_time') // Employees who do not have check-in times
        ->get();
    
        $employeeAttendCount = attendance_record::whereNotNull('check_in_time')->count();
        $totalEmployeeCount = Employee::count();
        $employeeNotAttendCount = $totalEmployeeCount - $employeeAttendCount;
        $employeeLateCount = attendance_record::whereNotNull('check_in_time')->where('check_in_time', '>', '09:00:00')->count();
        
        return view('employee_management', [
            'employee' => $employee,
            'employeeAttendCount' => $employeeAttendCount,
            'totalEmployeeCount' => $totalEmployeeCount,
            'employeeNotAttendCount' => $employeeNotAttendCount,
            'employeeLateCount' => $employeeLateCount,
        ]);
        
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request -> validate([
        'name' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'address' => 'required',
        'hire_date' => 'required',
        'salary' => 'required',
        'job_title' => 'required',
        ]);
        $newEmployee = Employee::create($data);
        return redirect('/employee');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        $data = $request -> validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'hire_date' => 'required',
            'salary' => 'required',
            'job_title' => 'required',
            ]);
        $employee -> update($data);
        return redirect('/employee')->with('mssg', 'Employee Updated!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        // dd($employee);
        return view('edit', ['employee' => $employee]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $data = $request -> validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'hire_date' => 'required',
            'salary' => 'required',
            'job_title' => 'required',
            ]);
        $employee -> update($data);
        return redirect('/employee')->with('mssg', 'Employee Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect('/employee')->with('mssg', 'Employee Deleted!');

    }

    
}
