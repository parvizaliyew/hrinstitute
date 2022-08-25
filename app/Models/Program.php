<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Program extends Model
{
    use HasFactory;
    use Translatable;
    protected $translatable = ['name','title','desc', 'course_time'];
}
