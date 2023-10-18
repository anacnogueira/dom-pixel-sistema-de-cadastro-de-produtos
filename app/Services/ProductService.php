<?php 

namespace App\Services;

use App\Repositories\Eloquent\ProductRepositoryEloquent;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Product;

class ProductService
{
    protected $repository;

    public  function __construct(ProductRepositoryEloquent $repository)
	{
		$this->repository = $repository;
	}

    public function create(array $data): void
    {
        $this->repository->create($data);
    }

    public function list($columns): array
    {
        return $this->repository->all($columns)->toArray();
    }

    public function findById($id): Product
    {
        return $this->repository->find($id);
    }

    public function update(array $data, $id): void
    {
        $this->repository->update($data, $id);
    }

    public function delete($id): void
    {
        $this->repository->find($id)->delete();
    }

}