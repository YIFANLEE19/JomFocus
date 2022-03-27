<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IUrgent extends Model
{
    use HasFactory;
    protected $fillable=['userID','title','time'];

    public function user(){
        return $this->hasMany('App\Models\User');
    }
}
 