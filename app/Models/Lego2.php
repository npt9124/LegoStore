<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lego2 extends Model
{
    use HasFactory;

    protected $primaryKey = 'lego_id';
    protected $table = 'lego2';

    protected $fillable = [
        'lego_name',
        'lego_image',
        'price',
    ];

    // Các phương thức và quan hệ khác của class "Lego" có thể được thêm vào đây
}
