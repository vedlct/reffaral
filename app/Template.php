<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    public $table = 'template';
    public $timestamps = false;
    public $primaryKey = 'templateid';
}