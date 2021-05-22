<?php

namespace App;
use App\Auth\User\User;
use Illuminate\Database\Eloquent\Model;
use App\Category;
class Brand extends Model
{
    protected $table = 'brands';
    protected $fillable = ['name', 'category_id', 'description'];

    public function category(){ //passed to BrandController in index function
        return $this->belongsTo(Category::class, 'category_id','id');
        // return $this->belongsTo(Category::class);
    }
}
