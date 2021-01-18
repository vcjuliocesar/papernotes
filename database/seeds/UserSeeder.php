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
        $user = User::create([
            'name' => 'Julio Cesar',
            'email' =>'vcjuliocesar@faker.com',
            'password' => Hash::make('12345678')
        ]);
    }
}
