<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\Mentorship;
use App\Models\MentorshipDescription;

class MentorshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mentorship_service_list = [
            [
               'id'=>'6',
               'name'=>'Asesoría Personalizada',
               'price_ars'=>'777',
               'price_usd'=>'8',
            ],
            [
               'id'=>'7',
               'name'=>'Mentoría Grupal',
               'price_ars'=>'555',
               'price_usd'=>'6',
            ],
        ];

        $mentorship_list = [
            [
               'service_id'=>'6',
            ],
            [
               'service_id'=>'7',
            ],
        ];

        $mentorship_description_list =
          [
            [
               'content'=>'<p>El programa propone 8 semanas de trabajo juntas de forma 100% personalizada a través de sesiones online, en vivo y con cafecito de por medio.</p>
</p>Compartiremos 5 encuentros en los cuales analizaremos los pilares más importantes de tu marca, trabajaremos en un diagnóstico sobre tu propuesta actual e implementaremos mejoras de la mano de una estrategia digital que te permita comunicar tu diferencial y potenciar tus resultados. Entre encuentro y encuentro aplicamos lo conversado a tu proyecto de forma práctica, mediante ejercicios y reflexiones sugeridos en cada sesión.</p>',
               'mentorship_id'=>'1',
               'icon_id'=>'1',
            ],
            [
               'content'=>'Un grupo de Whatsapp donde compartiremos dudas, inquietudes y experiencias relacionadas al proceso de mentoría',
               'mentorship_id'=>'2',
               'icon_id'=>'1',
            ],
            [
               'content'=>'Una selección exclusiva de artículos y podcast recomendados y avalados por Marian',
               'mentorship_id'=>'2',
               'icon_id'=>'2',
            ],
            [
               'content'=>'Un cuadernillo de ejercicios para acompañar el proceso y aplicar los contenidos de forma práctica',
               'mentorship_id'=>'2',
               'icon_id'=>'3',
            ],
            [
              'content'=>'Instancias 100% personalizadas en las que seguiré tus avances con correcciones y devoluciones',
               'mentorship_id'=>'2',
               'icon_id'=>'4',
            ],
            [
              'content'=>'Cafecitos virtuales exclusivos para clientas premium de mentoría.',
               'mentorship_id'=>'2',
               'icon_id'=>'5',
            ],
        ];

        foreach ($mentorship_service_list as $key => $value) {
            Service::create($value);
        }
        foreach ($mentorship_list as $key => $value) {
            Mentorship::create($value);
        }
        foreach ($mentorship_description_list as $key => $value) {
            MentorshipDescription::create($value);
        }
    }
}
