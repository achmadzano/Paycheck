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
    public function showEmployeeAttendance()
    {
        $employee = Employee::join('attendance_records', 'employees.id', '=', 'attendance_records.employee_id')
            ->select('employees.*', 
                \DB::raw('TIME_FORMAT(attendance_records.check_in_time, "%H:%i:%s") as check_in_time'), 
                \DB::raw('TIME_FORMAT(attendance_records.check_out_time, "%H:%i:%s") as check_out_time'))
            ->get();

            $employeeAttendCount = attendance_record::whereNotNull('check_in_time')->count();
            $totalEmployeeCount = Employee::count();
            $employeeNotAttendCount = $totalEmployeeCount - $employeeAttendCount;
        
        return view('tracking_content', ['employee' => $employee, 'employeeAttendCount' => $employeeAttendCount, 
        'totalEmployeeCount' => $totalEmployeeCount,
        'employeeNotAttendCount' => $employeeNotAttendCount]);
    }

    // use App\Models\AttendanceRecord;

    
    public function showAttendCount()
    {
        $employeeAttendCount = AttendanceRecord::whereNotNull('check_in_time')->count();
        
    
        // Pass the variable to the view
        return View::make('dashboard_content')->with('employeeAttendCount', $employeeAttendCount);
    }
    
}
