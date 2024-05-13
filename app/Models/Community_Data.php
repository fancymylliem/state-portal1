<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Community_Data extends Model
{
    use HasFactory;
    protected $table = "community__data";
    protected $primaryKey = "community_id";
}
