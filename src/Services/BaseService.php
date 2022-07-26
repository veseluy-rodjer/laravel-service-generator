<?php

namespace VeseluyRodjer\ServiceGenerator\Services;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class BaseService
{
    public function getAll(): Builder
    {
        return $this->repository->getAll();
    }

    public function create(array $attributes): Model
    {
        return $this->repository->create($attributes);
    }

    public function findModel(int $id): Builder
    {
        return $this->repository->findModel($id);
    }

    public function filter(string $attr, string|int $val): Builder
    {
        return $this->repository->filter($attr, $val);
    }

    public function update(array $attributes, int $id): bool
    {
        return $this->repository->update($attributes, $id);
    }

    public function delete(int $id): bool
    {
        return $this->repository->delete($id);
    }

    public function statusFilter(int $status): Builder
    {
        return $this->repository->statusFilter($status);
    }

    public function filterByCompare(string $attr, string $compare, string|int $val): Builder
    {
        return $this->repository->filterByCompare($attr, $compare, $val);
    }
}
