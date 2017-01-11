<?php

namespace App\Repositories\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class BlogMenuRelation extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = ['menu_id', 'menu_parent_id'];

}
