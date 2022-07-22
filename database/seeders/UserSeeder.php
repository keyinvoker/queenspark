<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

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
            'name' => 'Joerio',
            'profile' => 'Joerio.jpg',
            'email' => 'joerio.chandra@binus.ac.id',
            'password' => bcrypt('joe123')
        ]);
    }
}
