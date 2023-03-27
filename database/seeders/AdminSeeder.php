<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'OBrien Reece',
            'email' => 'obrien@techandgeneral.com',
            'password' => Hash::make('obrien@techandgeneral.com'),
        ]);
        $user2 = User::factory()->create([
            'name' => 'Winston Wacieni',
            'email' => 'winston@techandgeneral.com',
            'password' => Hash::make('winston@techandgeneral.com'),
        ]);

        $user->assignRole('admin');
        $user2->assignRole('admin');
    }
}
