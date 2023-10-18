<?php 

namespace App\Services;

use App\Repositories\Eloquent\ProductRepositoryEloquent;
use App\Models\Product;

class ProductService
{
    protected $repository;

    public  function __construct(ProductRepositoryEloquent $repository)
	{
		$this->repository = $repository;
	}

    public function create(array $data): Product
    {
        return $this->repository->create($data);
    }


    public function list($columns)
    {
        return $this->repository->all($columns)->toArray();
    }
}