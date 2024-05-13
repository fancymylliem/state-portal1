<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avalability extends Model
{
    use HasFactory;
    protected $table ="availabilities";
    protected $primaryKey="id";
}
