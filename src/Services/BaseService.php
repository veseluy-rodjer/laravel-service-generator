<?php

namespace VeseluyRodjer\ServiceGenerator\Services;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;;

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

    public function findModel(int $id): Model
    {
        return $this->repository->findModel($id);
    }

    public function filter(string $attr, string|int $val): Builder
    {
        return $this->repository->filter($attr, $val);
    }

    public function filterIn(string $attr, array $data): Builder
    {
        return $this->repository->filterIn($attr, $data);
    }

    public function modelWith(string $relationship, int $id): Builder
    {
        return $this->repository->modelWith($relationship, $id);
    }

    public function allWith(string $relationship): Builder
    {
        return $this->repository->allWith($relationship);
    }

    public function update(array $attributes, int $id): bool
    {
        return $this->repository->update($attributes, $id);
    }

    public function massUpdate(array $attributes, string $field, array $data): bool
    {
        return $this->repository->massUpdate($attributes, $field, $data);
    }

    public function delete(int $id): bool
    {
        return $this->repository->delete($id);
    }

    public function massDelete(string $field, array $data): bool
    {
        return $this->repository->massDelete($field, $data);
    }

    public function statusFilter(int $status): Builder
    {
        return $this->repository->statusFilter($status);
    }

    public function filterByCompare(string $attr, string $compare, string|int $val): Builder
    {
        return $this->repository->filterByCompare($attr, $compare, $val);
    }

    public function sort(string $attr, string $direction = 'asc'): Builder
    {
        return $this->repository->sort($attr, $direction);
    }
}
