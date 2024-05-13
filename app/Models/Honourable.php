<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Honourable extends Model
{
    use HasFactory;
    protected $table = "honourables";
    protected $primaryKey = "hon_id";
}
