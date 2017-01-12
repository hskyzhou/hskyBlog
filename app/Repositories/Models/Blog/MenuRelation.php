<?php

namespace App\Repositories\Models\Blog;

use Illuminate\Database\Eloquent\Model;

class MenuRelation extends Model
{
	protected $table = 'blog_menu_relations';
    protected $fillable = ['menu_id', 'menu_parent_id'];
}
