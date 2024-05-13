<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotificationcategoryData extends Model
{
    use HasFactory;
    protected $table = "notificationcategory_data";
    protected $primaryKey = "notification_id";

}
