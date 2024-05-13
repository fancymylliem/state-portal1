<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Councilofminister extends Model
{
    use HasFactory;
    protected $table = "councilofministers";
    protected $primaryKey = "minister_id";
}
