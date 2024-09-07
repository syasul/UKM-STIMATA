<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ukm extends Model
{
    protected $fillable = ['name', 'description', 'profile_photo'];

    public function members()
    {
        return $this->belongsToMany(User::class, 'ukm_user')->withTimestamps();
    }

    public function activities()
    {
        return $this->hasMany(Activity::class);
    }

    public function kas()
    {
        return $this->hasMany(Kas::class);
    }

    public function absences()
    {
        return $this->hasManyThrough(Attendances::class, Activity::class);
    }
}
