<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [ 'name'=>'Marketing' ],
            [ 'name'=>'Capacitaciones' ],
            [ 'name'=>'Recursos' ],
        ];

        foreach ($categories as $key => $value) {
            $value['slug'] = Str::slug($value['name']);
            Category::create($value);
        }
    }
}
