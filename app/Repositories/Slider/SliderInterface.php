<?php

namespace App\Repositories\Slider;

interface SliderInterface
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
