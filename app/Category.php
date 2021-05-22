<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Brand;
class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['name', 'description'];

    // public function brands(){
    //     return $this->hasMany(Brand::class);
    // }
}
