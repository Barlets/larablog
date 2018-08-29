<?php

namespace App;

class Comment extends Model
{
    
    public function post()
    {
        return $this->hasOne(Post::class);
    }

}
