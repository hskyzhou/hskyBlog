<?php

namespace App\Repositories\Eloquent;

use Illuminate\Container\Container as Application;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\Contracts\roleRepository;
use App\Repositories\Models\Role;
use App\Validators\RoleValidator;

use LaraveRedis, Carbon\Carbon;
/**
 * Class RoleRepositoryEloquent
 * @package namespace App\Repositories\Eloquent;
 */
class RoleRepositoryEloquent extends BaseRepository implements RoleRepository{
    public function __construct(Application $app){
        parent::__construct($app);
    }

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Role::class;
    }

    /* 权限datatables */
    public function datatables($wheres, $limit, $offset){
        $query = $this->dealDatatableParams($wheres)->limit($limit)->offset($offset);

        return $query->get()->map(function($item, $key){
            $id = $item->id;
            return [
                'checkbox' => $this->createCheckbox($id),
                'name' => $item->name,
                'slug' => $item->slug,
                'description' => $item->description,
                'position' => $item->position,
                'created_at' => $item->created_at->toDateString(),
                'button' => $this->createButton($id, $item->status),
            ];
        });
    }

    public function datatablesCount($wheres){
        $query = $this->dealDatatableParams($wheres);

        return $query->count();
    }

    /*处理参数*/
    private function dealDatatableParams($wheres){
        $query = $this->model;

        $likeWhere = [
            $this->model->getPropName(),
            $this->model->getPropDescription()
        ];

        $eqWhere = [
            $this->model->getPropSlug(),
        ];

        $dateWhere = [
            $this->model->getPropCreatedat(),
        ];


        if($wheres){
            foreach($wheres as $prop => $param){
                /*like 处理*/
                if(in_array($prop, $likeWhere)){
                    $query = $query->where($prop, 'like', "%{$param}%");
                }

                /*相等处理*/
                if(in_array($prop, $eqWhere)){
                    $query = $query->where($prop, $param);
                }

                /*日期 处理*/
                if(in_array($prop, $dateWhere)){
                    $started_at = (new Carbon($param))->startOfDay()->toDatetimeString();
                    $ended_at = (new Carbon($param))->endOfDay()->toDatetimeString();
                    $query = $query->where($prop, '>=', $started_at)->where($prop, '<=', $ended_at);
                }                
            }
        }
        return $query;
    }

    private function createButton($id, $status){
        $updateUrl = route('role.edit', [$id]);
        $destroyUrl = route('role.destroy', [$id]);
        $deleteUrl = route('role.delete', [$id]);
        $restoreUrl = route('role.restore', [$id]);

        $btnUpdate = "<a class='btn yellow btn-outline sbold' href='{$updateUrl}'><i class='fa fa-pencil'></i></a>";
        $btnOther = "";
        if($status == getStatusActive()){
            /*删除*/
            $btnOther .= "<a data-url='{$deleteUrl}' class='btn red btn-outline sbold filter-delete'><i class='fa fa-times'></i></a>";
        }else{
            /*彻底删除*/
            $btnOther .= "<a data-url='{$destroyUrl}' class='btn red btn-outline sbold filter-full-delete'><i class='fa fa-ban'></i></a>";
            /*恢复*/
            $btnOther .= "<a data-url='{$restoreUrl}' class='btn green btn-outline sbold filter-restore'><i class='fa fa-reply'></i></a>";
        }

        return $btnUpdate . $btnOther;
    }

    private function createCheckbox($id){
        return "<input type='checkbox' name='id[]' value='{$id}'>";
    }

    public function delete($id){
        return $this->update(['status' => getStatusClose()], $id);
    }

    public function restore($id){
        return $this->update(['status' => getStatusActive()], $id);
    }

    public function deleteMore($ids){
        return $this->model
                    ->active()
                    ->whereIn($this->model->getKeyName(), $ids)
                    ->update(['status' => getStatusClose()]);
    }

    public function restoreMore($ids){
        return $this->model
                    ->close()
                    ->whereIn($this->model->getKeyName(), $ids)
                    ->update(['status' => getStatusActive()]);
    }

    public function destroyMore($ids){
        return $this->model
                    ->close()
                    ->whereIn($this->model->getKeyName(), $ids)
                    ->delete();
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
 