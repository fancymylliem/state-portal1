<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keycontact extends Model
{
    use HasFactory;
    protected $table = 'keycontacts';
    protected $primaryKey = 'contact_id';
}
