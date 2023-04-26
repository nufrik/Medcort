<?php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    public function run()
    {
        User::insert([
            'name' => 'admin',
            'email'  => 'admin@domain.com',
            'role_id'  => 3,
            'password'  => Hash::make('password'),
        ]);
    }
}
?>
