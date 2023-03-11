<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Towns extends Model
{
    use HasFactory;

    protected $fillable = ['town', 'slug', 'latitude', 'longitude'];
}
