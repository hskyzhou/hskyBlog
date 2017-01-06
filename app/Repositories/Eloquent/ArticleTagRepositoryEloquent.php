<?php

namespace App\Repositories\Eloquent;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\Contracts\ArticleTagRepository;
use App\Repositories\Models\ArticleTag;
use App\Repositories\Validators\ArticleTagValidator;

/**
 * Class ArticleTagRepositoryEloquent
 * @package namespace App\Repositories\Eloquent;
 */
class ArticleTagRepositoryEloquent extends BaseRepository implements ArticleTagRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ArticleTag::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
