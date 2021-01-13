<?php

namespace App\Repositories;

use App\Models\Enum\LeaguesPlatform;
use App\Models\Enum\LeaguesStatus;
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
        $model = new Leagues();

        $model->name = $data['name'];
        $model->content = isset($data['content']) ?? $data['content'];
        $model->admin_id = $data['admin_id'];
        $model->platform = LeaguesPlatform::PS4;
        $model->status = LeaguesStatus::CREATED;
        $model->game = LeaguesStatus::CREATED;
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
