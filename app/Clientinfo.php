<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientinfo extends Model
{
    public $table = 'clientinfo';
    public $timestamps = false;
    public $primaryKey = 'clinetinfoid';
}