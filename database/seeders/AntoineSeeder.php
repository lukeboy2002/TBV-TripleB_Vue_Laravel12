<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AntoineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $antoine = User::factory()
            ->create([
                'username' => 'antoine',
                'email' => 'antoine@tbv-tripleb.nl',
                'email_verified_at' => now(),
                'password' => Hash::make('antoineantoine'),
                'remember_token' => Str::random(10),

            ]);
    }
}
