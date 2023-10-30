<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provide extends Model
{
    use HasFactory;
    protected $fillable = [
        'title','sub_title','provide_title','provide_sub_title','provide_image',
    ];
}
