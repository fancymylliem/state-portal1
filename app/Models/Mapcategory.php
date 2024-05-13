<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapcategory extends Model
{
    use HasFactory;
    protected $table = "mapcategory";
    protected $primaryKey = "content_id";
    protected $fillable = [
        'title',
        'path',
        'pdf',
        'map_id',
        'dist_id',
        'map_description',
        'keyword',
        'language',
        'create_by',
        'publish',
        'publish_on',
        'availability_name'
    ];
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($mapcategory)
        {
            if($mapcategory->publish == 'Y'){
                $mapcategory->publish_on = now();
            }
        });
    }
}
