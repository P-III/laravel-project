<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Dtabase\Eloquent\Factories\HasFactory;

class Attendance extends Model
{
    use HasFactory;
    protected $fillable=['AttendaceStatus'];
}
