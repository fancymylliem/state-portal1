<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Constituency_Data extends Model
{
    use HasFactory;
    protected $table= "constituency__data";
    protected $primaryKey="constituency_id";
}
