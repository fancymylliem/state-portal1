<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Contentcreator extends Authenticatable
{
    use HasFactory;
    protected $guard = "creator";
    protected $table = "contentcreators";
    protected $primaryKey = "cc_id";
}
