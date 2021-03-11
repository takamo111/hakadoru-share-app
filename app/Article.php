<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Article extends Model
{
    public function user(): BelongsTo
    {
        return $this->belongsTo('App\User');

    }

    public function likes(): BelongsToMany
    {
        return $this->belongsToMany('App\User', 'likes')->withTimestamps();
    }

    public function comments(): hasMany
    {
        return $this->hasMany('App\User', 'likes')->withTimestamps();
    }



    
    public function isLikedBy(?User $user): bool
    {
        return $user
            ? (bool)$this->likes->where('id', $user->id)->count()
            : false;
    }
    public function getCountLikesAttribute(): int
    {
        return $this->likes->count();
    }

    protected $fillable = [
        'title', 'body', 'image_url',
    ];
}
