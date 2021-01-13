<?php

namespace App\Http\Controllers;

use App\Repositories\LeaguesRepository;

class SiteController
{
    /** @var LeaguesRepository */
    private $leaguesRepository;

    public function __construct(LeaguesRepository $leaguesRepository)
    {
        $this->leaguesRepository = $leaguesRepository;
    }

    public function index()
    {
        $result = $this->leaguesRepository->find(1);

        return view('index', [
            'result' => $result
        ]);
    }
}
