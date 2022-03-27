<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Note extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $fillable=['notebookID','title','image','body'];

    public function Notebook(){
        return $this->hasMany('App\Models\Notebook');
    }
}
