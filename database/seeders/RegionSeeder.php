<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    private $regions = [
        [
            'id' => '1',
            'name' => 'Yangon',
            'arName' => 'Yangon',
        ],
        [
            'id' => '2',
            'name' => 'Mandalay',
            'arName' => 'Mandalay',
        ],
        [
            'id' => '3',
            'name' => 'Bago',
            'arName' => 'Bago',
        ],
        [
            'id' => '4',
            'name' => 'Ayeyarwady',
            'arName' => 'Ayeyarwady',
        ],
        [
            'id' => '5',
            'name' => 'Shan',
            'arName' => 'Shan',
        ],
    ];

    public function run()
    {
        array_walk($this->regions, function ($region) {
            Region::create($region);
        });
    }
}
