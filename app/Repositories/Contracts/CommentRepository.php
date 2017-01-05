<?php

namespace App\Repositories\Contracts;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface CommentRepository
 * @package namespace App\Repositories\Contracts;
 */
interface CommentRepository extends RepositoryInterface
{
	/*获取最新4条评论*/
    public function last();
}
