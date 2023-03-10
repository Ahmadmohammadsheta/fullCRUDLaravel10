<?php

namespace App\Repository\Eloquent;

use App\Models\User;
use Illuminate\Support\Collection;
use App\Repository\UserRepositoryInterface;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    /**
     * Resource Class
     */
    protected $resourceCollection;

   /**
    * UserRepository constructor.
    *
    * @param User $model
    */
   public function __construct(User $model)
   {
       parent::__construct($model);
   }

   /**
    * @return Collection
    */
    public function all(): Collection
    {
        return $this->model->all();
    }

    /**
     * @param array $attributes
     * @return User
     */
    public function create(array $attributes): User
    {
        $attributes['created_by'] = auth()->id();
        $user = $this->model->create($attributes);
        $user->categories()->attach($attributes['category_id'], ['project_id'=> $user->level->project_id]);
        return $user;
    }

    // /**
    //  * @param $id
    //  * @return User
    //  */
    // public function find($id): ?User
    // {
    //     return $this->model->load(['items', 'trader'])->find($id);
    // }

   /**
    * @param id $attributes
    * @return User
    */
    public function edit($id, array $attributes)
    {
        $user = $this->model->findOrFail($id);
        $attributes['updated_by'] = auth()->id();
        $user->update($attributes);
        return $user;
    }
}
