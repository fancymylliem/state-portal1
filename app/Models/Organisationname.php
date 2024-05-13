<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organisationname extends Model
{
    use HasFactory;
    protected $table = "organisationnames";
    protected $primaryKey = "org_name_id";
}
