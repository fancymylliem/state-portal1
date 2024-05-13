<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IasbatchData extends Model
{
    use HasFactory;
    protected $table = "iasbatch_data";
    protected $primaryKey = "iasbatch_id";
}
