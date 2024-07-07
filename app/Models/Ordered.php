<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordered extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'ordered';

    protected $fillable = [
        'lego_name',
        'lego_image',
        'lego_desc',
        'quantity',
        'price',
        'into_money',
        'status',
        'time_order',
    ];

    // Các phương thức và quan hệ khác của class "Lego" có thể được thêm vào đây
}
