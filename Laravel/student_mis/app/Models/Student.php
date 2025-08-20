<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model {
    protected $table = 'tbl_student'; // custom table name
    protected $primaryKey = 'sid'; // custom primary key
    protected $fillable = ['name']; //protect from mass assignment hacking
    // public $timestamps = false; //set to false if you don't want it
}
