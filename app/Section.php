<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = ['title','description','page_id'];
    public function project() 
    {
        return $this->belongsTo(Project::class);
    }
}
