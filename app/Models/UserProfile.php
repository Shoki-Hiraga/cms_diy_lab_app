<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $fillable = ['user_id', 'profile', 'profile_image_url'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
