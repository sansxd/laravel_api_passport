<?php

namespace laravelito;

use Illuminate\Database\Eloquent\Model;
use laravelito\User;

class Article extends Model
{
    protected $table = 'articles';

    protected $fillable = ['title','body'];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
