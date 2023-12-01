<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee_detail extends Model
{
    use HasFactory;
    public function payroll_record()
    {
        return $this->hasMany(payroll_record::class);
    }
    
    public function attendance_record()
    {
        return $this->hasMany(attendance_record::class);
    }

    public function employee()
    {
        return $this->belongsTo(employee::class);
    }
}
