<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documenttype extends Model
{
     use HasFactory;
    protected $table = "document_types";
    protected $primaryKey = "doc_type_id";
}
