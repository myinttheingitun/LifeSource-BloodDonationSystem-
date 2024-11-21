<?php

namespace App\Http\Controllers;

use App\Models\Region;

class ApiController extends Controller
{
    public function getTownships($regionCode)
    {
        return Region::find($regionCode)->townships;
    }
}
