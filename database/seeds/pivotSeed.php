<?php

use Illuminate\Database\Seeder;
use App\pivot;

class pivotSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // |1| AMIGDALITIS
      for ($i=1; $i <= 10; $i++) { 
        pivot::create(['id_disease'=>1, 'id_symptom'=>$i]);}

      // |2| ASMA
      for ($i=11; $i <= 19; $i++) { 
        pivot::create(['id_disease'=>2, 'id_symptom'=>$i]);}

      // |3| BRONQUIECTASIAS
      pivot::create(['id_disease'=>3, 'id_symptom'=>20]);
      pivot::create(['id_disease'=>3, 'id_symptom'=>7]);
      pivot::create(['id_disease'=>3, 'id_symptom'=>21]);
      pivot::create(['id_disease'=>3, 'id_symptom'=>22]);
      pivot::create(['id_disease'=>3, 'id_symptom'=>23]);
      pivot::create(['id_disease'=>3, 'id_symptom'=>24]);
      pivot::create(['id_disease'=>3, 'id_symptom'=>4]);
      pivot::create(['id_disease'=>3, 'id_symptom'=>25]);
      pivot::create(['id_disease'=>3, 'id_symptom'=>17]);
      pivot::create(['id_disease'=>3, 'id_symptom'=>26]);
      pivot::create(['id_disease'=>3, 'id_symptom'=>27]);

      // |4| BRONQUIOLITIS
      pivot::create(['id_disease'=>4, 'id_symptom'=>28]);
      pivot::create(['id_disease'=>4, 'id_symptom'=>29]);
      pivot::create(['id_disease'=>4, 'id_symptom'=>14]);
      pivot::create(['id_disease'=>4, 'id_symptom'=>4]);
      pivot::create(['id_disease'=>4, 'id_symptom'=>30]);

      // |5| BRONQUITIS
      pivot::create(['id_disease'=>5, 'id_symptom'=>31]);
      pivot::create(['id_disease'=>5, 'id_symptom'=>14]);
      pivot::create(['id_disease'=>5, 'id_symptom'=>29]);
      pivot::create(['id_disease'=>5, 'id_symptom'=>4]);
      pivot::create(['id_disease'=>5, 'id_symptom'=>12]);
      pivot::create(['id_disease'=>5, 'id_symptom'=>25]);
      pivot::create(['id_disease'=>5, 'id_symptom'=>15]);

      // |6| CÁNCER DE LARINGE
      pivot::create(['id_disease'=>6, 'id_symptom'=>15]);
      pivot::create(['id_disease'=>6, 'id_symptom'=>14]);
      pivot::create(['id_disease'=>6, 'id_symptom'=>32]);
      pivot::create(['id_disease'=>6, 'id_symptom'=>33]);
      pivot::create(['id_disease'=>6, 'id_symptom'=>34]);
      pivot::create(['id_disease'=>6, 'id_symptom'=>35]);
      pivot::create(['id_disease'=>6, 'id_symptom'=>3]);
      pivot::create(['id_disease'=>6, 'id_symptom'=>24]);

      // |7| CÁNCER DE PULMÓN
      pivot::create(['id_disease'=>7, 'id_symptom'=>14]);
      pivot::create(['id_disease'=>7, 'id_symptom'=>36]);
      pivot::create(['id_disease'=>7, 'id_symptom'=>12]);
      pivot::create(['id_disease'=>7, 'id_symptom'=>34]);
      pivot::create(['id_disease'=>7, 'id_symptom'=>37]);
      pivot::create(['id_disease'=>7, 'id_symptom'=>25]);
      pivot::create(['id_disease'=>7, 'id_symptom'=>38]);
      pivot::create(['id_disease'=>7, 'id_symptom'=>15]);

      // |8| DERRAME PLEURAL
      pivot::create(['id_disease'=>8, 'id_symptom'=>12]);
      pivot::create(['id_disease'=>8, 'id_symptom'=>14]);
      pivot::create(['id_disease'=>8, 'id_symptom'=>25]);
      pivot::create(['id_disease'=>8, 'id_symptom'=>4]);
      pivot::create(['id_disease'=>8, 'id_symptom'=>39]);
      pivot::create(['id_disease'=>8, 'id_symptom'=>40]);
      pivot::create(['id_disease'=>8, 'id_symptom'=>41]);
      pivot::create(['id_disease'=>8, 'id_symptom'=>42]);

      // |9| DIFTERIA
      pivot::create(['id_disease'=>9, 'id_symptom'=>4]);
      pivot::create(['id_disease'=>9, 'id_symptom'=>43]);
      pivot::create(['id_disease'=>9, 'id_symptom'=>3]);
      pivot::create(['id_disease'=>9, 'id_symptom'=>34]);
      pivot::create(['id_disease'=>9, 'id_symptom'=>44]);
      pivot::create(['id_disease'=>9, 'id_symptom'=>14]);
      pivot::create(['id_disease'=>9, 'id_symptom'=>45]);
      pivot::create(['id_disease'=>9, 'id_symptom'=>20]);
      pivot::create(['id_disease'=>9, 'id_symptom'=>46]);
      pivot::create(['id_disease'=>9, 'id_symptom'=>25]);

      // |10| ENFERMEDAD PULMONAR OBSTRUCTIVA CRÓNICA (EPOC)
      pivot::create(['id_disease'=>10, 'id_symptom'=>25]);
      pivot::create(['id_disease'=>10, 'id_symptom'=>15]);
      pivot::create(['id_disease'=>10, 'id_symptom'=>12]);
      pivot::create(['id_disease'=>10, 'id_symptom'=>21]);
      pivot::create(['id_disease'=>10, 'id_symptom'=>47]);
      pivot::create(['id_disease'=>10, 'id_symptom'=>48]);
      pivot::create(['id_disease'=>10, 'id_symptom'=>38]);
      pivot::create(['id_disease'=>10, 'id_symptom'=>49]);

      // |11| ENFISEMA PULMONAR
      pivot::create(['id_disease'=>11, 'id_symptom'=>50]);
      pivot::create(['id_disease'=>11, 'id_symptom'=>48]);
      pivot::create(['id_disease'=>11, 'id_symptom'=>14]);
      pivot::create(['id_disease'=>11, 'id_symptom'=>17]);
      pivot::create(['id_disease'=>11, 'id_symptom'=>51]);
      pivot::create(['id_disease'=>11, 'id_symptom'=>20]);
      pivot::create(['id_disease'=>11, 'id_symptom'=>24]);

      // |12| ENFISEMA SUBCUTÁNEO
      pivot::create(['id_disease'=>12, 'id_symptom'=>52]);
      pivot::create(['id_disease'=>12, 'id_symptom'=>12]);
      pivot::create(['id_disease'=>12, 'id_symptom'=>3]);
      pivot::create(['id_disease'=>12, 'id_symptom'=>44]);
      pivot::create(['id_disease'=>12, 'id_symptom'=>15]);
      pivot::create(['id_disease'=>12, 'id_symptom'=>25]);
      pivot::create(['id_disease'=>12, 'id_symptom'=>53]);
      pivot::create(['id_disease'=>12, 'id_symptom'=>54]);

      // |13| ESTENOSIS DE LA VÁLVULA PULMONAR
      pivot::create(['id_disease'=>13, 'id_symptom'=>55]);
      pivot::create(['id_disease'=>13, 'id_symptom'=>17]);
      pivot::create(['id_disease'=>13, 'id_symptom'=>11]);
      pivot::create(['id_disease'=>13, 'id_symptom'=>12]);
      pivot::create(['id_disease'=>13, 'id_symptom'=>56]);
      pivot::create(['id_disease'=>13, 'id_symptom'=>20]);
      pivot::create(['id_disease'=>13, 'id_symptom'=>37]);
      pivot::create(['id_disease'=>13, 'id_symptom'=>57]);

      // |14| FARINGITIS
      pivot::create(['id_disease'=>14, 'id_symptom'=>58]);
      pivot::create(['id_disease'=>14, 'id_symptom'=>59]);
      pivot::create(['id_disease'=>14, 'id_symptom'=>4]);
      pivot::create(['id_disease'=>14, 'id_symptom'=>10]);
      pivot::create(['id_disease'=>14, 'id_symptom'=>60]);
      pivot::create(['id_disease'=>14, 'id_symptom'=>61]);
      pivot::create(['id_disease'=>14, 'id_symptom'=>6]);
      pivot::create(['id_disease'=>14, 'id_symptom'=>5]);

      // |15| FARINGOAMIGDALITIS
      pivot::create(['id_disease'=>15, 'id_symptom'=>4]);
      pivot::create(['id_disease'=>15, 'id_symptom'=>3]);
      pivot::create(['id_disease'=>15, 'id_symptom'=>5]);
      pivot::create(['id_disease'=>15, 'id_symptom'=>10]);
      pivot::create(['id_disease'=>15, 'id_symptom'=>62]);
      pivot::create(['id_disease'=>15, 'id_symptom'=>63]);
      pivot::create(['id_disease'=>15, 'id_symptom'=>57]);

      // |16| FIBROSIS QUÍSTICA
      pivot::create(['id_disease'=>16, 'id_symptom'=>71]);
      pivot::create(['id_disease'=>16, 'id_symptom'=>14]);
      pivot::create(['id_disease'=>16, 'id_symptom'=>48]);
      pivot::create(['id_disease'=>16, 'id_symptom'=>24]);
      pivot::create(['id_disease'=>16, 'id_symptom'=>57]);

      // |17| GRIPE
      pivot::create(['id_disease'=>17, 'id_symptom'=>4]);
      pivot::create(['id_disease'=>17, 'id_symptom'=>43]);
      pivot::create(['id_disease'=>17, 'id_symptom'=>10]);
      pivot::create(['id_disease'=>17, 'id_symptom'=>14]);
      pivot::create(['id_disease'=>17, 'id_symptom'=>29]);
      pivot::create(['id_disease'=>17, 'id_symptom'=>3]);
      pivot::create(['id_disease'=>17, 'id_symptom'=>61]);
      pivot::create(['id_disease'=>17, 'id_symptom'=>37]);
      pivot::create(['id_disease'=>17, 'id_symptom'=>17]);
      pivot::create(['id_disease'=>17, 'id_symptom'=>62]);
      pivot::create(['id_disease'=>17, 'id_symptom'=>63]);

      // |18| LARINGITIS
      pivot::create(['id_disease'=>18, 'id_symptom'=>34]);
      pivot::create(['id_disease'=>18, 'id_symptom'=>64]);
      pivot::create(['id_disease'=>18, 'id_symptom'=>65]);
      pivot::create(['id_disease'=>18, 'id_symptom'=>3]);
      pivot::create(['id_disease'=>18, 'id_symptom'=>59]);
      pivot::create(['id_disease'=>18, 'id_symptom'=>14]);
      pivot::create(['id_disease'=>18, 'id_symptom'=>5]);

      // |19| LEGIONELOSIS
      pivot::create(['id_disease'=>19, 'id_symptom'=>14]);
      pivot::create(['id_disease'=>19, 'id_symptom'=>25]);
      pivot::create(['id_disease'=>19, 'id_symptom'=>4]);
      pivot::create(['id_disease'=>19, 'id_symptom'=>61]);
      pivot::create(['id_disease'=>19, 'id_symptom'=>10]);
      pivot::create(['id_disease'=>19, 'id_symptom'=>42]);
      pivot::create(['id_disease'=>19, 'id_symptom'=>32]);
      pivot::create(['id_disease'=>19, 'id_symptom'=>66]);

      // |20| MEDIASTINITIS
      pivot::create(['id_disease'=>20, 'id_symptom'=>26]);
      pivot::create(['id_disease'=>20, 'id_symptom'=>43]);
      pivot::create(['id_disease'=>20, 'id_symptom'=>4]);
      pivot::create(['id_disease'=>20, 'id_symptom'=>42]);
      pivot::create(['id_disease'=>20, 'id_symptom'=>25]);
      pivot::create(['id_disease'=>20, 'id_symptom'=>67]);

      // |21| MESOTELIOMA
      pivot::create(['id_disease'=>21, 'id_symptom'=>12]);
      pivot::create(['id_disease'=>21, 'id_symptom'=>14]);
      pivot::create(['id_disease'=>21, 'id_symptom'=>11]);
      pivot::create(['id_disease'=>21, 'id_symptom'=>68]);
      pivot::create(['id_disease'=>21, 'id_symptom'=>24]);
      pivot::create(['id_disease'=>21, 'id_symptom'=>57]);
      pivot::create(['id_disease'=>21, 'id_symptom'=>69]);

      // |22| NEUMOCONIOSIS
      pivot::create(['id_disease'=>22, 'id_symptom'=>14]);
      pivot::create(['id_disease'=>22, 'id_symptom'=>25]);
      pivot::create(['id_disease'=>22, 'id_symptom'=>70]);
      pivot::create(['id_disease'=>22, 'id_symptom'=>24]);
      pivot::create(['id_disease'=>22, 'id_symptom'=>4]);
      pivot::create(['id_disease'=>22, 'id_symptom'=>71]);

      // |23| NEUMOMEDIASTINO
      pivot::create(['id_disease'=>23, 'id_symptom'=>26]);
      pivot::create(['id_disease'=>23, 'id_symptom'=>72]);
      pivot::create(['id_disease'=>23, 'id_symptom'=>21]);
      pivot::create(['id_disease'=>23, 'id_symptom'=>42]);
      pivot::create(['id_disease'=>23, 'id_symptom'=>25]);

      // |24| NEUMONÍA
      pivot::create(['id_disease'=>24, 'id_symptom'=>12]);
      pivot::create(['id_disease'=>24, 'id_symptom'=>73]);
      pivot::create(['id_disease'=>24, 'id_symptom'=>14]);
      pivot::create(['id_disease'=>24, 'id_symptom'=>17]);
      pivot::create(['id_disease'=>24, 'id_symptom'=>4]);
      pivot::create(['id_disease'=>24, 'id_symptom'=>43]);
      pivot::create(['id_disease'=>24, 'id_symptom'=>74]);
      pivot::create(['id_disease'=>24, 'id_symptom'=>62]);
      pivot::create(['id_disease'=>24, 'id_symptom'=>63]);
      pivot::create(['id_disease'=>24, 'id_symptom'=>75]);
      pivot::create(['id_disease'=>24, 'id_symptom'=>25]);

      // |25| NEUMOTÓRAX
      pivot::create(['id_disease'=>25, 'id_symptom'=>26]);
      pivot::create(['id_disease'=>25, 'id_symptom'=>25]);
      pivot::create(['id_disease'=>25, 'id_symptom'=>14]);
      pivot::create(['id_disease'=>25, 'id_symptom'=>12]);
      pivot::create(['id_disease'=>25, 'id_symptom'=>76]);
      pivot::create(['id_disease'=>25, 'id_symptom'=>17]);

      // |26| PESTE PULMONAR
      pivot::create(['id_disease'=>26, 'id_symptom'=>4]);
      pivot::create(['id_disease'=>26, 'id_symptom'=>76]);
      pivot::create(['id_disease'=>26, 'id_symptom'=>61]);
      pivot::create(['id_disease'=>26, 'id_symptom'=>10]);
      pivot::create(['id_disease'=>26, 'id_symptom'=>25]);
      pivot::create(['id_disease'=>26, 'id_symptom'=>62]);

      // |27| PLEURITIS
      pivot::create(['id_disease'=>27, 'id_symptom'=>12]);
      pivot::create(['id_disease'=>27, 'id_symptom'=>11]);
      pivot::create(['id_disease'=>27, 'id_symptom'=>14]);
      pivot::create(['id_disease'=>27, 'id_symptom'=>4]);
      pivot::create(['id_disease'=>27, 'id_symptom'=>51]);
      pivot::create(['id_disease'=>27, 'id_symptom'=>37]);
      pivot::create(['id_disease'=>27, 'id_symptom'=>42]);

      // |28| RESFRIADO COMÚN
      pivot::create(['id_disease'=>28, 'id_symptom'=>28]);
      pivot::create(['id_disease'=>28, 'id_symptom'=>14]);
      pivot::create(['id_disease'=>28, 'id_symptom'=>65]);
      pivot::create(['id_disease'=>28, 'id_symptom'=>77]);
      pivot::create(['id_disease'=>28, 'id_symptom'=>4]);
      pivot::create(['id_disease'=>28, 'id_symptom'=>42]);
      pivot::create(['id_disease'=>28, 'id_symptom'=>10]);

      // |29| RINOSINUSITIS
      pivot::create(['id_disease'=>29, 'id_symptom'=>28]);
      pivot::create(['id_disease'=>29, 'id_symptom'=>78]);
      pivot::create(['id_disease'=>29, 'id_symptom'=>76]);
      pivot::create(['id_disease'=>29, 'id_symptom'=>14]);
      pivot::create(['id_disease'=>29, 'id_symptom'=>79]);
      pivot::create(['id_disease'=>29, 'id_symptom'=>80]);
      pivot::create(['id_disease'=>29, 'id_symptom'=>4]);

      // |30| SIDEROSIS
      pivot::create(['id_disease'=>30, 'id_symptom'=>14]);
      pivot::create(['id_disease'=>30, 'id_symptom'=>81]);
      pivot::create(['id_disease'=>30, 'id_symptom'=>25]);
      pivot::create(['id_disease'=>30, 'id_symptom'=>38]);
      pivot::create(['id_disease'=>30, 'id_symptom'=>57]);
      pivot::create(['id_disease'=>30, 'id_symptom'=>82]);

      // |31| SILICOSIS
      pivot::create(['id_disease'=>31, 'id_symptom'=>25]);
      pivot::create(['id_disease'=>31, 'id_symptom'=>4]);
      pivot::create(['id_disease'=>31, 'id_symptom'=>38]);
      pivot::create(['id_disease'=>31, 'id_symptom'=>21]);
      pivot::create(['id_disease'=>31, 'id_symptom'=>24]);
      pivot::create(['id_disease'=>31, 'id_symptom'=>71]);
      pivot::create(['id_disease'=>31, 'id_symptom'=>12]);
      pivot::create(['id_disease'=>31, 'id_symptom'=>25]);

      // |32| SÍNDROME DE APNEA E HIPOPNEA OBSTRUCTIVAS DEL SUEÑO (SAHOS)
      pivot::create(['id_disease'=>32, 'id_symptom'=>34]);
      pivot::create(['id_disease'=>32, 'id_symptom'=>83]);
      pivot::create(['id_disease'=>32, 'id_symptom'=>84]);
      pivot::create(['id_disease'=>32, 'id_symptom'=>85]);
      pivot::create(['id_disease'=>32, 'id_symptom'=>86]);
      pivot::create(['id_disease'=>32, 'id_symptom'=>80]);

      // |33| SINUSITIS
      pivot::create(['id_disease'=>33, 'id_symptom'=>78]);
      pivot::create(['id_disease'=>33, 'id_symptom'=>10]);
      pivot::create(['id_disease'=>33, 'id_symptom'=>29]);
      pivot::create(['id_disease'=>33, 'id_symptom'=>28]);
      pivot::create(['id_disease'=>33, 'id_symptom'=>14]);
      pivot::create(['id_disease'=>33, 'id_symptom'=>4]);
      pivot::create(['id_disease'=>33, 'id_symptom'=>7]);
      pivot::create(['id_disease'=>33, 'id_symptom'=>3]);

      // |34| TABAQUISMO
      pivot::create(['id_disease'=>34, 'id_symptom'=>38]);
      pivot::create(['id_disease'=>34, 'id_symptom'=>37]);
      pivot::create(['id_disease'=>34, 'id_symptom'=>25]);
      pivot::create(['id_disease'=>34, 'id_symptom'=>34]);
      pivot::create(['id_disease'=>34, 'id_symptom'=>14]);
      pivot::create(['id_disease'=>34, 'id_symptom'=>87]);
      pivot::create(['id_disease'=>34, 'id_symptom'=>26]);

      // |35| TOSFERINA
      pivot::create(['id_disease'=>35, 'id_symptom'=>63]);
      pivot::create(['id_disease'=>35, 'id_symptom'=>56]);
      pivot::create(['id_disease'=>35, 'id_symptom'=>25]);
      pivot::create(['id_disease'=>35, 'id_symptom'=>4]);
      pivot::create(['id_disease'=>35, 'id_symptom'=>75]);
      pivot::create(['id_disease'=>35, 'id_symptom'=>42]);

      // |36| TRAQUEÍTIS
      pivot::create(['id_disease'=>36, 'id_symptom'=>88]);
      pivot::create(['id_disease'=>36, 'id_symptom'=>14]);
      pivot::create(['id_disease'=>36, 'id_symptom'=>89]);
      pivot::create(['id_disease'=>36, 'id_symptom'=>26]);
      pivot::create(['id_disease'=>36, 'id_symptom'=>4]);
      pivot::create(['id_disease'=>36, 'id_symptom'=>6]);
      pivot::create(['id_disease'=>36, 'id_symptom'=>15]);

      // |37| TROMBOEMBOLISMO PULMONAR
      pivot::create(['id_disease'=>37, 'id_symptom'=>11]);
      pivot::create(['id_disease'=>37, 'id_symptom'=>51]);
      pivot::create(['id_disease'=>37, 'id_symptom'=>90]);
      pivot::create(['id_disease'=>37, 'id_symptom'=>56]);
      pivot::create(['id_disease'=>37, 'id_symptom'=>26]);
      pivot::create(['id_disease'=>37, 'id_symptom'=>21]);

      // |38| TUBERCULOSIS
      pivot::create(['id_disease'=>38, 'id_symptom'=>21]);
      pivot::create(['id_disease'=>38, 'id_symptom'=>12]);
      pivot::create(['id_disease'=>38, 'id_symptom'=>36]);
      pivot::create(['id_disease'=>38, 'id_symptom'=>38]);
      pivot::create(['id_disease'=>38, 'id_symptom'=>24]);
      pivot::create(['id_disease'=>38, 'id_symptom'=>4]);
      pivot::create(['id_disease'=>38, 'id_symptom'=>43]);

    }
}
