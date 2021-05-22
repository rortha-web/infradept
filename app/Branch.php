<?php

namespace App;
use App\Verify;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $table = 'branches';
    protected $fillable = ['name', 'fc_code', 'description'];
}
