<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendances extends Model
{
    protected $fillable = ['activity_id', 'user_id', 'is_present'];

    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
