<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Box extends Model
{
    protected $fillable = ['name','box_open','box_close','box_form'];
    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
