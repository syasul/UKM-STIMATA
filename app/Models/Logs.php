<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logs extends Model
{
    protected $fillable = ['user_id', 'activity'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
