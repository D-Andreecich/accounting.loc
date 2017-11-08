<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = [
            /* client */
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('adminnimda'),
                'role' => 'admin'
            ],
            /* master */
            [
                'name' => 'user',
                'email' => 'user@gmail.com',
                'password' => bcrypt('userresu'),
            ]
        ];

        foreach ($permission as $key => $value) {
            User::create($value);
        }
    }
}
