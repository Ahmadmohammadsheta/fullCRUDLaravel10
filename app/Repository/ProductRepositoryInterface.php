<?php
namespace App\Repository;

use Illuminate\Support\Collection;
use App\Models\Product;

/**
* Interface ProductRepositoryInterface
* @package App\Repositories
*/
interface ProductRepositoryInterface
{
    /**
     * @return Collection
     */
     public function all(): Collection;

   /**
    * @param array $attributes
    * @return Product
    */
   public function create(array $attributes): Product;

   /**
    * @param $id
    * @return Product
    */
   public function find($id): ?Product;

   /**
    * @param id $attributes
    * @return Product
    */
    public function edit($id, array $attributes);
}
