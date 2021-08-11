<?php

namespace App\Repositories\Eloquent;

use App\Models\Holiday;
use App\Repositories\Contracts\HolidayRepository;
use App\Repositories\RepositoryAbstract;


class EloquentHolidayRepository extends RepositoryAbstract implements HolidayRepository
{
    public function entity()
    {
        return Holiday::class;
    }
}