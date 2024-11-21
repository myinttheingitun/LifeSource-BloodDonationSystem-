<?php

namespace App\View\Components;

use App\Models\BloodGroup;
use App\Models\Region;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\Component;

class SearchBloodForm extends Component
{
    public $regions;

    public $bloodGroups;

    public function __construct()
    {
        $this->regions = Cache::rememberForever('regions', function () {
            return Region::all();
        });

        $this->bloodGroups = Cache::rememberForever('bloodGroups', function () {
            return BloodGroup::all();
        });
    }

    public function render()
    {
        return view('components.search-blood-form');
    }
}
