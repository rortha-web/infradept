<?php

namespace App;
use App\Auth\User\User;
use Illuminate\Database\Eloquent\Model;
use App\Position;
use App\Branch;
use App\Group;
class Verify extends Model
{
    protected $table = 'verifies';
    protected $fillable = ['name', 'id_card', 'position_id', 'branch_id', 'group_id', 'phone', 'description'];
    
    public function position(){
        return $this->belongsTo(Position::class, 'position_id', 'id');
    }

    public function branch(){
        return $this->belongsTo(Branch::class, 'branch_id', 'id');
    }

    public function group(){
        return $this->belongsTo(Group::class, 'group_id', 'id');
    }
}
