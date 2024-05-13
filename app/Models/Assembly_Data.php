<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assembly_Data extends Model
{
    use HasFactory;
    protected $table = "assembly__data";
    protected $primaryKey = "assembly_id";
}
