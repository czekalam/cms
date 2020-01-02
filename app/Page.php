<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['name', 'html_class', 'html_id'];
    public function sections() 
    {
        return $this->hasMany(Section::class);
    }
}
