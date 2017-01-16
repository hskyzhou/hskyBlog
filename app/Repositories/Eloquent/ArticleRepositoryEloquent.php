<?php

namespace App\Repositories\Eloquent;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\Contracts\ArticleRepository;
use App\Repositories\Models\Article;
use App\Repositories\Validators\ArticleValidator;

use App\Traits\EloquentTrait;

/**
 * Class ArticleRepositoryEloquent
 * @package namespace App\Repositories\Eloquent;
 */
class ArticleRepositoryEloquent extends BaseRepository implements ArticleRepository
{
    use EloquentTrait;
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Article::class;
    }

    public function last(){
        $this->applyCriteria();
        $this->applyScope();

        $results = $this->model->with(['user'])->limit(6)->get();
        $this->resetModel();
        return $results;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
