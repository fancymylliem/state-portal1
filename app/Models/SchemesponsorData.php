<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchemesponsorData extends Model
{
    use HasFactory;
    protected $table="schemesponsor_data";
    protected $primaryKey="schsponsor_id";
}
