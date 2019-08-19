<?php

namespace laravelito;

use Illuminate\Database\Eloquent\Model;
use laravelito\User;

class Article extends Model
{
    protected $fillable = ['title','body'];

    public function users()
    {
        return $this->hasOne(User::class);
    }
}
