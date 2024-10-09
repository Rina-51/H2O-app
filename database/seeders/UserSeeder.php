<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use DateTime;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        
        DB::table('users')->insert([
            'name' => "test",
            'email' => "test@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make('testtest'),
            'remember_token' => Str::random(10),
            
        ]);
         
        User::factory()->count(10)->create();
         
    }
}
