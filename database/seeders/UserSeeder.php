<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\userDomicilio;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        userDomicilio::factory(2)->create([
            'user_id' => User::factory(1)->create()
        ]);
    }
}
