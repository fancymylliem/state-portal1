<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Departmentadmin extends Authenticatable
{
    use HasFactory;
    protected $guard = "departmentadmin";
    protected $table = "departmentadmins";
    protected $primaryKey = "admin_id";
}
