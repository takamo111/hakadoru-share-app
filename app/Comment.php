<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    //

   protected $fillable = ['text', 'user_id', 'article_id'];

   public function user()
   {
       return $this->belongsTo('App\User');
   }

   public function article()
   {
       return $this->belongsTo('App\Article');
   }

}
