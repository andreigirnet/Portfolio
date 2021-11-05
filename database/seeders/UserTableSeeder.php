<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Andrei',
            'email'=>'andrei.girnet22@gmail.com',
            'password'=>bcrypt('!Ndrei961125')
        ]);
    }
}
