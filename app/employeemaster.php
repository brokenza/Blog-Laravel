<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employeemaster extends Model
{
    //
    protected $fillable = ['name','last','username','password','phone','role'];
    //protected $fillable = ['username','password'];
}
