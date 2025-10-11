<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialPlatform extends Model
{
    protected $fillable = ['name'];

    public function socialLinks()
    {
        return $this->hasMany(UserSocialLink::class);
    }
}
