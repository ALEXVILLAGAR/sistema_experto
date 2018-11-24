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

      /* |1|*/ Disease::create(['enfermedad'=> 'AMIGDALITIS','descripcion'=>'La amigdalitis o anginas es la inflamación de una o de las dos amígdalas palatinas (masas de tejido ovales, carnosas, grandes que están en la pared lateral de la orofaringe a cada lado de la garganta). Estas agrupaciones de tejido contienen las células que producen anticuerpos útiles en la lucha contra la infección.','enlace'=>'https://es.wikipedia.org/wiki/Amigdalitis?fbclid=IwAR3qGpCnjIpYSPKaWSFNvUp38XMYavuLNE6MNQveulS_ICZ76rOvlk2gedE']);

      /* |2|*/ Disease::create(['enfermedad'=> 'ASMA','descripcion'=>'El asma es una enfermedad del sistema respiratorio caracterizada por una inflamación crónica de la vía aérea, la enfermedad puede tener un curso agudo, subagudo o crónico, dependiendo de la frecuencia, duración e intensidad de sus manifestaciones clínicas','enlace'=>'https://es.wikipedia.org/wiki/Asma']);

      /* |3|*/ Disease::create(['enfermedad'=> 'BRONQUIECTASIAS','descripcion'=>'La bronquiectasia es una dilatación anormal e irreversible del árbol bronquial, encargado de conducir el aire desde la tráquea hasta la unidad funcional respiratoria (alvéolo pulmonar), que puede ser localizada o generalizada. Fue descrita por primera vez en 1819 por el médico francés René Laënnec.','enlace'=>'https://es.wikipedia.org/wiki/Bronquiectasia']);

      /* |4|*/ Disease::create(['enfermedad'=> 'BRONQUIOLITIS','descripcion'=>'La bronquiolitis es la inflamación de las vías aéreas pequeñas, fundamentalmente en niños menores de 2 años. En adultos, la bronquiolitis es una lesión que se desarrolla en los pulmones de pacientes fumadores y aunque en general tiene buen pronóstico, tiende a evolucionar hacia la fibrosis pulmonar y ocasionar en el paciente franca limitación funcional y muerte.','enlace'=>'https://es.wikipedia.org/wiki/Bronquiolitis']);

      /* |5|*/ Disease::create(['enfermedad'=> 'BRONQUITIS','descripcion'=>'La bronquitis1​ es una inflamación de las vías aéreas bajas. Sucede cuando los bronquios, situados entre los pulmones, se inflaman a causa de una infección o por otros motivos.','enlace'=>'https://es.wikipedia.org/wiki/Bronquitis']);

      /* |6|*/ Disease::create(['enfermedad'=> 'CÁNCER DE LARINGE','descripcion'=>'El cáncer de laringe es una enfermedad maligna en el órgano del tracto respiratorio conocido como laringe o "caja de la voz". La laringe se localiza en la parte central y anterior del cuello. Las funciones de la laringe son tres: la fonación (emisión de voz), deglución y respiración.','enlace'=>'https://es.wikipedia.org/wiki/C%C3%A1ncer_de_laringe']);

      /* |7|*/ Disease::create(['enfermedad'=> 'CÁNCER DE PULMÓN','descripcion'=>'El cáncer de pulmón es un conjunto de enfermedades resultantes del crecimiento maligno de células del tracto respiratorio, en particular del tejido pulmonar, y uno de los tipos de cáncer más frecuentes a nivel mundial. El cáncer de pulmón suele originarse a partir de células epiteliales, y puede derivar en metástasis e infiltración a otros tejidos del cuerpo.','enlace'=>'https://es.wikipedia.org/wiki/C%C3%A1ncer_de_pulm%C3%B3n']);

      /* |8|*/ Disease::create(['enfermedad'=> 'DERRAME PLEURAL','descripcion'=>'El derrame pleural es una acumulación patológica de materia prima en el espacio pleural. También se le conoce como pleuresía o síndrome de interposición líquida. Es una enfermedad frecuente con más de 50 causas reconocidas incluyendo enfermedades locales de la pleura, del pulmón subyacente, enfermedades sistémicas, disfunción de órganos y fármacos.','enlace'=>'https://es.wikipedia.org/wiki/Derrame_pleural']);

      /* |9|*/ Disease::create(['enfermedad'=> 'DIFTERIA','descripcion'=>'La difteria es una enfermedad infecciosa aguda epidémica, ocasionada por la exotoxina proteica producida por Corynebacterium diphtheriae (bacilo de Klebs-Löffler). Se caracteriza por la aparición de falsas membranas (pseudomembranas) firmemente adheridas, de exudado fibrinoso, que se forman principalmente en las superficies mucosas de las vías respiratorias y digestivas superiores. Suele afectar a las amígdalas, garganta, nariz, miocardio, fibras nerviosas o piel.','enlace'=>'https://es.wikipedia.org/wiki/Difteria']);

      /*|10|*/ Disease::create(['enfermedad'=> 'ENFERMEDAD PULMONAR OBSTRUCTIVA CRÓNICA (EPOC)','descripcion'=>'La enfermedad pulmonar obstructiva crónica (EPOC)1​ es un trastorno pulmonar que se caracteriza por la existencia de una obstrucción de las vías respiratorias generalmente progresiva e irreversible. Se encuentra una mayor incidencia en personas expuestas al humo del tabaco y produce como síntoma principal una disminución de la capacidad respiratoria, que avanza lentamente con el paso de los años y ocasiona un deterioro considerable en la calidad de vida de las personas afectadas, pudiendo ocasionar una muerte prematura.','enlace'=>'https://es.wikipedia.org/wiki/Enfermedad_pulmonar_obstructiva_cr%C3%B3nica']);

      /*|11|*/ Disease::create(['enfermedad'=> 'ENFISEMA PULMONAR','descripcion'=>'Un enfisema pulmonar se define en términos patológicos por el agrandamiento permanente de los espacios aéreos distales a los bronquiolos terminales, con una destrucción de la pared alveolar, con o sin fibrosis manifiesta. El enfisema aparece cuando se produce un desequilibrio, bien porque aumenta la capacidad elastolítica o porque disminuye la actividad antielastolítica.','enlace'=>'https://es.wikipedia.org/wiki/Enfisema_pulmonar']);

      /*|12|*/ Disease::create(['enfermedad'=> 'ENFISEMA SUBCUTÁNEO','descripcion'=>'El enfisema subcutáneo, también llamado enfisema tisular, es una condición ocasionada por la penetración de aire en los tejidos subcutáneos. Generalmente, el aire proviene de la cavidad torácica, por lo que es comúnmente observado en torso, cuello y cara. Puede ser producto de la perforación de algún elemento de los sistemas respiratorio o gastrointestinal.','enlace'=>'https://es.wikipedia.org/wiki/Enfisema_subcut%C3%A1neo']);

      /*|13|*/ Disease::create(['enfermedad'=> 'ESTENOSIS DE LA VÁLVULA PULMONAR','descripcion'=>'La estenosis de la válvula pulmonar es una patología cardíaca en la que el flujo de sangre saliendo desde el ventrículo derecho del corazón, es obstruido a nivel de la válvula pulmonar. Eso resulta en una reducción del flujo de sangre hacia los pulmones. Es una cardiopatía frecuente en el Síndrome de Noonan.','enlace'=>'https://es.wikipedia.org/wiki/Estenosis_pulmon']);

      /*|14|*/ Disease::create(['enfermedad'=> 'FARINGITIS','descripcion'=>'La faringitis es la inflamación de la mucosa que reviste la faringe. Las más frecuentes causas de la faringitis son las infecciones víricas, y en algunas ocasiones, infecciones bacterianas o reacciones alérgicas. Los principales agentes causantes bacterianos son Streptococcus pyogenes y Haemophilus influenzae, entre otros.','enlace'=>'https://es.wikipedia.org/wiki/Faringitis']);

      /*|15|*/ Disease::create(['enfermedad'=> 'FARINGOAMIGDALITIS','descripcion'=>'La faringoamigdalitis es un término médico que combina faringitis con amigdalitis, tanto bacteriana como viral. Es una de las infecciones más comunes en niños. La faringoamigdalitis es una enfermedad infecciosa y, por tanto, adquirida por contagio, bien a través del aire (al toser o estornudar) o bien por contacto directo.','enlace'=>'https://es.wikipedia.org/wiki/Faringoamigdalitis']);

      /*|16|*/ Disease::create(['enfermedad'=> 'FIBROSIS QUÍSTICA','descripcion'=>'La fibrosis quística es una enfermedad genética de herencia autosómica recesiva que afecta principalmente a los pulmones, y en menor medida al páncreas, hígado e intestino, provocando la acumulación de moco espeso y pegajoso en estas zonas. Es uno de los tipos de enfermedad pulmonar crónica más común en niños y adultos jóvenes, y es un trastorno potencialmente mortal; los pacientes suelen fallecer por infecciones pulmonares debido a Pseudomonas o Staphylococcus.','enlace'=>'https://es.wikipedia.org/wiki/Fibrosis_qu%C3%ADstica']);

      /*|17|*/ Disease::create(['enfermedad'=> 'GRIPE','descripcion'=>'La gripe, gripa o influenza es una enfermedad infecciosa causada por el influenzavirus A o el influenzavirus B géneros de virus de ARN de la familia Orthomyxoviridae. En los seres humanos puede afectar a las vías respiratorias, esto es, nariz, garganta, bronquios e infrecuentemente pulmones, sin embargo, también puede afectar al corazón, el cerebro o los músculos.','enlace'=>'https://es.wikipedia.org/wiki/Gripe']);

      /*|18|*/ Disease::create(['enfermedad'=> 'LARINGITIS','descripcion'=>'La laringitis es una inflamación de la laringe. La laringitis se considera aguda si dura un par de días. Se considera crónica si dura más de dos semanas. La laringitis, salvo muy raras excepciones, es causada por virus. Suele haber epidemias anuales entre los meses de noviembre y marzo, (en el hemisferio norte), así como también puede haber casos medianamente aislados.','enlace'=>'https://es.wikipedia.org/wiki/Laringitis']);

      /*|19|*/ Disease::create(['enfermedad'=> 'LEGIONELOSIS','descripcion'=>'La legionelosis, enfermedad del legionario o legionelanota es una enfermedad infecciosa provocada por una bacteria Gram negativa aeróbica, del género Legionella. Las epidemias de legionelosis suelen ser foco de atención de los medios de comunicación por su frecuente vinculación con instalaciones concretas. No obstante, esta enfermedad generalmente aparece como un caso aislado, no asociado con ningún brote oficialmente reconocido. La epidemia normalmente aparece en el verano o a principios de otoño, pero los casos pueden suceder a lo largo de todo el año.','enlace'=>'https://es.wikipedia.org/wiki/Legionelosis']);

      /*|20|*/ Disease::create(['enfermedad'=> 'MEDIASTINITIS','descripcion'=>'La mediastinitis es una enfermedad poco frecuente que se caracteriza por la existencia de inflamación de tipo agudo o crónico en el mediastino, generalmente provocada por gérmenes que colonizan esta región anatómica. Las causas más frecuentes son perforación del esófago, complicación de la cirugía cardiaca (mediastinitis postquirúrgica) y extensión al mediastino de procesos infecciosos próximos de origen pulmonar, pleural o dental.','enlace'=>'https://es.wikipedia.org/wiki/Mediastinitis']);

      /*|21|*/ Disease::create(['enfermedad'=> 'MESOTELIOMA','descripcion'=>'Mesotelioma (o mesotelioma maligno) es una forma rara de cáncer que se desarrolla a partir de células transformadas originarias del mesotelio, el revestimiento protector que cubre muchos de los órganos internos del cuerpo. La pleura (el revestimiento exterior de los pulmones y la pared torácica interna) es el lugar más frecuente donde se desarrolla el mesotelioma.','enlace'=>'https://es.wikipedia.org/wiki/Mesotelioma']);

      /*|22|*/ Disease::create(['enfermedad'=> 'NEUMOCONIOSIS','descripcion'=>'La neumoconiosis es un conjunto de enfermedades pulmonares producidas por la inhalación de polvo y la consecuente deposición de residuos sólidos inorgánicos o —con menos frecuencia— partículas orgánicas en los bronquios, los ganglios linfáticos y o el parénquima pulmonar, con o sin disfunción respiratoria asociada. El tipo, cantidad, tamaño y plasticidad de las partículas inhaladas así como la duración de la exposición y la resistencia individual determinan el tipo de sintomatología, así como el curso de la enfermedad.','enlace'=>'https://es.wikipedia.org/wiki/Neumoconiosis']);

      /*|23|*/ Disease::create(['enfermedad'=> 'NEUMOMEDIASTINO','descripcion'=>'El neumomediastino es la entrada de aire en el mediastino. El neumomediastino no es común, la afección puede ser causada por lesión o enfermedad. Ocurre con mayor frecuencia cuando el aire se filtra desde cualquier parte del pulmón o vías respiratorias hacia el mediastino.','enlace'=>'https://es.wikipedia.org/wiki/Neumomediastino']);

      /*|24|*/ Disease::create(['enfermedad'=> 'NEUMONÍA','descripcion'=>'La neumonía o pulmonía​ es una enfermedad del sistema respiratorio que consiste en la inflamación de los espacios alveolares de los pulmones.​ La mayoría de las veces la neumonía es infecciosa, pero no siempre es así. La neumonía puede afectar a un lóbulo pulmonar completo (neumonía lobular), a un segmento de lóbulo, a los alvéolos próximos a los bronquios (bronconeumonía) o al tejido intersticial (neumonía intersticial).','enlace'=>'https://es.wikipedia.org/wiki/Neumon%C3%ADa']);

      /*|25|*/ Disease::create(['enfermedad'=> 'NEUMOTÓRAX','descripcion'=>'El neumotórax es la entrada de aire en el espacio (virtual en el sano) interpleural: entre la pleura visceral y la parietal. Origina un colapso pulmonar de mayor o menor magnitud, con su correspondiente repercusión en la mecánica respiratoria y hemodinámica del paciente, donde el origen puede ser externo (perforación en la caja torácica) o interno (perforación en un pulmón).​ Por la descripción de su dolor, en localización e intensidad, puede ser confundido con una angina de pecho o un infarto de miocardio.','enlace'=>'https://es.wikipedia.org/wiki/Neumot%C3%B3rax']);

      /*|26|*/ Disease::create(['enfermedad'=> 'PESTE PULMONAR','descripcion'=>'Origina un colapso pulmonar de mayor o menor magnitud, con su correspondiente repercusión en la mecánica respiratoria y hemodinámica del paciente, donde el origen puede ser externo (perforación en la caja torácica) o interno (perforación en un pulmón). Por la descripción de su dolor, en localización e intensidad, puede ser confundido con una angina de pecho o un infarto de miocardio.','enlace'=>'https://es.wikipedia.org/wiki/Peste_pulmonar']);

      /*|27|*/ Disease::create(['enfermedad'=> 'PLEURITIS','descripcion'=>'La pleuritis, también conocida con el nombre de pleuresía, es una enfermedad que consiste en la inflamación de la pleura parietal (cobertura cutánea por encima de la superficie interna de la caja torácica) y de la pleura visceral (cobertura cutánea de los pulmones), por lo general como consecuencia de una neumonía. Al encontrarse estas membranas en contacto con los pulmones infectados, tienden a inflamarse originando un dolor agudo parecido al de una puñalada, dolor que se intensifica al inspirar profundamente o al toser.','enlace'=>'https://es.wikipedia.org/wiki/Pleuritis']);

      /*|28|*/ Disease::create(['enfermedad'=> 'RESFRIADO COMÚN','descripcion'=>'El resfriado común, también conocido como resfrío común, catarro o constipado, es una enfermedad infecciosa viral frecuente del aparato respiratorio superior que afecta la nariz, los senos paranasales, la faringe y la laringe. Es causado principalmente por el rinovirus, es autolimitada y puede afectar a personas de todas las edades. El virus se contagia a través del contacto con las secreciones de la persona infectada o la inhalación de sus gotitas de saliva. Los síntomas aparecen entre uno y dos días posterior al contacto.','enlace'=>'https://es.wikipedia.org/wiki/Resfriado_com%C3%BAn']);

      /*|29|*/ Disease::create(['enfermedad'=> 'RINOSINUSITIS','descripcion'=>'La rinosinusitis o sinusitis es una respuesta inflamatoria de la mucosa de la nariz y de los senos paranasales que puede deberse a una infección por agentes bacterianos, virales, hongos, un cuadro alérgico o a una combinación de estos factores. El término rinosinusitis define de mejor forma esta enfermedad puesto que casi siempre se acompaña de inflamación de la mucosa nasal o está precedida de ella.','enlace'=>'https://es.wikipedia.org/wiki/Rinosinusitis']);

      /*|30|*/ Disease::create(['enfermedad'=> 'SIDEROSIS','descripcion'=>'La siderosis es una forma especial de neumoconiosis ocasionada por la inhalación de polvo de hierro. Afecta sobre todo en trabajos de pulido de metales, soldadura al arco, y especialmente en mineros del hierro. La explicación del severo daño ocasionado por el hierro en el pulmón radica en que es un generador de radicales libres, especialmente peróxido de hidrógeno y radicales hidroxilo, que causan una severa inflamación y una evolución más rápida a neumoconiosis (fibrosis pulmonar).','enlace'=>'https://es.wikipedia.org/wiki/Siderosis_(hierro)']);

      /*|31|*/ Disease::create(['enfermedad'=> 'SILICOSIS','descripcion'=>'La silicosis es la neumoconiosis producida por inhalación de partículas de sílice, entendiendo por neumoconiosis la enfermedad ocasionada por un depósito de polvo en los pulmones con una reacción patológica frente al mismo, especialmente de tipo fibroso. Encabeza las listas de enfermedades respiratorias de origen escrotal laboral en países en desarrollo, donde se siguen observando formas graves. La silicosis es una enfermedad fibrósica-pulmonar de carácter irreversible y considerada enfermedad profesional incapacitante en muchos países.Es una enfermedad muy común en los mineros.','enlace'=>'https://es.wikipedia.org/wiki/Silicosis']);

      /*|32|*/ Disease::create(['enfermedad'=> 'SÍNDROME DE APNEA E HIPOPNEA OBSTRUCTIVAS DEL SUEÑO (SAHOS)','descripcion'=>'El síndrome de apnea-hipopnea durante el sueño es el más frecuente de los trastornos respiratorios que se producen durante el sueño, ya que afecta a alrededor del 4% de los adultos. Se ha llamado también síndrome de hipersomnia y respiración periódica (SHRP), y síndrome de Pickwick asociado con obesidad. Este trastorno del sueño se debe a episodios repetidos de obstrucción o colapso de la vía aérea superior que tiene lugar mientras la persona afectada duerme, debido a que la vía respiratoria se estrecha, se bloquea o se vuelve flexible.','enlace'=>'https://es.wikipedia.org/wiki/S%C3%ADndrome_de_apnea-hipopnea_durante_el_sue%C3%B1o']);

      /*|33|*/ Disease::create(['enfermedad'=> 'SINUSITIS','descripcion'=>'La sinusitis consiste en la infección e inflamación de la membrana mucosa que reviste la nariz y los senos paranasales. Los senos paranasales son espacios huecos donde pasa el aire por el interior de los huesos que rodean la nariz. Producen secreción mucosa que drena hacia la nariz. Si la nariz está inflamada, puede bloquear los senos paranasales y causar dolor.','enlace'=>'https://ia.wikipedia.org/wiki/Sinusitis']);

      /*|34|*/ Disease::create(['enfermedad'=> 'TABAQUISMO','descripcion'=>'El tabaquismo es la adicción al tabaco, provocada principalmente por uno de sus componentes más activos, la nicotina. El consumo habitual de tabaco produce enfermedades nocivas para la salud del consumidor. El tabaquismo es reconocido desde hace varios años como un problema de salud pública, debido a que los daños a la salud asociados al consumo del tabaco causan más de medio millón de muertes en el continente americano.','enlace'=>'https://es.wikipedia.org/wiki/Tabaquismo']);

      /*|35|*/ Disease::create(['enfermedad'=> 'TOSFERINA','descripcion'=>'La tos ferina o tosferina es una enfermedad infecciosa aguda sumamente contagiosa de las vías respiratorias altas causada por la bacteria gramnegativa Bordetella pertussis. Se caracteriza por inflamación traqueobronquial y accesos típicos de tos violenta y espasmódica con sensación de asfixia que terminan con un ruido estridente durante la inspiración (estridor inspiratorio).','enlace'=>'https://es.wikipedia.org/wiki/Tos_ferina']);

      /*|36|*/ Disease::create(['enfermedad'=> 'TRAQUEÍTIS','descripcion'=>'La traqueítis consiste en una infección aguda de la tráquea, que es la vía respiratoria que une la laringe con los bronquios. La traqueítis bacteriana afecta con mayor frecuencia a niños en edad escolar (en torno a los 5 años). El agente causante son unas bacterias, denominadas Staphylococcus aureus y Haemophilus influenzae.','enlace'=>'https://es.wikipedia.org/wiki/Traque%C3%ADtis']);

      /*|37|*/ Disease::create(['enfermedad'=> 'TROMBOEMBOLISMO PULMONAR','descripcion'=>'La tromboembolia pulmonar (TEP) es una situación clínico- patológica desencadenada por la obstrucción arterial pulmonar por causa de un trombo desarrollado in situ o de otro material procedente del sistema venoso. De ello resulta un defecto de oxígeno en los pulmones. Es una de las principales emergencias médicas. Se trata de una enfermedad potencialmente mortal; el diagnóstico no es fácil, pues a menudo existen pocos signos que puedan orientar al médico. Más del 70% de los pacientes con TEP presentan trombosis venosa profunda (TVP), aunque los trombos no sean detectables clínicamente. Por otra parte, aproximadamente el 50% de pacientes con TVP desarrollan TEP, con gran frecuencia asintomáticos.','enlace'=>'https://es.wikipedia.org/wiki/Tromboembolismo_pulmonar']);

      /*|38|*/ Disease::create(['enfermedad'=> 'TUBERCULOSIS','descripcion'=>'La tuberculosis es una infección bacteriana contagiosa que compromete principalmente a los pulmones, pero puede propagarse a otros órganos. La especie de bacteria más importante y representativa causante de la tuberculosis es Mycobacterium tuberculosis o bacilo de Koch, perteneciente al complejo Mycobacterium tuberculosis. La tuberculosis es, posiblemente, la enfermedad infecciosa más prevalente en el mundo. Considerando su forma latente, en la cual no presenta síntomas, se estima que afecta al 33% de la población mundial.2​ Así mismo, es la segunda causa de muerte a nivel global, y la primera entre las enfermedades infecciosas.','enlace'=>'https://es.wikipedia.org/wiki/Tuberculosis']);

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
