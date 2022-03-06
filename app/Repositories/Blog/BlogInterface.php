<?php

namespace App\Repositories\Blog;

interface BlogInterface
{

    public function getModel();

    public function query();

    public function getAll();

    public function getById(int $id);

    public function getBySlug(string $slug);

    public function getFirst();

    public function deleteById(int $id);

    public function deleteBySlug(string $slug);
}
