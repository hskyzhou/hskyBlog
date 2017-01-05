<?php

namespace App\Repositories\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Article extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
    	'name', 'short_name', 'markdown', 'html', 'creator_id', 'status', 'created_at', 'updated_at',
    ];

    /*scope*/
    public function user(){
    	return $this->hasOne(\App\User::class, 'id', 'creator_id');
    }
}
