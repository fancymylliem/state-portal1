<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galleryimage extends Model
{
    use HasFactory;
    protected $table = "galleryimages";
    protected $primaryKey = "image_id";
}
