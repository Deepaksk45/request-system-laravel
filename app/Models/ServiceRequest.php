<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class ServiceRequest extends Model {
    use HasFactory;

    protected $fillable = ['user_id', 'title', 'status', 'assigned_to', 'actions', 'duration', 'start_date', 'description'];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
