<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Box extends Model
{
    protected $fillable = ['name','structure','form'];
    public function sections() 
    {
        return $this->hasMany(Section::class);
    }
}
