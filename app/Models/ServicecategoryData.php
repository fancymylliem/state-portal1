<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicecategoryData extends Model
{
    use HasFactory;
    protected $table="servicecategory_data";
    protected $primaryKey="service_id";
}
