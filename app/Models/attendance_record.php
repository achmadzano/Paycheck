<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class attendance_record extends Model
{
    use HasFactory;
    public function employee_detail()
    {
        return $this->belongsTo(employee_detail::class);
    }
}
