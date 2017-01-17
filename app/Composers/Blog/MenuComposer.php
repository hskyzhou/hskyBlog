<?php 
	namespace App\Composers\Blog;

	use Illuminate\View\View;
	use App\Repositories\Eloquent\Blog\MenuRepositoryEloquent;
	use App\Repositories\Eloquent\Blog\MenuRelationRepositoryEloquent;
	use App\Repositories\Eloquent\PermissionRepositoryEloquent;

	use App\Repositories\Criteria\OrderBySortAscCriteria;
	use App\Repositories\Criteria\StatusActiveCriteria;

	class MenuComposer{
		protected $menuRepo;
		protected $menuRelationRepo;
		protected $permissionRepo;

		public function __construct(
			MenuRepositoryEloquent $menuRepo,
			MenuRelationRepositoryEloquent $menuRelationRepo,
			PermissionRepositoryEloquent $permissionRepo
		){
			$this->menuRepo = $menuRepo;
			$this->menuRelationRepo = $menuRelationRepo;
			$this->permissionRepo = $permissionRepo;
		}

		public function compose(View $view){

			$menuRelations = $this->menuRelationRepo->all()->keyBy('menu_id')->keys();

			$this->menuRepo->pushCriteria(OrderBySortAscCriteria::class);
			$this->menuRepo->pushCriteria(StatusActiveCriteria::class);
			$menus = $this->menuRepo->with(['activeSonMenus'])->all()->filter(function($item, $key) use ($menuRelations){
				if(!$menuRelations->contains($item->id)){
				 	return true;
			 	}
			});

			$view->with('menus', $menus);
		}
	}