<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'username'		=> 'admin',
                'password'		=> '$2y$10$tySIrWuYcOjZmQQ6WOERu.wk1JOmOIiQ5TboOs0eijrTA/nJ1DDzG',

                'email'			=> 'admin@example.com',
                'family_name'	=> 'Almighty',
                'given_name'	=> 'Admin',

                'created_at'	=> Carbon::now() -> subHour(),
                'updated_at'	=> Carbon::now() -> subHour(),
            ],
            [
                'username'		=> 'user',
                'password'		=> '$2y$10$tySIrWuYcOjZmQQ6WOERu.wk1JOmOIiQ5TboOs0eijrTA/nJ1DDzG',

                'email'			=> 'user@example.com',
                'family_name'	=> 'Humble',
                'given_name'	=> 'User',

                'created_at'	=> Carbon::now(),
                'updated_at'	=> Carbon::now(),
            ],
        ];

        User::insert($users);
    }
}
