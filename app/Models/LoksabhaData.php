<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoksabhaData extends Model
{
    use HasFactory;
    protected $table = "loksabha_data";
    protected $primaryKey="loksabha_id";
}
