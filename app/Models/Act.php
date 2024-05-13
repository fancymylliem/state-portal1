<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Act extends Model
{
    use HasFactory;
    protected $table = "acts";
    protected $primaryKey = "act_id";
    protected $fillable = [
        "dept_id",
        "title",
        "number",
        "year",
        "short_title",
        "extent",
        "commencement_date",
        "act_objective",
        "language",
        "url",
        "pdf",
        "keywords",
        "status",
        "district"
    ];
}
