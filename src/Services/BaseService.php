<?php

namespace VeseluyRodjer\ServiceGenerator\Services;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

class BaseService
{
    public function all(): Collection
    {
        return $this->repository->all();
    }

    public function create(array $attributes): Model
    {
        return $this->repository->create($attributes);
    }

    public function findOrFail(int $id): ?Model
    {
        return $this->repository->findOrFail($id);
    }

    public function where($attr, $val): ?Collection
    {
        return $this->repository->where($attr, $val)->get();
    }

    public function update(int $id, array $attributes): ?bool
    {
        return $this->repository->findOrFail($id)->update($attributes);
    }

    public function delete(int $id): ?bool
    {
        return $this->repository->findOrFail($id)->delete();
    }
}
