<?php

namespace App;
use App\Verify;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $table = 'positions';
    protected $fillable = ['name', 'description'];
}
