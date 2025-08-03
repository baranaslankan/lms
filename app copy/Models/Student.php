<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory; 

    // You can also define fillable or guarded properties here if needed
    // protected $fillable = ['name', 'email', 'student_id', 'major'];
}