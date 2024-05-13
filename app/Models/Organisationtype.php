<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organisationtype extends Model
{
    use HasFactory;
    protected $table = "organisationtypes";
    protected $primaryKey = "org_type_id";
}
