<?php

namespace App\Repositories\Models\Blog;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

use App\Repositories\Models\Permission;

class Menu extends Model implements Transformable
{
    use TransformableTrait;

    protected $table = 'blog_menus';
    protected $fillable = ['title', 'slug', 'route', 'status', 'desc', 'uri', 'high_uri'];

    public function parentMenu(){
    	return $this->belongsToMany(Menu::class, 'blog_menu_relations', 'blog_menu_id', 'parent_blog_menu_id');
    }

    public function sonMenus(){
    	return $this->belongsToMany(Menu::class, 'blog_menu_relations', 'parent_blog_menu_id', 'blog_menu_id')
                    ->withPivot('sort')
                    ->orderBy('pivot_sort', 'asc');
    }

    public function activeSonMenus(){
        return $this->belongsToMany(Menu::class, 'blog_menu_relations', 'parent_blog_menu_id', 'blog_menu_id')
                    ->where('status', getStatusActive())
                    ->withPivot('sort')
                    ->orderBy('pivot_sort', 'asc');
    }

    public function permission(){
    	return $this->hasOne(Permission::class, 'slug', 'slug');
    }
}
