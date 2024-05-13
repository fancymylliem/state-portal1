<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spotlight extends Model
{
    use HasFactory;
    protected $table ="spotlights";
    protected $primaryKey="content_id";
    protected $fillable = [
        
        "title",
        "description",
        "language",
        "url",
        "pdf",
        "keywords",
        "status",
        "publish"
    ];
}
