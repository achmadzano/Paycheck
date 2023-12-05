<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    public function employee_detail()
    {
        return $this->hasOne(employee_detail::class);
    }
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'hire_date',
        'salary',
        'job_title',
    ];
}
