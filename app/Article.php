<?php

namespace laravelito;

use Illuminate\Database\Eloquent\Model;
use laravelito\User;

class Article extends Model
{
    protected $table = 'articles';

    protected $fillable = ['title', 'body'];
    protected $hidden = ['created_at', 'updated_at'];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
