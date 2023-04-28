<?php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class AdminSeeder extends Seeder
{
    public function run()
    {
        User::insert([
            [
                'name' => 'admin',
                'email'  => 'admin@domain.com',
                'role_id'  => 3,
                'password'  => Hash::make('password'),
            ],
            [
                'name' => 'employee',
                'email'  => 'employee@domain.com',
                'role_id'  => 1,
                'password'  => Hash::make('password'),
            ],
            [
                'name' => 'reader',
                'email'  => 'reader@domain.com',
                'role_id'  => 2,
                'password'  => Hash::make('password'),
            ],
        ]);
    }
}
?>
