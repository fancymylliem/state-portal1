<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Circularom extends Model
{
    use HasFactory;
    protected $table = "circularoms";
    protected $primaryKey = "circularom_id";
}
