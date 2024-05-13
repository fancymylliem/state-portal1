<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profileform extends Model
{
    use HasFactory;
    protected $table ="profile_gov_cm_cj";
    protected $primaryKey="content_id";
    protected $fillable = [
        
        "name",
        "designation",
        "assume_office",
        "img_path",
        "dob",
        "birth_place",
        "education",
        "fathers_name",
        "mothers_name",
        "marital_status",
        "children",
        "profession",
        "pol_career",
        "soc_activities",
        "publications",
        "awards",
        "foreign_travels",
        "hobbies",
        "add_info",
        "address",
        "phone_no",
        "fax_no",
        "mobile_no",
        "email_id",
        "website",
        "language",
        "keyword",
        "publish"

    ];
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($profileform)
        {
            if($profileform->publish == 'Y'){
                $profileform->publish_on = now();
            }
        });
    }
}
