<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'meta_title',
        'meta_description',
        'category_id',
        'title',
        'image',
        'description', 
        'subheading',        
    ];


     // Define an accessor to get the name attribute in uppercase
     public function getNameAttribute($value)
     {
         return strtoupper($value);
     }

    // Define a mutator to set the name attribute in uppercase
    public function setNameAttribute($value)
    {
        $this->attributes['title'] = strtoupper($value);
    }
}
