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

    public function findOrFail(int $id): Model
    {
        return $this->repository->findOrFail($id);
    }

    public function where(string $attr, string|int $val): Builder
    {
        return $this->repository->where($attr, $val);
    }

    public function update(array $attributes, int $id): bool
    {
        return $this->repository->update($attributes, $id);
    }

    public function delete(int $id): bool
    {
        return $this->repository->delete($id);
    }
}
