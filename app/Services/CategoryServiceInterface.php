<?php

namespace App\Services;


use Illuminate\Database\Eloquent\Collection;

interface CategoryServiceInterface
{
    public function getByAll() : Collection;
}
