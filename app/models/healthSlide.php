<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class healthSlide extends Model
{
    protected $table = 'health_slide_save';
    protected $fillable = ['image','content'];
}
