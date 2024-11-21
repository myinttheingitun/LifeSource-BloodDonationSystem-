<?php

namespace App\View\Components;

use App\Models\Region;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\Component;

class UserUpdateForm extends Component
{
    public $regions;

    public function __construct()
    {
        $this->regions = Cache::rememberForever('regions', function () {
            return Region::all();
        });
    }

    public function render()
    {
        return view('components.user-update-form');
    }
}
