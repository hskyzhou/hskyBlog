<?php

namespace App\Repositories\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Comment extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
    	'commentor', 'article_id', 'comment', 'deleted_at', 'created_at', 'updated_at',
    ];

    protected $softDelete = true;

    public function article(){
    	return $this->hasOne(Article::class, 'id', 'article_id');
    }

}
