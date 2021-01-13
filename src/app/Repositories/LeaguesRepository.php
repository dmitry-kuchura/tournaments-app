<?php

namespace App\Repositories;

use App\Models\Leagues;

class LeaguesRepository implements Repository
{
    protected $model = Leagues::class;

    public function find(int $id)
    {
        return $this->model::with('seasons')->get()->find($id);
    }

    public function create(array $data)
    {
        // TODO: Implement create() method.
    }

    public function store(int $id, array $data)
    {
        // TODO: Implement store() method.
    }

    public function destroy(int $id)
    {
        // TODO: Implement destroy() method.
    }
}
