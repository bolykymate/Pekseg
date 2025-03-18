<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cim extends Model
{
    use HasFactory;
    public $table = 'cimek';
    public $timestamps = false;
    public $guarded = [];
}

