<?php

namespace App\Repositories\Criteria\Role;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class StatusActiveCriteria
 * @package namespace App\Repositories\Criteria\Role;
 */
class StatusActiveCriteria implements CriteriaInterface
{
    /**
     * Apply criteria in query repository
     *
     * @param                     $model
     * @param RepositoryInterface $repository
     *
     * @return mixed
     */
    public function apply($model, RepositoryInterface $repository)
    {
        return $model->where('status', getStatusActive());
    }
}
