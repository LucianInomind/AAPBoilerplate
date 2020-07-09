<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'inoadmin',
            'email' => 'lucian.albu@inomind.ro',
            'password' => Hash::make('4tide!22@#_')
        ]);
    }
}
