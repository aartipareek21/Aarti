<?php

namespace App\Models;
use App\Models\Project;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable=['name','price','due_date','desc'];
}
