<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{

    protected $table = "students";

    // protected $fillable = ['fname', 'mname', 'lname', 'suffix', 'gender', 'birthday'];

    // protected $primaryKey ='id';
    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory;
}
