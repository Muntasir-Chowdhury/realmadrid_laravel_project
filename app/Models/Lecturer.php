<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    use HasFactory;
      protected $fillable = [ 'lecturer_id', 'lecturer_name', 'faculty','gender'];
}
