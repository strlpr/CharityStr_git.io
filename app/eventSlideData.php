<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class eventSlideData extends Model
{
    
    protected $table = 'event_slide_save';
    protected $fillable = ['image','content'];
}
