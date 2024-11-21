<?php

namespace Database\Seeders;

use App\Models\Township;
use Illuminate\Database\Seeder;

class TownshipSeeder extends Seeder
{
    private $townships = [
        1 => [
            'arName' => 'Insein',
            'name' => 'Insein',
            'region_id' => '01',
        ],
        2 => [
            'arName' => 'Kyauk Se',
            'name' => 'Kyauk Se',
            'region_id' => '02',
        ],
        3 => [
            'arName' => 'Phaung Gyi',
            'name' => 'Phaung Gyi',
            'region_id' => '03',
        ],
        4 => [
            'arName' => 'Pathein',
            'name' => 'Pathein',
            'region_id' => '04',
        ],
        5 => [
            'arName' => 'Taung Gyi',
            'name' => 'Taung Gyi',
            'region_id' => '05',
        ],
        6 => [
            'arName' => 'North Dagon',
            'name' => 'North Dagon',
            'region_id' => '01',
        ],
        7 => [
            'arName' => 'San Chaung',
            'name' => 'San Chaung',
            'region_id' => '01',
        ],
        8 => [
            'arName' => 'Latha',
            'name' => 'Latha',
            'region_id' => '01',
        ],
        9 => [
            'arName' => 'Mayangone',
            'name' => 'Mayangone',
            'region_id' => '01',
        ],
    ];

    public function run()
    {
        array_walk($this->townships, function ($township, $key) {
            Township::create(array_merge(['id' => $key], $township));
        });
    }
}
