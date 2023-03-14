<?php

namespace App\Repository\Eloquent;

use App\Models\Product;
use Illuminate\Support\Collection;
use App\Repository\ProductRepositoryInterface;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{
    /**
     * Resource Class
     */
    protected $resourceCollection;

   /**
    * ProductRepository constructor.
    *
    * @param Product $model
    */
   public function __construct(Product $model)
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
     * @return Product
     */
    public function create(array $attributes): Product
    {
        $attributes['created_by'] = auth()->id();
        $product = $this->model->create($attributes);
        return $product;
    }

    /**
     * @param $id
     * @return Product
     */
    public function find($id): ?Product
    {
        return $this->model->find($id);
    }

   /**
    * @param id $attributes
    * @return Product
    */
    public function edit($id, array $attributes)
    {
        $product = $this->model->findOrFail($id);
        $attributes['updated_by'] = auth()->id();
        $product->update($attributes);
        return $product;
    }
}
