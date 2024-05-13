<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galleryvideo extends Model
{
    use HasFactory;
    protected $table = "galleryvideos";
    protected $primaryKey = "video_id";
}
