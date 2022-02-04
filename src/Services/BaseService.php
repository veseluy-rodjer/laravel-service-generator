<?php

namespace VeseluyRodjer\ServiceGenerator\Services;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

class BaseService
{
    public function all(): Collection
    {
        return $this->model->all();
    }

    public function create(array $attributes): Model
    {
        return $this->model->create($attributes);
    }

    public function findOrFail(int $id): Model
    {
        return $this->model->findOrFail($id);
    }

    public function where(string $attr, string|int $val): Collection
    {
        return $this->model->where($attr, $val)->get();
    }

    public function update(int $id, array $attributes): bool
    {
        return $this->findOrFail($id)->update($attributes);
    }

    public function destroy(int $id): bool
    {
        return $this->model->destroy($id);
    }
}
