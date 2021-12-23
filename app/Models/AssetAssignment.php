<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssetAssignment extends Model
{
    use HasFactory;

    protected $fillable = ['asset_id', 'assignment_date', 'status', 'is_due', 'due_date', 'assigned_user_id', 'assigned_by'];

    protected $casts = [
        'assignment_date' => 'date',
        'due_date' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'assigned_by');
    }

    public function assigned_user()
    {
        return $this->belongsTo(User::class, 'assigned_user_id');
    }
    
    public function asset()
    {
        return $this->belongsTo(Asset::class);
    }
}