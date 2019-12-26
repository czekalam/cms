<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = ['name','page_id','box_id','box_content'];
    public function project() 
    {
        return $this->belongsTo(Project::class);
    }
}
