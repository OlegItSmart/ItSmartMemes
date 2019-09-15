<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Transliterate;

class Post extends Model
{
    protected $fillable = [
        'id','title','content','description','slug', 'author',
    ];
    protected $with =['user'];
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public static function boot()
    {
        parent::boot();
        static::saving(function ($model) {
            $model->slug = Transliterate::slugify($model->title.'_'.$model->id);
        });
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'author');
    }
}
