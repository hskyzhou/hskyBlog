<?php

namespace App\Repositories\Eloquent;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\Contracts\BlogMenuRelationRepository;
use App\Repositories\Models\BlogMenuRelation;
use App\Repositories\Validators\BlogMenuRelationValidator;

/**
 * Class BlogMenuRelationRepositoryEloquent
 * @package namespace App\Repositories\Eloquent;
 */
class BlogMenuRelationRepositoryEloquent extends BaseRepository implements BlogMenuRelationRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return BlogMenuRelation::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
