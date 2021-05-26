<?php

namespace Database\Seeders;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $events_list = [
            [
               'title'=>'Cafecito: Especial planificación y productividad',
               'description' => 'Conversamos sobre tu público objetivo. Identificamos al cliente ideal de tu marca generando estrategias para que logres enamorar a tu audiencia, creando contenido auténtico para tus canales digitales, y propuestas acordes a sus principales intereses.',
               'image' => '',
               'date' => Carbon::create(2021, 7, 24)->toDate(),
               'time' => "12:00",
               'lecturer' => 'Mariana Pacheco',
               'host' => 'Mariana Pacheco',
               'inscription' => False,
               'url' => 'http://urlfalsa.com',
               'about' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            ],
        ];
        foreach ($events_list as $key => $value) {
            $value['slug'] = Str::slug($value['title']);
            Event::create($value);
        }
    }
}
