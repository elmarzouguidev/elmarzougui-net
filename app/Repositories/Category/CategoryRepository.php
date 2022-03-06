<?php


namespace App\Repositories\Category;

use App\Models\Elmarzougui\Category;

class CategoryRepository implements CategoryInterface
{

    private $model;

    public function __construct(Category $model)
    {
        $this->model = $model;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function query()
    {
        return $this->getModel()->query();
    }

    public function getAll()
    {
        return $this->getModel()->all();
    }

    public function getById(int $id)
    {
        return $this->getModel()->find($id);
    }

    public function getBySlug(string $slug)
    {
        return $this->getModel()->whereSlug($slug);
    }

    public function getFirst()
    {
        return $this->getModel()->first();
    }

    public function deleteById(int $id)
    {
        return $this->getModel()->delete();
    }

    public function deleteBySlug(string $slug)
    {
        return $this->getModel()->whereSlug($slug)->delete();
    }
}
