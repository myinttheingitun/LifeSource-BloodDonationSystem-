<?php

namespace Database\Seeders;


use App\Models\User;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    private $users = [
       [
            'email' => 'test1@gmail.com',
            'phone' => '0911111111',
            'readyToGive' => true,
            // 'name' => 'test',
            'password' => '$2y$10$itg0K.FJPNS3sWrDSUrWJ.AdeQD/njoHQ1Y781T0TbkW4jor3rRqi',
            'region_id' => 1,
            'township_id' => 1,
            'blood_group_id' => 1,
       ],
       [
            'email' => 'test2@gmail.com',
            'phone' => '0911111112',
            'readyToGive' => true,
            // 'name' => 'test',
            'password' => '$2y$10$itg0K.FJPNS3sWrDSUrWJ.AdeQD/njoHQ1Y781T0TbkW4jor3rRqi',
            'region_id' => 1,
            'township_id' => 6,
            'blood_group_id' => 2,
       ],
       [
            'email' => 'test3@gmail.com',
            'phone' => '0911111113',
            'readyToGive' => true,
            // 'name' => 'test',
            'password' => '$2y$10$itg0K.FJPNS3sWrDSUrWJ.AdeQD/njoHQ1Y781T0TbkW4jor3rRqi',
            'region_id' => 1,
            'township_id' => 7,
            'blood_group_id' => 3,
       ],
       [
            'email' => 'test4@gmail.com',
            'phone' => '0911111114',
            'readyToGive' => true,
            // 'name' => 'test',
            'password' => '$2y$10$itg0K.FJPNS3sWrDSUrWJ.AdeQD/njoHQ1Y781T0TbkW4jor3rRqi',
            'region_id' => 1,
            'township_id' => 8,
            'blood_group_id' => 4,
       ],
       [
            'email' => 'test5.mandalay@gmail.com',
            'phone' => '0911111115',
            'readyToGive' => true,
            // 'name' => 'test',
            'password' => '$2y$10$itg0K.FJPNS3sWrDSUrWJ.AdeQD/njoHQ1Y781T0TbkW4jor3rRqi',
            'region_id' => 2,
            'township_id' => 2,
            'blood_group_id' => 5,
       ],

    ];
    // private $regions = [
    //    [
    //        'id' => '1',
    //        'name' => 'Yangon',
    //        'arName' => 'Yangon',
    //    ],
    //    [
    //        'id' => '2',
    //        'name' => 'Mandalay',
    //        'arName' => 'Mandalay',
    //    ],
    //    [
    //        'id' => '3',
    //        'name' => 'Bago',
    //        'arName' => 'Bago',
    //    ],
    //    [
    //        'id' => '4',
    //        'name' => 'Ayeyarwady',
    //        'arName' => 'Ayeyarwady',
    //    ],
    //    [
    //        'id' => '5',
    //        'name' => 'Shan',
    //        'arName' => 'Shan',
    //    ],
    //  e
    // ];
    public function run()
    {
        array_walk($this->users, function ($users) {
            User::create($users);
        });
    }
}
