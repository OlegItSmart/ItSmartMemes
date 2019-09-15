<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
use Notifiable;

class Comment extends Model
{
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'user_id', 'body','post_id' 
        
    ];
    protected $with = ['user'];
    public function post()
  {
    return $this->belongsTo('App\Post');
  }
 
  public function user()
  {
    return $this->belongsTo('App\User');
  }


  public static function boot()
    {
        parent::boot();
        static::saving(function ($model) {
            $model->user_id = Auth::user()->id;
        });
    }
}
