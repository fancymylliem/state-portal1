<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

// use App\Http\Middleware\Authenticate;

class Superadmin extends Authenticatable
{
    use HasFactory;
    protected $guard = "superadmin";
    protected $table = "superadmins";
    protected $primaryKey = "superadmin_id";
}
