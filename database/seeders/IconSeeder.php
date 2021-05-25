<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Icon;

class IconSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for ($i = 1; $i <= 5; $i++) {
        Icon::create([ 'url' => 'img/icons/'.$i.'.svg' ]);
      }
    }
}
