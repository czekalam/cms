<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['title','description'];
    public function sections() 
    {
        return $this->hasMany(Section::class);
    }
}
