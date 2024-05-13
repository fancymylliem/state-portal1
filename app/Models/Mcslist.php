<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mcslist extends Model
{
    use HasFactory;
    protected $table = "mcslists";
    protected $primaryKey = "mcs_id";
}
