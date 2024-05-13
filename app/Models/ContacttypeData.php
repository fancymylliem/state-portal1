<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContacttypeData extends Model
{
    use HasFactory;
    protected $table = "contacttype_data";
    protected $primaryKey = "contact_id";
}
