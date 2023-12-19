<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Employee;
use App\Models\employee_detail;
use App\Models\attendance_record;
use App\Models\payroll_record;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;



class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function showEmployee(){
        $employee = Employee::all();
        $employeeAttendCount = attendance_record::whereNotNull('check_in_time')->count();
        $totalEmployeeCount = Employee::count();
        $employeeNotAttendCount = $totalEmployeeCount - $employeeAttendCount;
        return view('dashboard_content' , ['employee' => $employee, 
        'employeeAttendCount' => $employeeAttendCount, 
        'totalEmployeeCount' => $totalEmployeeCount,
        'employeeNotAttendCount' => $employeeNotAttendCount]);
    }
    // show employee and join table with attendance record
    // public function showEmployeeAttendance()
    // {
    //     $employee = Employee::join('attendance_records', 'employees.id', '=', 'attendance_records.employee_id')
    //         ->select('employees.*', 
    //             \DB::raw('TIME_FORMAT(attendance_records.check_in_time, "%H:%i:%s") as check_in_time'), 
    //             \DB::raw('TIME_FORMAT(attendance_records.check_out_time, "%H:%i:%s") as check_out_time'))
    //         ->get();

    //         $employeeAttendCount = attendance_record::whereNotNull('check_in_time')->count();
    //         $totalEmployeeCount = Employee::count();
    //         $employeeNotAttendCount = $totalEmployeeCount - $employeeAttendCount;
        
    //     return view('tracking_content', ['employee' => $employee, 'employeeAttendCount' => $employeeAttendCount, 
    //     'totalEmployeeCount' => $totalEmployeeCount,
    //     'employeeNotAttendCount' => $employeeNotAttendCount]);
    // }

    

    public function showTrackingContent()
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
        
        return view('tracking_content', [
            'employee' => $employee,
            'employeeAttendCount' => $employeeAttendCount,
            'totalEmployeeCount' => $totalEmployeeCount,
            'employeeNotAttendCount' => $employeeNotAttendCount,
            'employeeLateCount' => $employeeLateCount,
        ]);
        
    
    }

    // use App\Models\AttendanceRecord;

    
    public function showAttendCount()
    {
        $employeeAttendCount = AttendanceRecord::whereNotNull('check_in_time')->count();
        
    
        // Pass the variable to the view
        return View::make('dashboard_content')->with('employeeAttendCount', $employeeAttendCount);
    }

    // public function showEmployeeDetail()
    // {
    //     $employee_details = DB::table('employee_details')
    //         ->join('employees', 'employee_details.employee_id', '=', 'employees.id')
    //         ->join('payroll_records', 'employee_details.payroll_record_id', '=', 'payroll_records.id')
    //         ->join('attendance_records', 'employee_details.attendance_record_id', '=', 'attendance_records.id')
    //         ->select('employee_details.*', 'employees.*', 'payroll_records.*', 'attendance_records.*')
    //         ->get();
    
    //     return view('employee_management', ['employee' => $employee_details]);
    // }
    
    
    //make controller for showing this in employee management
    // name: "Jacob", department: "IT", age: "29", gross_salary: "$1900", net: "$1800", status: "Intern" 

}
