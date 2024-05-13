<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchemenameData extends Model
{
    use HasFactory;
    protected $table="schemename_data";
    protected $primaryKey="scheme_id";
}
