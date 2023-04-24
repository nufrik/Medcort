<?php
namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::insert([
            [
                'title' => 'Фантастика',
                'slug'  => 'Fantastic',
            ],
            [
                'title' => 'История',
                'slug'  => 'History',
            ],
            [
                'title' => 'Детективы',
                'slug'  => 'Detectives',
            ],
            [
                'title' => 'Боевики',
                'slug'  => 'Fighters',
            ],
            [
                'title' => 'Детские книги',
                'slug'  => "Childrens_books",
            ],
            [
                'title' => 'Приключения',
                'slug'  => 'Adventures',
            ],
            [
                'title' => 'Спорт, здоровье, красота',
                'slug'  => 'Sports_health_beauty',
            ],
        ]);
    }
}
?>
