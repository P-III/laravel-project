<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Students extends Model
{
    use HasFactory;
    protected $primaryKey = 'StudentId';
    protected $fillable = ['FirstName', 'LastName', 'Gender', 'DateOfBirth', 'ContactNumber', 'Email', 'Address', 'EnrollmentDate'];
}
