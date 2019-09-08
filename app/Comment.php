<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Comment extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user', 'body', 
    ];

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
