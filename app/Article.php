<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Article extends Model
{

    use Sortable; 
    public $sortable = ['id', 'title', 'created_at', 'updated_at','likes_count'];

      
    public function user(): BelongsTo
    {
        return $this->belongsTo('App\User');

    }


    public function likes(): BelongsToMany
    {
        return $this->belongsToMany('App\User', 'likes')->withTimestamps();
    }

    public function comments()
    {
      return $this->hasMany('App\Comment');
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


    public function likesCountSortable($query, $direction)
    {
            return $query->orderBy('likes_count', $direction);
    }

    protected $fillable = [
        'title', 'body', 'article_rating','r_image_url_a','r_image_url_b','r_image_url_c', 'r_name','r_caption','r_item_url','r_price','r_shop','r_code'
    ];
}

