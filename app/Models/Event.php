<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Event extends Model
{
    use HasFactory;
    use Translatable;
    protected $translatable = ['title', 'desc','about_form','form_consept','form_detail','important_event'];
}
