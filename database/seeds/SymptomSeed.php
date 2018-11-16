<?php

use Illuminate\Database\Seeder;
use App\Symptom;
use App\Disease;

class SymptomSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // ---------------------------------------------------------------------------------------------
      // ################################### LISTA DE ENFERMEDADES ###################################
      // ---------------------------------------------------------------------------------------------

      /* |1|*/ Disease::create(['enfermedad'=> 'AMIGDALITIS']);
      /* |2|*/ Disease::create(['enfermedad'=> 'ASMA']);
      /* |3|*/ Disease::create(['enfermedad'=> 'BRONQUIECTASIAS']);
      /* |4|*/ Disease::create(['enfermedad'=> 'BRONQUIOLITIS']);
      /* |5|*/ Disease::create(['enfermedad'=> 'BRONQUITIS']);
      /* |6|*/ Disease::create(['enfermedad'=> 'CÁNCER DE LARINGE']);
      /* |7|*/ Disease::create(['enfermedad'=> 'CÁNCER DE PULMÓN']);
      /* |8|*/ Disease::create(['enfermedad'=> 'DERRAME PLEURAL']);
      /* |9|*/ Disease::create(['enfermedad'=> 'DIFTERIA']);
      /*|10|*/ Disease::create(['enfermedad'=> 'ENFERMEDAD PULMONAR OBSTRUCTIVA CRÓNICA (EPOC)']);
      /*|11|*/ Disease::create(['enfermedad'=> 'ENFISEMA PULMONAR']);
      /*|12|*/ Disease::create(['enfermedad'=> 'ENFISEMA SUBCUTÁNEO']);
      /*|13|*/ Disease::create(['enfermedad'=> 'ESTENOSIS DE LA VÁLVULA PULMONAR']);
      /*|14|*/ Disease::create(['enfermedad'=> 'FARINGITIS']);
      /*|15|*/ Disease::create(['enfermedad'=> 'FARINGOAMIGDALITIS']);
      /*|16|*/ Disease::create(['enfermedad'=> 'FIBROSIS QUÍSTICA']);
      /*|17|*/ Disease::create(['enfermedad'=> 'GRIPE']);
      /*|18|*/ Disease::create(['enfermedad'=> 'LARINGITIS']);
      /*|19|*/ Disease::create(['enfermedad'=> 'LEGIONELOSIS']);
      /*|20|*/ Disease::create(['enfermedad'=> 'MEDIASTINITIS']);
      /*|21|*/ Disease::create(['enfermedad'=> 'MESOTELIOMA']);
      /*|22|*/ Disease::create(['enfermedad'=> 'NEUMOCONIOSIS']);
      /*|23|*/ Disease::create(['enfermedad'=> 'NEUMOMEDIASTINO']);
      /*|24|*/ Disease::create(['enfermedad'=> 'NEUMONÍA']);
      /*|25|*/ Disease::create(['enfermedad'=> 'NEUMOTÓRAX']);
      /*|26|*/ Disease::create(['enfermedad'=> 'PESTE PULMONAR']);
      /*|27|*/ Disease::create(['enfermedad'=> 'PLEURITIS']);
      /*|28|*/ Disease::create(['enfermedad'=> 'RESFRIADO COMÚN']);
      /*|29|*/ Disease::create(['enfermedad'=> 'RINOSINUSITIS']);
      /*|30|*/ Disease::create(['enfermedad'=> 'SIDEROSIS']);
      /*|31|*/ Disease::create(['enfermedad'=> 'SILICOSIS']);
      /*|32|*/ Disease::create(['enfermedad'=> 'SÍNDROME DE APNEA E HIPOPNEA OBSTRUCTIVAS DEL SUEÑO (SAHOS)']);
      /*|33|*/ Disease::create(['enfermedad'=> 'SINUSITIS']);
      /*|34|*/ Disease::create(['enfermedad'=> 'TABAQUISMO']);
      /*|35|*/ Disease::create(['enfermedad'=> 'TOSFERINA']);
      /*|36|*/ Disease::create(['enfermedad'=> 'TRAQUEÍTIS']);
      /*|37|*/ Disease::create(['enfermedad'=> 'TROMBOEMBOLISMO PULMONAR']);
      /*|38|*/ Disease::create(['enfermedad'=> 'TUBERCULOSIS']);

      // ---------------------------------------------------------------------------------------------
      // ##################################### LISTA DE SÍNTOMAS #####################################
      // ---------------------------------------------------------------------------------------------

      /* |1|*/ Symptom::create(['sintoma' => 'Amígdalas rojas e inflamadas']);
      /* |2|*/ Symptom::create(['sintoma' => 'Parches blancos o amarillos en las amígdalas']);
      /* |3|*/ Symptom::create(['sintoma' => 'Dolor de garganta']);
      /* |4|*/ Symptom::create(['sintoma' => 'Fiebre']);
      /* |5|*/ Symptom::create(['sintoma' => 'Glándulas sensibles y dilatadas en el cuello']);
      /* |6|*/ Symptom::create(['sintoma' => 'Voz rasposa, apagada o ronca']);
      /* |7|*/ Symptom::create(['sintoma' => 'Mal aliento']);
      /* |8|*/ Symptom::create(['sintoma' => 'Dolor estomacal']);
      /* |9|*/ Symptom::create(['sintoma' => 'Rigidez en el cuello']);
      /*|10|*/ Symptom::create(['sintoma' => 'Dolor de cabeza']);
      /*|11|*/ Symptom::create(['sintoma' => 'Falta de aire']);
      /*|12|*/ Symptom::create(['sintoma' => 'Dolor u opresión en el pecho']);
      /*|13|*/ Symptom::create(['sintoma' => 'Problemas para dormir']);
      /*|14|*/ Symptom::create(['sintoma' => 'Tos']);
      /*|15|*/ Symptom::create(['sintoma' => 'Silbido al respirar']);
      /*|16|*/ Symptom::create(['sintoma' => 'Ojeras']);
      /*|17|*/ Symptom::create(['sintoma' => 'Fatiga']);
      /*|18|*/ Symptom::create(['sintoma' => 'Estado irritable']);
      /*|19|*/ Symptom::create(['sintoma' => 'Nerviosismo']);
      /*|20|*/ Symptom::create(['sintoma' => 'Piel con color azul']);
      /*|21|*/ Symptom::create(['sintoma' => 'Tos crónica']);
      /*|22|*/ Symptom::create(['sintoma' => 'Infecciones bronquiales repetidas']);
      /*|23|*/ Symptom::create(['sintoma' => 'Dedos de la mano hinchados']);
      /*|24|*/ Symptom::create(['sintoma' => 'Pérdida de peso']);
      /*|25|*/ Symptom::create(['sintoma' => 'Dificultad para respirar']);
      /*|26|*/ Symptom::create(['sintoma' => 'Dolor torácico']);
      /*|27|*/ Symptom::create(['sintoma' => 'Palidez']);
      /*|28|*/ Symptom::create(['sintoma' => 'Congestión nasal']);
      /*|29|*/ Symptom::create(['sintoma' => 'Mucosidad']);
      /*|30|*/ Symptom::create(['sintoma' => 'Aumento de la frecuencia respiratoria']);
      /*|31|*/ Symptom::create(['sintoma' => 'Gripe']);
      /*|32|*/ Symptom::create(['sintoma' => 'Expectoración con sangre']);
      /*|33|*/ Symptom::create(['sintoma' => 'Dificultad para tragar']);
      /*|34|*/ Symptom::create(['sintoma' => 'Ronquera']);
      /*|35|*/ Symptom::create(['sintoma' => 'Dolor en el cuello o en el oído']);
      /*|36|*/ Symptom::create(['sintoma' => 'Tos con sangre o flema del color del metal oxidado']);
      /*|37|*/ Symptom::create(['sintoma' => 'Pérdida de apetito']);
      /*|38|*/ Symptom::create(['sintoma' => 'Cansancio o debilidad']);
      /*|39|*/ Symptom::create(['sintoma' => 'Hipo']);
      /*|40|*/ Symptom::create(['sintoma' => 'Incapacidad para permanecer acostado']);
      /*|41|*/ Symptom::create(['sintoma' => 'Incapacidad de hacer ejercicio']);
      /*|42|*/ Symptom::create(['sintoma' => 'Sensación general de malestar']);
      /*|43|*/ Symptom::create(['sintoma' => 'Escalofríos']);
      /*|44|*/ Symptom::create(['sintoma' => 'Dolor al deglutir']);
      /*|45|*/ Symptom::create(['sintoma' => 'Babeo']);
      /*|46|*/ Symptom::create(['sintoma' => 'Secreción nasal acuosa y con sangre']);
      /*|47|*/ Symptom::create(['sintoma' => 'Color azul en los labios']);
      /*|48|*/ Symptom::create(['sintoma' => 'Infecciones respiratorias frecuentes']);
      /*|49|*/ Symptom::create(['sintoma' => 'Hinchazón en los tobillos, los pies o las piernas']);
      /*|50|*/ Symptom::create(['sintoma' => 'Dificultad para respirar al hacer esfuerzo']);
      /*|51|*/ Symptom::create(['sintoma' => 'Respiración acelerada']);
      /*|52|*/ Symptom::create(['sintoma' => 'Molestias en el cuello y tórax']);
      /*|53|*/ Symptom::create(['sintoma' => 'Cambio en la voz']);
      /*|54|*/ Symptom::create(['sintoma' => 'Hinchazón de la cara entera']);
      /*|55|*/ Symptom::create(['sintoma' => 'Soplo cardíaco']);
      /*|56|*/ Symptom::create(['sintoma' => 'Desmayos']);
      /*|57|*/ Symptom::create(['sintoma' => 'Dolor abdominal']);
      /*|58|*/ Symptom::create(['sintoma' => 'Dolor que empeora al tragar o hablar']);
      /*|59|*/ Symptom::create(['sintoma' => 'Sequedad de la garganta']);
      /*|60|*/ Symptom::create(['sintoma' => 'Erupciones cutáneas']);
      /*|61|*/ Symptom::create(['sintoma' => 'Dolores musculares o articulares']);
      /*|62|*/ Symptom::create(['sintoma' => 'Náuseas']);
      /*|63|*/ Symptom::create(['sintoma' => 'Vómitos']);
      /*|64|*/ Symptom::create(['sintoma' => 'Voz débil o pérdida de la voz']);
      /*|65|*/ Symptom::create(['sintoma' => 'Sensación de cosquilleo y sensibilidad en la garganta']);
      /*|66|*/ Symptom::create(['sintoma' => 'Problemas con el equilibrio']);
      /*|67|*/ Symptom::create(['sintoma' => 'Sensibilidad de la pared torácica']);
      /*|68|*/ Symptom::create(['sintoma' => 'Bultos inusuales de tejido bajo la piel del pecho']);
      /*|69|*/ Symptom::create(['sintoma' => 'Inflamación abdominal']);
      /*|70|*/ Symptom::create(['sintoma' => 'Tos con esputo negro']);
      /*|71|*/ Symptom::create(['sintoma' => 'Sudoración nocturna']);
      /*|72|*/ Symptom::create(['sintoma' => 'Dolor en el cuello y brazos']);
      /*|73|*/ Symptom::create(['sintoma' => 'Desorientación o cambios de percepción mental']);
      /*|74|*/ Symptom::create(['sintoma' => 'Temperatura corporal más baja de lo normal']);
      /*|75|*/ Symptom::create(['sintoma' => 'Diarrea']);
      /*|76|*/ Symptom::create(['sintoma' => 'Mareo y desvanecimiento']);
      /*|77|*/ Symptom::create(['sintoma' => 'Estornudos']);
      /*|78|*/ Symptom::create(['sintoma' => 'Dolor y opresión facial']);
      /*|79|*/ Symptom::create(['sintoma' => 'Dolor dental']);
      /*|80|*/ Symptom::create(['sintoma' => 'Somnolencia']);
      /*|81|*/ Symptom::create(['sintoma' => 'Expectoración']);
      /*|82|*/ Symptom::create(['sintoma' => 'Colesterol']);
      /*|83|*/ Symptom::create(['sintoma' => 'Pausas respiratorias largas']);
      /*|84|*/ Symptom::create(['sintoma' => 'Despertares inconscientes']);
      /*|85|*/ Symptom::create(['sintoma' => 'Sensación de sueño no reparador']);
      /*|86|*/ Symptom::create(['sintoma' => 'Hipertensión arterial']);
      /*|87|*/ Symptom::create(['sintoma' => 'Coloración amarillenta en los dientes']);
      /*|88|*/ Symptom::create(['sintoma' => 'Irritación en el cuello']);
      /*|89|*/ Symptom::create(['sintoma' => 'Trastornos de sueño']);
      /*|90|*/ Symptom::create(['sintoma' => 'Taquicardia']);

    }
}
