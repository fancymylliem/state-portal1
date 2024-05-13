<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iaslist extends Model
{
    use HasFactory;
    protected $table = "iaslists";
    protected $primaryKey = "ias_id";
}
