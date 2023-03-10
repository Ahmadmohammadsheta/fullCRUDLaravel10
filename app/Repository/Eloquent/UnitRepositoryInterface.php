<?php
namespace App\Repository;


use Illuminate\Support\Collection;
use App\Models\User;

/**
* Interface UserRepositoryInterface
* @package App\Repositories
*/
interface UserRepositoryInterface
{
    /**
     * @return Collection
     */
     public function all(): Collection;

   /**
    * @param array $attributes
    * @return User
    */
   public function create(array $attributes): User;

   /**
    * @param $id
    * @return User
    */
   public function find($id): ?User;

   /**
    * @param id $attributes
    * @return User
    */
    public function edit($id, array $attributes);
}
