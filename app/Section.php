<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = ['name','page_id','box_id','box_content','html_class', 'html_id'];
    public function page() 
    {
        return $this->belongsTo(Page::class);
    }
    public function box() 
    {
        return $this->belongsTo(Box::class);
    }
}
