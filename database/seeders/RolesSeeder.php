<?php
namespace Database\Seeders;

use App\Models\Roles;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RolesSeeder extends Seeder
{
    public function run()
    {
        Roles::insert([
            [
                'name' => 'employee',
            ],
            [
                'name' => 'reader',
            ],
        ]);
    }
}
?>
