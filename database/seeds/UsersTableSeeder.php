<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\User::class, 30)->create();
        User::create(['name' => 'Admin', 'email' => 'admin@gmail.com', 'role' => 'admin', 'password' => bcrypt('admin'), 'remember_token' => str_random(10)]);
    }
}
