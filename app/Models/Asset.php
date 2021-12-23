<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'serial_number', 'description', 'mode', 'picture_path', 'purchase_date', 'start_use_date', 'purchase_price', 'warranty_expiry_date', 'degradation', 'current_value', 'location'];

    protected $casts = [
        'purchase_date' => 'date',
        'start_use_date' => 'date',
        'warranty_expiry_date' => 'date',
    ];

    public function picture()
    {
        return $this->picture_path ? asset('storage/'.$this->picture_path) : '';
    }
}
