<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\Counseling;
use App\Models\CounselingDescription;

class CounselingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $counseling_service_list = [
            [
               'id'=>'1',
               'name'=>'Eleva tu Esencia',
               'price_ars'=>'435',
               'price_usd'=>'6',
               'calendly'=>'https://calendly.com/marianpd/sesion',
            ],
            [
               'id'=>'2',
               'name'=>'Enamora a tu audiencia',
               'price_ars'=>'405',
               'price_usd'=>'5.50',
               'calendly'=>'https://calendly.com/marianpd/sesion',
            ],
            [
               'id'=>'3',
               'name'=>'Contenido para inspirar',
               'price_ars'=>'600',
               'price_usd'=>'7.90',
               'calendly'=>'https://calendly.com/marianpd/sesion',
            ],
            [
               'id'=>'4',
               'name'=>'Comunicá, conectá y lanzá',
               'price_ars'=>'300',
               'price_usd'=>'3',
               'calendly'=>'https://calendly.com/marianpd/sesion',
            ],
            [
               'id'=>'5',
               'name'=>'Hoja de ruta',
               'price_ars'=>'700',
               'price_usd'=>'8',
               'calendly'=>'https://calendly.com/marianpd/sesion',
            ],
        ];
        $counseling_list = [
            [
               'service_id'=>'1',
               'description' => 'Conversamos sobre tu propuesta de valor y buscamos la manera de dar a conocer la experiencia y los valores de tu marca, para que logres comunicar tu proyecto así de especial como vos lo sentís, diferenciándote en el mercado y conectando a través de tu esencia e historia.',
               'marked_description' => 'Trabajamos sobre',
               'icon'=>'img/asesoria-tab-1.svg',
               'image'=>'img/asesoria-img-tab-1.png',
               'video'=>'https://youtu.be/zEMt3qViMjk',
            ],
            [
               'service_id'=>'2',
               'description' => 'Conversamos sobre tu público objetivo. Identificamos al cliente ideal de tu marca y generamos estrategias para que logres enamorar a tu audiencia, con contenido auténtico para tus canales digitales y propuestas acordes a sus principales intereses.',
               'marked_description' => Null,
               'icon'=>'img/asesoria-tab-2.svg',
               'image'=>'img/asesoria-img-tab-2.png',
               'video'=>'https://youtu.be/zEMt3qViMjk',
            ],
            [
               'service_id'=>'3',
               'description' => 'Planificamos y ordenamos tus ideas para transformarlas en objetivos que nos guíen en la generación de contenido con propósito. Viajamos al corazón de tu emprendimiento y creamos 60 días de contenido auténtico y relevante para que logres enamorar y conectar con tu audiencia.',
               'marked_description' => 'Trabajamos sobre',
               'icon'=>'img/asesoria-tab-3.svg',
               'image'=>'img/asesoria-img-tab-3.png',
               'video'=>'https://youtu.be/zEMt3qViMjk',
            ],
            [
               'service_id'=>'4',
               'description' => 'Conversamos sobre tu propuesta actual y futura y analizamos el diferencial y las maneras de compartirlo con tu audiencia. Creamos diversos mensajes, respetando el tono de comunicación e identidad de marca. Ideamos una estrategia integral a fin de lanzar nuevas propuestas.',
               'marked_description' => 'Trabajamos sobre',
               'icon'=>'img/asesoria-tab-4.svg',
               'image'=>'img/asesoria-img-tab-4.png',
               'video'=>'https://youtu.be/zEMt3qViMjk',
            ],
            [
               'service_id'=>'5',
               'description' => 'Conversamos sobre tu situación actual y analizamos los pilares más importantes de tu proyecto o idea. Te ayudo, te acompaño, te oriento y te guío con un paso a paso para que logrés identificar qué punto debés trabajar a fin de mejorar el desempeño, potenciar resultados y disfrutar del proceso de tener y/o crear una marca con corazón.',
               'marked_description' => 'Trabajaremos juntas en una sesión de orientación si te sentís identificada con alguna de las siguientes afirmaciones:',
               'icon'=>'img/asesoria-tab-5.svg',
               'image'=>'img/asesoria-img-tab-5.png',
               'video'=>'https://youtu.be/zEMt3qViMjk',
            ],
        ];

        $counseling_description_list =
          [
            [
               'content'=>'El propósito y los valores de la marca',
               'counseling_id'=>'1',
            ],
            [
               'content'=>'El diferencial',
               'counseling_id'=>'1',
            ],
            [
               'content'=>'La definición de tu propuesta de valor',
               'counseling_id'=>'1',
            ],
            [
               'content'=>'La estrategia de comunicación digital',
               'counseling_id'=>'1',
            ],
            [
               'content'=>'La propuesta de valor/comercial',
               'counseling_id'=>'2',
            ],
            [
               'content'=>'El perfil de tu cliente ideal',
               'counseling_id'=>'2',
            ],
            [
               'content'=>'Estrategia de contenido para conectar con tu audiencia',
               'counseling_id'=>'2',
            ],
            [
               'content'=>'La planificación y definición de objetivos',
               'counseling_id'=>'3',
            ],
            [
               'content'=>'Storytelling – Storydoing',
               'counseling_id'=>'3',
            ],
            [
               'content'=>'La estrategia de contenido',
               'counseling_id'=>'3',
            ],
            [
               'content'=>'La creación de un calendario contenido para la marca',
               'counseling_id'=>'3',
            ],
            [
               'content'=>'Tu propuesta de valor',
               'counseling_id'=>'4',
            ],
            [
               'content'=>'La identidad de marca',
               'counseling_id'=>'4',
            ],
            [
               'content'=>'La generación de contenido con propósito',
               'counseling_id'=>'4',
            ],
            [
               'content'=>'Estrategia de lanzamiento omnicanal',
               'counseling_id'=>'4',
            ],
            [
               'content'=>'Quiero renovarme en el universo digital y no sé cómo.',
               'counseling_id'=>'5',
            ],
            [
               'content'=>'Entiendo que algo no funciona bien con mi emprendimiento, pero, me cuesta detectar en qué estoy fallando.',
               'counseling_id'=>'5',
            ],
            [
               'content'=>'Quiero comunicar mis propuestas de forma diferente.',
               'counseling_id'=>'5',
            ],
            [
               'content'=>'Me gustaría emprender y no sé cómo comenzar.',
               'counseling_id'=>'5',
            ],
            [
               'content'=>'Me gustaría contar con una hoja de ruta para sentirme segura al dar el próximo paso con mi proyecto.',
               'counseling_id'=>'5',
            ],
            [
               'content'=>'Quiero contar con una mirada objetiva hacia mi marca.',
               'counseling_id'=>'5',
            ],
        ];


        foreach ($counseling_service_list as $key => $value) {
            Service::create($value);
        }
        foreach ($counseling_list as $key => $value) {
            Counseling::create($value);
        }
        foreach ($counseling_description_list as $key => $value) {
            CounselingDescription::create($value);
        }
    }
}
