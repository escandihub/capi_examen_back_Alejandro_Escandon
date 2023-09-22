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
        User::factory(100)->create()->each(function($usuario){
            userDomicilio::factory(1)->create([
                'user_id' => $usuario->id
            ]);
        });
    }
}
