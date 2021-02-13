<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Titles;
use App\Models\Chapters;
use App\Models\Articles;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        self::seedTitulos();
		$this->command->info('Tabla titulos inicializada con datos!');
		
		self::seedCapitulos();
        $this->command->info('Tabla capitulos inicializada con datos!');

        self::seedArticulos();
        $this->command->info('Tabla articulos inicializada con datos!');

        self::seedUsers();
        $this->command->info('Tabla de usuarios inicializada con datos!');
    }

    private function seedUsers()
	{
		DB::table('users')->delete();
		$user= new User;
		$user->id='1234';
		$user->name='Angie';
		$user->email='Angie@gmail.com';
		$user->password=bcrypt('43i873y');
		$user->save();
	}

    private function seedTitulos()
    {
        DB::table('titles')->delete();
        foreach( $this->arrayTitulos as $titulos ) {
            $t = new Titles;
            $t->title_id = $titulos['title_id'];
            $t->title_name = $titulos['title_name'];
            $t->title_des = $titulos['title_des'];
            $t->save();
      }
    }

    private $arrayTitulos = array(
		array(
            'title_id' => '1',
			'title_name' => 'TITULO I',
            'title_des' => 'GENERALIDADES'
		),
		array(
            'title_id' => '2',
			'title_name' => 'TITULO II',
            'title_des' => 'EJERCICIO DE LA  INGENIERIA, DE SUS PROFESIONES AFINES Y DE SUS PROFESIONES AUXILIARES'
		),
		array(
            'title_id' => '3',
			'title_name' => 'TITULO III',
            'title_des' => 'DEL CONSEJO PROFESIONAL NACIONAL DE INGENIERIA Y SUS CORRESPONDIENTES REGIONALES O SECCIONALES'
		),
		array(
            'title_id' => '4',
			'title_name' => 'TITULO IV',
            'title_des' => 'CODIGO DE ÉTICA PARA EL EJERCICIO DE LA INGENIERIA EN GENERAL Y SUS PROFESIONES AFINES Y AUXILIARES'
		),
		array(
            'title_id' => '5',
			'title_name' => 'TITULO V',
            'title_des' => 'REGIMEN DISCIPLINARIO'
        ),
        array(
            'title_id' => '6',
			'title_name' => 'TITULO VI',
            'title_des' => 'DISPOSICIONES FINALES'
		)
	);

    private function seedCapitulos()
    {
        DB::table('chapters')->delete();
        foreach( $this->arrayCapitulos as $capitulos ) {
            $c = new Chapters;
            $c->chapter_id = $capitulos['chapter_id'];
            $c->chapter_title = $capitulos['chapter_title'];
            $c->chapter_name = $capitulos['chapter_name'];
            $c->chapter_des = $capitulos['chapter_des'];
            $c->save();
      }
    }

    private $arrayCapitulos = array(
		array(
            'chapter_id' => '1',
			'chapter_title' => '1',
			'chapter_name' => 'CAPITULO I',
            'chapter_des' => 'DEFINICIÓN Y ALCANCES'
            
		),
        array(
            'chapter_id' => '2',
			'chapter_title' => '2',
            'chapter_name' => 'CAPITULO I',		
            'chapter_des' => 'REQUISITOS PARA EJERCER LA INGENIERÍA, SUS PROFESIONES AFINES Y SUS PROFESIONES AUXILIARES'
		),
        array(
            'chapter_id' => '3',
			'chapter_title' => '2',
			'chapter_name' => 'CAPITULO II',		
            'chapter_des' => 'DEL EJERCICIO ILEGAL DE LA INGENIERÍA Y DE SUS PROFESIONES AFINES Y AUXILIARES'
		),
        array(
            'chapter_id' => '4',
			'chapter_title' => '2',
			'chapter_name' => 'CAPITULO III',		
            'chapter_des' => 'DE LOS PROFESIONALES EXTRANJEROS'
		),
        array(
            'chapter_id' => '5',
			'chapter_title' => '3',
			'chapter_name' => 'CAPITULO I',
            'chapter_des' => 'DENOMINACIÓN, NATURALEZA JURÍDICA, INTEGRACIÓN Y FUNCIONES'
		),
        array(
            'chapter_id' => '6',
			'chapter_title' => '3',
            'chapter_name' => 'CAPITULO II',
            'chapter_des' => 'DE LOS CONSEJOS REGIONALES O SECCIONALES'
		),
		array(
            'chapter_id' => '7',
			'chapter_title' => '4',
			'chapter_name' => 'CAPITULO I',
            'chapter_des' => 'DISPOSICIONES GENERALES'
		),
        array(
            'chapter_id' => '8',
			'chapter_title' => '4',
            'chapter_name' => 'CAPITULO II',
            'chapter_des' => 'DE LOS DEBERES Y OBLIGACIONES DE LOS PROFESIONALES'
		),
        array(
            'chapter_id' => '9',
			'chapter_title' => '4',
            'chapter_name' => 'CAPITULO III',
            'chapter_des' => 'DE LAS INHABILIDADES E INCOMPATIBILIDADES DE LOS PROFESIONALES EN EL EJERCICIO DE LA PROFESIÓN'
		),
		array(
            'chapter_id' => '10',
			'chapter_title' => '5',
			'chapter_name' => 'CAPITULO I',
            'chapter_des' => 'DEFINICIÓN, PRINCIPIOS Y SANCIONES'
        ),
        array(
            'chapter_id' => '11',
			'chapter_title' => '5',
            'chapter_name' => 'CAPITULO II',
            'chapter_des' => 'PROCEDIMIENTO DISCIPLINARIO'
		),
        array(
            'chapter_id' => '12',
			'chapter_title' => '6',
            'chapter_name' => '',
            'chapter_des' => ''
		)
	);

    private function seedArticulos()
    {
        DB::table('articles')->delete();
        foreach( $this->arrayArticulos as $articulos ) {
            $a = new Articles;
            $a->article_id = $articulos['article_id'];
            $a->article_chapter = $articulos['article_chapter'];
            $a->article_name = $articulos['article_name'];
            $a->article_content = $articulos['article_content'];
            $a->save();
      }
    }

    private $arrayArticulos = array(
		array(
            'article_id' => '1',
            'article_chapter' => '1',
			'article_name' => 'ARTÍCULO 1o. CONCEPTO DE INGENIERÍA',
            'article_content' => 'Se entiende por ingeniería toda aplicación de las ciencias físicas, químicas y matemáticas; de la técnica industrial y en general, del ingenio humano, a la utilización e invención sobre la materia.'
		),
		array(
            'article_id' => '2',
            'article_chapter' => '1',
			'article_name' => 'ARTÍCULO 2o. EJERCICIO DE LA INGENIERÍA',
            'article_content' => 'Para los efectos de la presente ley, se entiende como ejercicio de la ingeniería, el desempeño de actividades tales como:
            a) Los estudios, la planeación, el diseño, el cálculo, la programación, la asesoría, la consultoría, la interventoría, la construcción, el mantenimiento y la administración de construcciones de edificios y viviendas de toda índole, de puentes, presas, muelles, canales, puertos, carreteras, vías urbanas y rurales, aeropuertos, ferrocarriles, teleféricos, acueductos, alcantarillados, riesgos (sic), drenajes y pavimentos; oleoductos, gasoductos, poliductos y en general líneas de conducción y transporte de hidrocarburos; líneas de transmisión eléctrica y en general todas aquellas obras de infraestructura para el servicio de la comunidad;
            b) Los estudios, proyectos, diseños y procesos industriales, textiles, electromecánicos, termoeléctricos, energéticos, mecánicos, eléctricos, electrónicos, de computación, de sistemas, teleinformáticos, agroindustriales, agronómicos, agrícolas, agrológicos, de alimentos, agrometeorológicos, ambientales, geofísicos, forestales, químicos, metalúrgicos, mineros, de petróleos, geológicos, geodésicos, geográficos, topográficos e hidrológicos;
            c) La planeación del transporte aéreo, terrestre y náutico y en general, todo asunto relacionado con la ejecución o desarrollo de las tareas o actividades de las profesiones especificadas en los subgrupos 02 y 03 de la Clasificación Nacional de Ocupaciones o normas que la sustituyan o complementen, en cuanto a la ingeniería, sus profesiones afines y auxiliares se refiere. También se entiende por ejercicio de la profesión para los efectos de esta ley, el presentarse o anunciarse como ingeniero o acceder a un cargo de nivel profesional utilizando dicho título.
            PARÁGRAFO. La instrucción, formación, enseñanza, docencia o cátedra dirigida a los estudiantes que aspiren a uno de los títulos profesionales, afines o auxiliares de la Ingeniería, en las materias o asignaturas que impliquen el conocimiento de la profesión, como máxima actividad del ejercicio profesional, solo podrá ser impartida por profesionales de la ingeniería, sus profesiones afines o sus profesiones auxiliares, según el caso, debidamente matriculados.'
		),
		array(
            'article_id' => '3',
            'article_chapter' => '1',
			'article_name' => 'ARTÍCULO 3o. PROFESIONES AUXILIARES DE LA INGENIERÍA',
            'article_content' => 'Se entiende por Profesiones Auxiliares de la Ingeniería, aquellas actividades que se ejercen en nivel medio, como auxiliares de los ingenieros, amparadas por un título académico en las modalidades educativas de formación técnica y tecnológica profesional, conferido por instituciones de educación superior legalmente autorizadas, tales como: Técnicos y tecnólogos en obras civiles, técnicos y tecnólogos laboratoristas, técnicos y tecnólogos constructores, técnicos y tecnólogos en topografía, técnicos y tecnólogos en minas, técnicos y tecnólogos delineantes en ingeniería, técnicos y tecnólogos en sistemas o en computación, analistas de sistemas y programadores, técnicos y tecnólogos en alimentos, técnicos y tecnólogos industriales, técnicos y tecnólogos hidráulicos y sanitarios, técnicos y tecnólogos teleinformáticos, técnicos y tecnólogos agroindustriales y los maestros de obras de construcción en sus diversas modalidades, que demuestren una experiencia de más de diez (10) años en actividades de la construcción, mediante certificaciones expedidas por ingenieros y/o arquitectos debidamente matriculados y, excepcionalmente, por las autoridades de obras públicas y/o de planeación, municipales.'
		),
		array(
            'article_id' => '4',
            'article_chapter' => '1',
			'article_name' => 'ARTÍCULO 4o. PROFESIONES AFINES',
            'article_content' => 'Son profesiones afines a la ingeniería, aquellas que siendo del nivel profesional, su ejercicio se desarrolla en actividades relacionadas con la ingeniería en cualquiera de sus áreas, o cuyo campo ocupacional es conexo a la ingeniería, tales como: La Administración de Obras Civiles, la Construcción en Ingeniería y Arquitectura; la Administración de Sistemas de Información; la Administración Ambiental y de los Recursos Naturales, la Bioingeniería y la Administración en Informática, entre otras.
            Nota: Sentencia C-570 de 2004, Corte Constitucional. El presente artículo fue declarado EXEQUIBLE.'
		),
		array(
            'article_id' => '5',
            'article_chapter' => '1',
			'article_name' => 'ARTÍCULO 5o. AMPLIACIÓN DE LA CLASIFICACIÓN NACIONAL DE OCUPACIONES',
            'article_content' => 'En todo caso, el Consejo Profesional Nacional de Ingeniería, Copnia, podrá ampliar el alcance de las actividades a que se refiere la Clasificación Nacional de Ocupaciones en los Subgrupos 02 y 03 o norma que la sustituya o reforme, de acuerdo con las nuevas modalidades de los programas y títulos académicos en ingeniería y sus profesiones afines y auxiliares que se presenten en el país.
            Nota: Sentencia C-191 de 2005. Corte Constitucional. El presente artículo fue declarado EXEQUIBLE de manera condicionada, en el entendido de que la facultad otorgada por la presente norma al COPNIA, tiene naturaleza exclusivamente técnica y no implica la posibilidad de agregar o excluir actividades a las que se refiere la clasificación nacional de ocupaciones en los subgrupos 02 y 03 o norma que la sustituya
            Sentencia C-667 de 2005, Corte Constitucional. En relación con el presente artículo, la Corte Constitucional declaró estarse a lo resuelto en la Sentencia C-191 de 2005.'
        ),
        //Titulo II
        array(
            'article_id' => '6',
            'article_chapter' => '2',
			'article_name' => 'ARTÍCULO 6o. REQUISITOS PARA EJERCER LA PROFESIÓN',
            'article_content' => 'Para poder ejercer legalmente la Ingeniería, sus profesiones afines o sus profesiones auxiliares en el territorio nacional, en las ramas o especialidades regidas por la presente ley, se requiere estar matriculado o inscrito en el Registro Profesional respectivo, que seguirá llevando el Copnia, lo cual se acreditará con la presentación de la tarjeta o documento adoptado por este para tal fin.
            PARÁGRAFO. En los casos en que los contratantes del sector público o privado, o cualquier usuario de los servicios de ingeniería, pretendan establecer si un profesional se encuentra legalmente habilitado o no, para ejercer la profesión, podrán sin perjuicio de los requisitos establecidos en el presente artículo, requerir al Copnia la expedición del respectivo certificado de vigencia.
            Nota: Sentencia C-570 de 2004, Corte Constitucional. El presente artículo fue declarado EXEQUIBLE en el entendido de que los profesionales de disciplinas relacionadas con la ingeniería que cuenten con consejos profesionales propios deberán inscribirse y obtener la matrícula ante estos consejos, después de pagar los derechos respectivos, mientras estos consejos no sean eliminados o modificados por el Legislador, a iniciativa del Gobierno'
		),
        array(
            'article_id' => '7',
            'article_chapter' => '2',
			'article_name' => 'ARTÍCULO 7o. REQUISITOS PARA OBTENER LA MATRÍCULA Y LA TARJETA DE MATRÍCULA PROFESIONAL',
            'article_content' => 'Sólo podrán ser matriculados en el Registro Profesional de Ingenieros y obtener tarjeta de matrícula profesional, para poder ejercer la profesión en el territorio nacional, quienes:
            a) Hayan adquirido el título académico de Ingeniero en cualquiera de sus ramas, otorgado por Instituciones de Educación Superior oficialmente reconocidas, de acuerdo con las normas legales vigentes;            
            b) Hayan adquirido el título académico de Ingeniero en cualquiera de sus ramas, otorgado por Instituciones de Educación Superior que funcionen en países con los cuales Colombia haya celebrado tratados o convenios sobre reciprocidad de títulos, situación que debe ser avalada por el ICFES o por el organismo que se determine para tal efecto;            
            c) Hayan adquirido el título académico de Ingeniero en cualquiera de sus ramas, otorgado por Instituciones de Educación Superior que funcionen en países con los cuales Colombia no haya celebrado tratados o convenios sobre reciprocidad de títulos; siempre y cuando hayan obtenido la homologación o convalidación del título académico ante las autoridades competentes, conforme con las normas vigentes sobre la materia.
            PARÁGRAFO 1o. Los títulos académicos de postgrado de los profesionales matriculados no serán susceptibles de inscripción en el registro profesional de ingeniería, por lo tanto, cuando se necesite acreditar tal calidad, bastará con la presentación del título de postgrado respectivo, debidamente otorgado por universidad o institución autorizada por el Estado para tal efecto. Si el título de postgrado fue otorgado en el exterior, solo se aceptará debidamente consularizado o apostillado de acuerdo con las normas que rigen la materia.
            PARÁGRAFO 2o. La información que los profesionales aporten como requisitos de su inscripción en el registro profesional respectivo, solamente podrá ser utilizada por el Copnia para efectos del control y vigilancia del ejercicio profesional correspondiente, excepto cuando sea requerida por las demás autoridades de fiscalización y control para lo de su competencia o cuando medie orden judicial.'
		),
        array(
            'article_id' => '8',
            'article_chapter' => '2',
			'article_name' => 'ARTÍCULO 8o. REQUISITOS PARA OBTENER EL CERTIFICADO DE INSCRIPCIÓN PROFESIONAL',
            'article_content' => ' Sólo podrán ser matriculados en el Registro Profesional respectivo y obtener certificado de inscripción profesional y su respectiva tarjeta, para poder ejercer alguna de las profesiones afines o de las profesiones auxiliares de la ingeniería en el territorio nacional, quienes:
                a) Hayan adquirido el título académico en alguna de sus profesiones afines o de las profesiones auxiliares de la ingeniería, otorgado por instituciones de Educación Superior oficialmente reconocidas, de acuerdo con las normas legales vigentes;                
                b) Hayan adquirido el título académico en alguna de las profesiones afines o de las profesiones auxiliares de la ingeniería, otorgado por instituciones de Educación Superior que funcionen en países con los cuales Colombia haya celebrado tratados o convenios sobre reciprocidad de títulos;
                c) Hayan adquirido el título académico en alguna de las profesiones afines o de las profesiones auxiliares de la ingeniería, otorgado por instituciones de Educación Superior que funcionen en países con los cuales Colombia no haya celebrado tratados o convenios sobre reciprocidad de títulos; siempre y cuando hayan obtenido la homologación o convalidación del título académico ante las autoridades competentes, de acuerdo con las normas vigentes.
                Nota: Sentencia C-570 de 2004, Corte Constitucional. El presente artículo fue declarado EXEQUIBLE por los cargos analizados.'
		),
        array(
            'article_id' => '9',
            'article_chapter' => '2',
			'article_name' => 'ARTÍCULO 9o. PROCEDIMIENTO DE INSCRIPCIÓN Y MATRÍCULA',
            'article_content' => 'Para obtener la matrícula profesional o el certificado de que trata la presente ley, el interesado deberá presentar ante el Consejo Profesional Seccional o Regional de ingeniería del domicilio de la Universidad o Institución que otorgó el título, el original correspondiente con su respectiva acta de grado, fotocopia del documento de identidad y el recibo de consignación de los derechos que para el efecto fije el Copnia.
            Verificados los requisitos, el Seccional o Regional correspondiente, otorgará la matrícula o el certificado, según el caso, el cual deberá ser confirmado por el Consejo Nacional de Ingeniería en la sesión ordinaria siguiente a su recibo, ordenando la expedición del documento respectivo.
            Nota: Sentencia C-570 de 2004, Corte Constitucional. El presente artículo fue declarado EXEQUIBLE en el entendido de que los profesionales de disciplinas relacionadas con la ingeniería que cuenten con consejos profesionales propios deberán inscribirse y obtener la Matrícula ante estos consejos, después de pagar los derechos respectivos, mientras estos Consejos no sean eliminados o modificados por el Legislador, a iniciativa del Gobierno'
		),
        array(
            'article_id' => '10',
            'article_chapter' => '2',
			'article_name' => 'ARTÍCULO 10',
            'article_content' => 'Para efectos de la inscripción o matrícula, toda Universidad o Institución de Educación Superior que otorgue títulos correspondientes a las profesiones aquí reglamentadas, deberá remitir de oficio o por requerimiento del Copnia, el listado de graduandos cada vez que este evento ocurra, tanto al Consejo Seccional o Regional de su domicilio, como al Consejo Nacional de Ingeniería, respectivamente.'
		),
        array(
            'article_id' => '11',
            'article_chapter' => '2',
			'article_name' => 'ARTÍCULO 11. POSESIÓN EN CARGOS, SUSCRIPCIÓN DE CONTRATOS O REALIZACIÓN DE DICTÁMENES TÉCNICOS QUE IMPLIQUEN EL EJERCICIO DE LA INGENIERÍA',
            'article_content' => 'Para poder tomar posesión de un cargo público o privado, en cuyo desempeño se requiera el conocimiento o el ejercicio de la ingeniería o de alguna de sus profesiones afines o auxiliares; para participar en licitaciones públicas o privadas cuyo objeto implique el ejercicio de la ingeniería en cualquiera de sus ramas; para suscribir contratos de ingeniería y para emitir dictámenes sobre aspectos técnicos de la ingeniería o de algunas de sus profesiones auxiliares ante organismos estatales o personas de carácter privado, jurídicas o naturales; para presentarse o utilizar el título de Ingeniero para acceder a cargos o desempeños cuyo requisito sea poseer un título profesional, se debe exigir la presentación, en original, del documento que acredita la inscripción o el registro profesional de que trata la presente ley.'
		),
        array(
            'article_id' => '12',
            'article_chapter' => '2',
			'article_name' => 'ARTÍCULO 12. EXPERIENCIA PROFESIONAL',
            'article_content' => ' Para los efectos del ejercicio de la ingeniería o de alguna de sus profesiones afines o auxiliares, la experiencia profesional solo se computará a partir de la fecha de expedición de la matrícula profesional o del certificado de inscripción profesional, respectivamente. Todas las matrículas profesionales, certificados de inscripción profesional y certificados de matrícula otorgados con anterioridad a la vigencia de la presente ley conservan su validez y se presumen auténticas.'
		),
        //capitilo II
        array(
            'article_id' => '13',
            'article_chapter' => '3',
			'article_name' => 'ARTÍCULO 13. EJERCICIO ILEGAL DE LA PROFESIÓN',
            'article_content' => 'Ejerce ilegalmente la profesión de la Ingeniera, de sus profesiones afines o de sus profesiones auxiliares y por lo tanto incurrirá en las sanciones que decrete la autoridad penal, administrativa o de policía correspondiente, la persona que sin cumplir los requisitos previstos en esta ley o en normas concordantes, practique cualquier acto comprendido en el ejercicio de estas profesiones. En igual infracción incurrirá la persona que, mediante avisos, propaganda, anuncios profesionales, instalación de oficinas, fijación de placas murales o en cualquier otra forma, actúe, se anuncie o se presente como Ingeniero o como Profesional Afín o como Profesional Auxiliar de la Ingeniería, sin el cumplimiento de los requisitos establecidos en la presente ley.
            PARÁGRAFO. También incurre en ejercicio ilegal de la profesión, el profesional de la ingeniería, de alguna de sus profesiones afines o profesiones auxiliares, que estando debidamente inscrito en el registro profesional de ingeniería, ejerza la profesión estando suspendida su matrícula profesional, certificado de inscripción profesional o certificado de matrícula, respectivamente.'
		),
        array(
            'article_id' => '14',
            'article_chapter' => '3',
			'article_name' => 'ARTÍCULO 14. ENCUBRIMIENTO DEL EJERCICIO ILEGAL DE LA PROFESIÓN',
            'article_content' => 'El servidor público que en el ejercicio de su cargo, autorice, facilite, patrocine, encubra o permita el ejercicio ilegal de la ingeniería o de alguna de sus profesiones afines o auxiliares, incurrirá en falta disciplinaria, sancionable de acuerdo con las normas legales vigentes.
            PARÁGRAFO. Si quien permite, o encubre el ejercicio de la profesión, por parte de quien no reúne los requisitos establecidos en la presente ley, está matriculado o inscrito como ingeniero o profesión afín o auxiliar, podrá ser suspendido del ejercicio legal de la profesión hasta por el término de cinco años.'
		),
        array(
            'article_id' => '15',
            'article_chapter' => '3',
			'article_name' => 'ARTÍCULO 15. SANCIONES',
            'article_content' => 'El particular que viole las disposiciones de la presente ley incurrirá, sin perjuicio de las sanciones penales y de policía, en multa de dos (2) a cincuenta (50) salarios mínimos mensuales legales vigentes.
            PARÁGRAFO. Las multas que se impongan como sanción por el incumplimiento de la presente ley y sus normas reglamentarias, deberán consignarse a favor del Tesoro Municipal del lugar donde se cometa la infracción y serán impuestas por el respectivo Alcalde Municipal o por quien haga sus veces, mediante la aplicación de las normas de procedimiento establecidas para la investigación y sanción de las contravenciones especiales, según el Código Nacional de Policía o norma que lo sustituya o modifique.'
		),
        array(
            'article_id' => '16',
            'article_chapter' => '3',
			'article_name' => 'ARTÍCULO 16. AVISO DEL EJERCICIO ILEGAL DE LA INGENIERÍA',
            'article_content' => 'El Consejo Profesional Nacional de Ingeniería, Copnia, deberá dar aviso a todas las empresas relacionadas con la ingeniería o que utilicen los servicios de ingenieros, de la denuncia que se instaure contra cualquier persona por ejercer ilegalmente la ingeniería, utilizando todos los medios a su alcance para que se impida tal infracción, con el fin de proteger a la sociedad del eventual riesgo a que este hecho la somete.'
		),
        array(
            'article_id' => '17',
            'article_chapter' => '3',
			'article_name' => 'ARTÍCULO 17. RESPONSABILIDAD DE LAS PERSONAS JURÍDICAS Y DE SUS REPRESENTANTES',
            'article_content' => 'La sociedad, firma, empresa u organización profesional, cuyas actividades comprendan, en forma exclusiva o parcial, alguna o algunas de aquellas que correspondan al ejercicio de la ingeniería, de sus profesiones afines o de sus profesiones auxiliares, está obligada a incluir en su nómina permanente, como mínimo, a un profesional matriculado en la carrera correspondiente al objeto social de la respectiva persona jurídica.
            PARÁGRAFO. Al representante legal de la persona jurídica que omita el cumplimiento de lo dispuesto en el presente artículo se le aplicarán las sanciones previstas para el ejercicio ilegal de profesión y oficio reglamentado, mediante la aplicación del procedimiento establecido para las contravenciones especiales de policía o aquel que lo sustituya.'
		),
        array(
            'article_id' => '18',
            'article_chapter' => '3',
			'article_name' => 'ARTÍCULO 18. DIRECCIÓN DE LABORES DE INGENIERÍA',
            'article_content' => 'Todo trabajo relacionado con el ejercicio de la Ingeniería, deberá ser dirigido por un ingeniero inscrito en el registro profesional de ingeniería y con tarjeta de matrícula profesional en la rama respectiva.
            PARÁGRAFO. Cuando la obra se trate de aquellas a las que se refiere la Ley 400 de 1997, además de los requisitos establecidos en la presente ley, se deberá cumplir con los establecidos en tal régimen o en la norma que lo sustituya, so pena de incurrir en las sanciones previstas por violación del Código de Ética y el correcto ejercicio de la profesión.
            Nota: Sentencia C-191 de 2005, Corte Constitucional. El presente artículo fue declarado EXEQUIBLE condicionalmente en el entendido de que la expresión “relacionado con” comprende exclusivamente las relaciones directas y necesarias con el ejercicio de la ingeniería.'
		),
        array(
            'article_id' => '19',
            'article_chapter' => '3',
			'article_name' => 'ARTÍCULO 19. DICTÁMENES PERICIALES',
            'article_content' => 'El cargo o la función de perito, cuando el dictamen comprenda cuestiones técnicas de la ingeniería, de sus profesiones afines o de sus profesiones auxiliares, se encomendará al profesional cuya especialidad corresponda a la materia objeto del dictamen.'
		),
        array(
            'article_id' => '20',
            'article_chapter' => '3',
			'article_name' => 'ARTÍCULO 20. PROPUESTAS Y CONTRATOS',
            'article_content' => 'Las propuestas que se formulen en las licitaciones y concursos abiertos por entidades públicas del orden nacional, seccional o local, para la adjudicación de contratos cuyo objeto implique el desarrollo de las actividades catalogadas como ejercicio de la ingeniería, deberán estar avalados, en todo caso, cuando menos, por un ingeniero inscrito y con tarjeta de matrícula profesional en la respectiva rama de la ingeniería.
            En los contratos que se celebren como resultado de la licitación o del concurso, los contratistas tendrán la obligación de encomendar los estudios, la dirección técnica, la ejecución de los trabajos o la interventoría, a profesionales inscritos en el registro profesional de ingeniería, acreditados con la tarjeta de matrícula profesional o, excepcionalmente, con la constancia o certificado de su vigencia.
            PARÁGRAFO. Lo dispuesto en este artículo se aplicará en todas sus partes, tanto a las propuestas que se presenten, como a los contratos de igual naturaleza y que, con el mismo objetivo, se celebren con las sociedades de economía mixta y con los establecimientos públicos y empresas industriales o comerciales del orden nacional, departamental, distrital o municipal y aquellas descentralizadas por servicios.
            Nota: Sentencia C-191 de 2005, Corte Constitucional. El presente artículo fue declarado EXEQUIBLE, salvo el aparte tachado del inciso 2o. que se declara INEXEQUIBLE.'
		),
        array(
            'article_id' => '21',
            'article_chapter' => '3',
			'article_name' => 'ARTÍCULO 21. DENUNCIA DEL EJERCICIO ILEGAL DE LA INGENIERÍA',
            'article_content' => 'El Consejo Profesional Nacional de Ingeniería, Copnia, denunciará y publicará por los medios a su alcance el ejercicio ilegal de la profesión de que tenga conocimiento, con el fin de proteger a la sociedad del eventual riesgo a que este hecho la somete.'
		),
        //capitulo III
        array(
            'article_id' => '22',
            'article_chapter' => '4',
			'article_name' => 'ARTÍCULO 22',
            'article_content' => 'En las construcciones, consultorías, estudios, proyectos, cálculos, diseños, instalaciones, montajes, interventorías, asesorías y demás trabajos relacionados con el ejercicio de las profesiones a las que se refiere la presente ley, la participación de los profesionales extranjeros no podrá ser superior a un veinte por ciento (20%) de su personal de ingenieros o profesionales auxiliares o afines colombianos, sin perjuicio de la aplicación de las normas laborales vigentes.
            PARÁGRAFO. Cuando previa autorización del Ministerio de Trabajo y tratándose de personal estrictamente técnico o científico indispensable, fuere necesaria una mayor participación de profesionales extranjeros que la establecida anteriormente, el patrono o la firma o entidad que requiera tal labor, dispondrá de un (1) año contado a partir de la fecha de la iniciación de labores, para suministrar adecuada capacitación a los profesionales nacionales, con el fin de reemplazar a los extranjeros, hasta completar el mínimo de ochenta por ciento (80%) de nacionales.'
		),array(
            'article_id' => '23',
            'article_chapter' => '4',
			'article_name' => 'ARTÍCULO 23. PERMISO TEMPORAL PARA EJERCER SIN MATRÍCULA A PERSONAS TITULADAS Y DOMICILIADAS EN EL EXTERIOR',
            'article_content' => 'Quien ostente el título académico de ingeniero o de profesión auxiliar o afín de las profesiones aquí reglamentadas, esté domiciliado en el exterior y pretenda vincularse bajo cualquier modalidad contractual para ejercer temporalmente la profesión en el territorio nacional, deberá obtener del Consejo Profesional Nacional de Ingeniería, Copnia, un permiso temporal para ejercer sin matrícula profesional, certificado de inscripción profesional o certificado de matrícula, según el caso; el cual tendrá validez por un (1) año y podrá ser renovado discrecionalmente por el Consejo Profesional Nacional de Ingeniería, Copnia, siempre, hasta por el plazo máximo del contrato o de la labor contratada, previa presentación de solicitud suficientemente motivada, por parte de la empresa contratante o por el profesional interesado o su representante; título o diploma debidamente consularizado o apostillado, según el caso; fotocopia del contrato que motiva su actividad en el país y el recibo de consignación de los derechos respectivos.
            PARÁGRAFO 1o.Los requisitos y el trámite establecidos en este artículo se aplicarán para todas las ramas de la ingeniería, de sus profesiones afines y de sus profesiones auxiliares, aunque tengan reglamentación especial y será otorgado por el Consejo Profesional Nacional de Ingeniería, Copnia, exclusivamente. La autoridad competente otorgará la visa respectiva, sin perjuicio del permiso temporal de que trata el presente artículo.            
            PARÁGRAFO 2o. Se eximen de la obligación de tramitar el Permiso Temporal a que se refiere el presente Artículo, los profesionales extranjeros invitados a dictar conferencias, seminarios, simposios, congresos, talleres de tipo técnico o científico, siempre y cuando no tengan carácter permanente.            
            PARÁGRAFO 3o. Si el profesional beneficiario del permiso temporal pretende laborar de manera indefinida en el país, deberá homologar o convalidar el título de acuerdo con las normas que rigen la materia y tramitar la matrícula profesional o el certificado de inscripción profesional, según el caso.
            Nota: Sentencia C-570 de 2004, Corte Constitucional. El presente artículo fue declarado CONDICIONALMENTE EXEQUIBLE "... en el entendido de que los profesionales titulados y domiciliados en el exterior en disciplinas relacionadas con la ingeniería y que deseen obtener un permiso temporal para trabajar deberán acudir al COPNIA, siempre y cuando su especialidad no cuente con un consejo profesional propio encargado de esa función. La declaración se restringe al cargo analizado", salvo el aparte tachado que se declara INEXEQUIBLE.'
		),
        //Titulo III
        array(
            'article_id' => '24',
            'article_chapter' => '5',
			'article_name' => 'ARTÍCULO 24. CONSEJO PROFESIONAL NACIONAL DE INGENIERÍA',
            'article_content' => 'En adelante el Consejo Profesional Nacional de Ingeniería y sus Profesiones Auxiliares, se denominará Consejo Profesional Nacional de Ingeniería y su sigla será "Copnia" y tendrá su sede principal en Bogotá, D.C.
            Notas:
            Mediante la Sentencia C-078 de 2003, la Corte Constitucional revisó las objeciones presidenciales a los artículos25, 26, 27, 28 y 80 delproyecto de Ley No. 44 de 2001 - Senado de la República-,218 de 2002 -Cámara de Representantes–, en cumplimiento de lo dispuesto en el artículo 167 de la Constitución Política.
            Sentencia C-649 de 2003, Corte Constitucional. Se declaró cumplida la exigencia constitucional del artículo 167 de la Carta Política.
            Sentencia C-570 de 2004, Corte Constitucional. El presente artículo fue declarado EXEQUIBLE por los cargos analizados.'
		),array(
            'article_id' => '25',
            'article_chapter' => '5',
			'article_name' => 'ARTÍCULO 25. RENTAS Y PATRIMONIO',
            'article_content' => 'Las rentas y el patrimonio del Copnia, estarán conformados por los recursos públicos que en actualidad posea, o que haya adquirido la Nación para su funcionamiento; por los recursos provenientes del cobro de certificados y constancias en ejercicio de sus funciones, cuyo valor será fijado de manera razonable de acuerdo con su determinación; por los recursos provenientes de los servicios a derechos de matrícula, tarjetas y permisos temporales. La t asa se distribuirá en forma equitativa entre los usuarios a partir de criterios relevantes que reconozcan los costos económicos requeridos, en las condiciones que fije el reglamento que adopte el Gobierno Nacional, derechos que no podrán exceder de la suma equivalente a un (1) salario mínimo mensual vigente.
            PARÁGRAFO. Para ejercer su función de policía administrativa, el Copnia contará con el apoyo, cuando así lo solicite, de las autoridades administrativas y de policía, nacionales, seccionales y locales, según el caso.
            Notas:
            Mediante la Sentencia C-078 de 2003, la Corte Constitucional revisó las objeciones presidenciales a los artículos25, 26, 27, 28 y 80 delproyecto de Ley No. 44 de 2001 - Senado de la República-,218 de 2002 -Cámara de Representantes–, en cumplimiento de lo dispuesto en el artículo 167 de la Constitución Política.
            Sentencia C-649 de 2003, Corte Constitucional. Se declaró cumplida la exigencia constitucional del artículo 167 de la Carta Política.
            Sentencia C-570 de 2004, Corte Constitucional. El presente artículo fue declarado EXEQUIBLE por los cargos analizados.'
		),array(
            'article_id' => '26',
            'article_chapter' => '5',
			'article_name' => 'ARTÍCULO 26. FUNCIONES ESPECÍFICAS DEL CONSEJO PROFESIONAL NACIONAL DE INGENIERÍA COPNIA',
            'article_content' => 'El Consejo Profesional Nacional de Ingeniería, Copnia, tendrá como funciones específicas las siguientes:
            a) Dictar su propio reglamento interno y el de los Consejos Seccionales o Regionales;
            b) (sic) Confirmar, aclarar, derogar o revocar las resoluciones de aprobación o denegación de expedición de matrículas profesionales, de certificados de inscripción profesional y de certificados de matrícula profesional, a profesionales de la ingeniería, de sus profesiones afines y de sus profesionales auxiliares, respectivamente, expedidas por los Consejos Seccionales o Regionales;
            c) Expedir las tarjetas de matrícula, de certificados de inscripción profesional y de certificado de matrícula a los ingenieros, profesionales afines y profesionales auxiliares de la ingeniería, respectivamente;
            d) Resolver en única instancia sobre la expedición o cancelación de los permisos temporales;
            e) Denunciar ante las autoridades competentes las violaciones al ejercicio legal de la ingeniería, de sus profesiones afines y de sus profesiones auxiliares;
            f) Denunciar ante las autoridades competentes los delitos y contravenciones de que tenga conocimiento con ocasión de sus funciones;
            g) Resolver en segunda instancia, los recursos que se interpongan contra las determinaciones que pongan fin a las actuaciones de primera instancia de los Consejos Seccionales o Regionales;
            h) Implementar y mantener, dentro de las técnicas de la informática y la tecnología moderna, el registro profesional de ingeniería correspondiente a los profesionales de la ingeniería, de sus profesiones afines y de sus profesiones auxiliares;
            i) Emitir conceptos y responder consultas sobre aspectos relacionados con el ejercicio de la ingeniería, sus profesiones afines y sus profesiones auxiliares, cuando así se le solicite para cualquier efecto legal o profesional;
            j) Servir de cuerpo consultivo oficial del Gobierno, en todos los asuntos inherentes a la reglamentación de la ingeniería, de sus profesiones afines y de sus profesiones auxiliares;
            k) Establecer el valor de los derechos provenientes del cobro de certificados y constancias, el cual será fijado de manera razonable de acuerdo con su determinación; y de los recursos provenientes por los servicios de derecho de matrícula, tarjetas y permisos temporales. La tasa se distribuirá en forma equitativa entre los usuarios a partir de criterios relevantes que recuperan los costos del servicio; en las condiciones que fije el reglamento que adopte el Gobierno Nacional, señalando el sistema y el método, para definir la recuperación de los costos de los servicios que se prestan a los usuarios o la participación de los servicios que se les proporcionan y la forma de hacer su reparto según el artículo 338 de la Constitución Política, derechos que no podrán exceder de la suma equivalente a un (1) salario mínimo legal mensual vigente;
            l) Aprobar y ejecutar, en forma autónoma, el presupuesto del Consejo Profesional Nacional de Ingeniería, Copnia, y el de los Consejos Regionales o Seccionales;
            m) Con el apoyo de las demás autoridades administrativas y de policía, inspeccionar, vigilar y controlar el ejercicio profesional de las personas naturales o jurídicas que ejerzan la ingeniería o alguna de sus profesiones auxiliares;
            n) Crear, reestructurar o suprimir sus Consejos Regionales o Seccionales, de acuerdo con las necesidades propias de la función de inspección, control y vigilancia del ejercicio profesional y las disponibilidades presupuestales respectivas;
            Nota: Sentencia C-570 de 2004, Corte Constitucional. Literal n) declarado INEXEQUIBLE
            o) Adoptar su propia planta de personal de acuerdo con sus necesidades y determinación;
            p) Velar por el cumplimiento de la presente ley y de las demás normas que la reglamenten y complementen;
            q) Presentar al Ministerio de Relaciones Exteriores, observaciones sobre la expedición de visas a ingenieros, profesionales afines y profesionales auxiliares de la ingeniería, solicitadas con el fin de ejercer su profesión en el territorio nacional;
            r) Presentar al Ministerio de Educación Nacional, observaciones sobre la aprobación de los programas de estudios y establecimientos educativos relacionados con la ingeniería, las profesiones afines y las profesiones auxiliares de esta;
            s) Denunciar ante las autoridades competentes las violaciones de las disposiciones que reglamentan el ejercicio de la ingeniería, sus profesiones afines y sus profesiones auxiliares y solicitar de aquellas la imposición de las sanciones correspondientes;
            t) Atender las quejas o denuncias hechas sobre la conducta de los ingenieros, profesionales afines y profesionales auxiliares de la ingeniería, que violen los mandatos de la presente ley, del correcto ejercicio y del Código de Ética Profesional absolviendo o sancionando, oportunamente, a los profesionales investigados;
            u) Las demás que le señalen la ley y demás normas reglamentarias y complementarias.
            Notas:
            Mediante la Sentencia C-078 de 2003, la Corte Constitucional revisó las objeciones presidenciales a los artículos25, 26, 27, 28 y 80 delproyecto de Ley No. 44 de 2001 - Senado de la República-,218 de 2002 -Cámara de Representantes–, en cumplimiento de lo dispuesto en el artículo 167 de la Constitución Política.
            Sentencia C-649 de 2003, Corte Constitucional. Se declaró cumplida la exigencia constitucional del artículo 167 de la Carta Política.
            Sentencia C-570 de 2004, Corte Constitucional. El presente artículo fue declarado EXEQUIBLE por los cargos analizados.'
		),
        //Capitulo II
        array(
            'article_id' => '27',
            'article_chapter' => '6',
			'article_name' => 'ARTÍCULO 27. CREACIÓN DE LOS CONSEJOS SECCIONALES Y REGIONALES',
            'article_content' => 'Facúltase al Consejo Profesional Nacional de Ingeniería, Copnia, para que con el voto de la mayoría de los miembros de su Junta de Consejeros y mediante resolución motivada, suprima, fusione o cree sus respectivos Consejos Seccionales o regionales cuando lo estime conveniente, los cuales podrán no coincidir con la organización territorial de la República.
            PARÁGRAFO. En todo caso, con el lleno de los requisitos establecidos en el presente artículo el Consejo Profesional Nacional de Ingeniería, Copnia, podrá crear Consejos Regionales, donde las necesidades de la función de control, inspección y vigilancia lo exijan. Estos tendrán jurisdicción sobre dos (2) o más departamentos.
            Nota: Sentencia C-570 de 2004, Corte Constitucional. El presente artículo fue declarado INEXEQUIBLE.'
		),array(
            'article_id' => '28',
            'article_chapter' => '6',
			'article_name' => 'ARTÍCULO 28. INTEGRACIÓN DE LA JUNTA DE CONSEJEROS REGIONAL O SECCIONAL',
            'article_content' => ' Las Juntas de Consejeros Regionales o Seccionales estarán integradas de la siguiente manera:
            El Gobernador del departamento en el cual funcione el Consejo Regional o Seccional, quien lo presidirá; pudiendo delegar, exclusivamente, en el Secretario de Obras Públicas del departamento o quien haga sus veces.
            2. El Secretario de Educación del departamento sede o su delegado.
            El Secretario de Planeación del departamento sede o quien haga sus veces, o su delegado.
            El Rector o el Decano de ingeniería de una de las universidades o instituciones de Educación Superior del departamento sede, que otorguen título de ingeniero, o de alguna de sus profesiones afines o de alguna de sus profesiones auxiliares, elegido en junta convocada por el Copnia para tal fin, en el caso en que existan más de una.
            El Presidente de una de las agremiaciones regionales de ingeniería, de sus profesiones afines o de sus profesiones auxiliares, elegido en junta convocada por el Copnia para tal fin, en el caso en que existan más de una en el departamento sede.
            PARÁGRAFO 1o. El período de los representantes elegidos en junta será de dos (2) años, pudiendo ser reelegidos solo para el período subsiguiente.
            PARÁGRAFO 2o. Los delegados deberán ser ingenieros de las ramas inspeccionadas, vigiladas y controladas por el Copnia, debidamente matriculados.'
		),
        //titulo 4
        array(
            'article_id' => '29',
            'article_chapter' => '7',
			'article_name' => 'ARTÍCULO 29. POSTULADOS ÉTICOS DEL EJERCICIO PROFESIONAL',
            'article_content' => 'El ejercicio profesional de la Ingeniería en todas sus ramas, de sus profesiones afines y sus respectivas profesiones auxiliares, debe ser guiado por criterios, conceptos y elevados fines, que propendan a enaltecerlo; por lo tanto deberá estar ajustado a las disposiciones de las siguientes normas que constituyen su Código de Ética Profesional.
            PARÁGRAFO. El Código de Ética Profesional adoptado mediante la presente ley será el marco del comportamiento profesional del ingeniero en general, de sus profesionales afines y de sus profesionales auxiliares y su violación será sancionada mediante el procedimiento establecido en el presente título.'
		),array(
            'article_id' => '30',
            'article_chapter' => '7',
			'article_name' => 'ARTÍCULO 30',
            'article_content' => 'Los ingenieros, sus profesionales afines y sus profesionales auxiliares, para todos los efectos del Código de Ética Profesional y su Régimen Disciplinario contemplados en esta ley, se denominarán "Los profesionales".'
		),
        //Capitulo II
        array(
            'article_id' => '31',
            'article_chapter' => '8',
			'article_name' => 'ARTÍCULO 31. DEBERES GENERALES DE LOS PROFESIONALES',
            'article_content' => ' Son deberes generales de los profesionales los siguientes:
            a) Cumplir con los requerimientos, citaciones y demás diligencias que formule u ordene el Consejo Profesional Nacional de Ingeniería respectivo o cualquiera de sus Consejos Seccionales o Regionales;
            b) Custodiar y cuidar los bienes, valores, documentación e información que por razón del ejercicio de su profesión, se le hayan encomendado o a los cuales tenga acceso; impidiendo o evitando su sustracción, destrucción, ocultamiento o utilización indebidos, de conformidad con los fines a que hayan sido destinados;
            c) Tratar con respeto, imparcialidad y rectitud a todas las personas con quienes tenga relación con motivo del ejercicio de la profesión;
            Nota: Sentencia C-570 de 2004, Corte Constitucional. El Literal c) declarado INEXEQUIBLE.
            d) Registrar en el Consejo Profesional Nacional de Ingeniería respectivo o en alguno de sus Consejos Seccionales o Regionales, su domicilio o dirección de la residencia y teléfono, dando aviso oportuno de cualquier cambio;
            Nota: Sentencia C-570 de 2004, Corte Constitucional. El Literal d) declarado INEXEQUIBLE.
            e) Permitir el acceso inmediato a los representantes del Consejo Profesional Nacional de Ingeniería respectivo y autoridades de policía, a los lugares donde deban adelantar sus investigaciones y el examen de los libros, documentos y diligencias correspondientes, así como prestarles la necesaria colaboración para el cumplido desempeño de sus funciones;
            f) Denunciar los delitos, contravenciones y faltas contra este Código de Ética, de que tuviere conocimiento con ocasión del ejercicio de su profesión, aportando toda la información y pruebas que tuviere en su poder;
            g) Los demás deberes incluidos en la presente ley y los indicados en todas las normas legales y técnicas relacionados con el ejercicio de su profesión.'
		),array(
            'article_id' => '32',
            'article_chapter' => '8',
			'article_name' => 'ARTÍCULO 32. PROHIBICIONES GENERALES A LOS PROFESIONALES',
            'article_content' => ' a) Nombrar, elegir, dar posesión o tener a su servicio, para el desempeño de un cargo privado o público que requiera ser desempeñado por profesionales de la ingeniería o alguna de sus profesiones afines o auxiliares, en forma permanente o transitoria, a personas que ejerzan ilegalmente la profesión;
            b) Permitir, tolerar o facilitar el ejercicio ilegal de las profesiones reguladas por esta ley;
            c) Solicitar o aceptar comisiones en dinero o en especie por concepto de adquisición de bienes y servicios para su cliente, sociedad, institución, etc., para el que preste sus servicios profesionales, salvo autorización legal o contractual;
            d) Ejecutar actos de violencia, malos tratos, injurias o calumnias contra superiores, subalternos, compañeros de trabajo, socios, clientes o funcionarios del Consejo Profesional Nacional de Ingeniería respectivo o alguno de sus Consejos Regionales o Seccionales;
            Nota: Sentencia C-570 de 2004, Corte Constitucional. El Literal d) declarado CONDICIONALMENTE EXEQUIBLE, "... en el entendido de que las conductas descritas no son sancionables cuando se cometan respecto de un colega o socio en un contexto ajeno al ámbito profesional".
            e) Ejecutar en el lugar donde ejerza su profesión, actos que atenten contra la moral y las buenas costumbres;
            Nota: Sentencia C-570 de 2004, Corte Constitucional. El Literal e) declarado INEXEQUIBLE.
            f) El reiterado e injustificado incumplimiento de las obligaciones civiles, comerciales o laborales, que haya contraído con ocasión del ejercicio de su profesión o de actividades relacionadas con este;
            g) Causar, intencional o culposamente, daño o pérdida de bienes, elementos, equipos, herramientas o documentos que hayan llegado a su poder por razón del ejercicio de su profesión;
            h) Proferir, en actos oficiales o privados relacionados con el ejercicio de la profesión, expresiones injuriosas o calumniosas contra el Consejo Profesional Nacional de Ingeniería, los miembros de la Junta de Consejeros o sus funcionarios; contra cualquier autoridad relacionada con el ámbito de la ingeniería o contra alguna de sus agremiaciones o sus directivas;
            Nota: Sentencia C-570 de 2004, Corte Constitucional. El Literal h) declarado INEXEQUIBLE.
            i) Incumplir las decisiones disciplinarias que imponga el Consejo Profesional Nacional de Ingeniería respectivo u obstaculizar su ejecución;
            j) Solicitar o recibir directamente o por interpuesta persona, gratificaciones, dádivas o recompensas en razón del ejercicio de su profesión, salvo autorización contractual o legal;
            k) Participar en licitaciones, concursar o suscribir contratos estatales cuyo objeto esté relacionado con el ejercicio de la ingeniería, estando incurso en alguna de las inhabilidades e incompatibilidades que establece la Constitución y la ley;
            l) Las demás prohibiciones incluidas en la presente ley y normas que la complementen y reglamenten.'
		),array(
            'article_id' => '33',
            'article_chapter' => '8',
			'article_name' => 'ARTÍCULO 33. DEBERES ESPECIALES DE LOS PROFESIONALES PARA CON LA SOCIEDAD',
            'article_content' => 'Son deberes especiales de los profesionales para con la sociedad:
            a) Interesarse por el bien público, con el objeto de contribuir con sus conocimientos, capacidad y experiencia para servir a la humanidad; <Jurisprudencia Vigencia>
            Nota: Sentencia C-570 de 2004, Corte Constitucional. El Literal a) declarado INEXEQUIBLE.
            b) Cooperar para el progreso de la sociedad, aportando su colaboración intelectual y material en obras culturales, ilustración técnica, ciencia aplicada e investigación científica;
            Nota: Sentencia C-570 de 2004, Corte Constitucional. El Literal b) declarado INEXEQUIBLE.
            c) Aplicar el máximo de su esfuerzo en el sentido de lograr una clara expresión hacia la comunidad de los aspectos técnicos y de los asuntos relacionados con sus respectivas, profesiones y su ejercicio;
            Nota: Sentencia C-570 de 2004, Corte Constitucional. El Literal c) declarado INEXEQUIBLE.
            d) Estudiar cuidadosamente el ambiente que será afectado en cada propuesta (sic) de tarea (sic), evaluando los impactos ambientales en los ecosistemas involucrados, urbanizados o naturales, incluido el entorno socioeconómico, seleccionando la mejor alternativa para contribuir a un desarrollo ambientalmente sano y sostenible, con el objeto de lograr la mejor calidad de vida para la población;
            e) Rechazar toda clase de recomendaciones en trabajos que impliquen daños evitables para el entorno humano y la naturaleza, tanto en espacios abiertos, como en el interior de edificios, evaluando su impacto ambiental, tanto en corto como en largo plazo;
            f) Ejercer la profesión sin supeditar sus conceptos o sus criterios profesionales a actividades partidistas;
            g) Ofrecer desinteresadamente sus servicios profesionales en caso de calamidad pública;
            h) Proteger la vida y salud de los miembros de la comunidad, evitando riesgos innecesarios en la ejecución de los trabajos;
            i) Abstenerse de emitir conceptos profesionales, sin tener la convicción absoluta de estar debidamente informados al respecto;
            j) Velar por la protección de la integridad del patrimonio nacional.'
		),array(
            'article_id' => '34',
            'article_chapter' => '8',
			'article_name' => 'ARTÍCULO 34. PROHIBICIONES ESPECIALES A LOS PROFESIONALES RESPECTO DE LA SOCIEDAD',
            'article_content' => 'Son prohibiciones especiales a los profesionales respecto de la sociedad:
            a) Ofrecer o aceptar trabajos en contra de las disposiciones legales vigentes, o aceptar tareas que excedan la incumbencia que le otorga su título y su propia preparación;
            b) Imponer su firma, a título gratuito u oneroso, en planos, especificaciones, dictámenes, memorias, informes, solicitudes de licencias urbanísticas, solicitudes de licencias de construcción y toda otra documentación relacionada con el ejercicio profesional, que no hayan sido estudiados, controlados o ejecutados personalmente;
            c) Expedir, permitir o contribuir para que se expidan títulos, diplomas, matrículas, tarjetas de matrícula profesional; certificados de inscripción profesional o tarjetas de certificado de inscripción profesional y/o certificados de vigencia de matrícula profesional, a personas que no reúnan los requisitos legales o reglamentarios para ejercer estas profesiones o no se encuentren debidamente inscritos o matriculados;
            d) Hacer figurar su nombre en anuncios, membretes, sellos, propagandas y demás medios análogos junto con el de personas que ejerzan ilegalmente la profesión;
            e) iniciar o permitir el inicio de obras de construcción sin haber obtenido de la autoridad competente la respectiva licencia o autorización.'
		),array(
            'article_id' => '35',
            'article_chapter' => '8',
			'article_name' => 'ARTÍCULO 35. DEBERES DE LOS PROFESIONALES PARA CON LA DIGNIDAD DE SUS PROFESIONES',
            'article_content' => 'Son deberes de los profesionales de quienes trata este Código para con la dignidad de sus profesiones:
            a) Contribuir con su conducta profesional y con todos los medios a su alcance para que en el consenso público se preserve un exacto concepto de estas profesiones, de su dignidad y del alto respeto que merecen;
            Nota: Sentencia C-570 de 2004, Corte Constitucional. El Literal b) declarado INEXEQUIBLE.
            b) Respetar y hacer respetar todas las disposiciones legales y reglamentaras que incidan en actos de estas profesiones, así como denunciar todas sus transgresiones;
            c) Velar por el buen prestigio de estas profesiones;
            d) Sus medios de propaganda deberán ajustarse a las reglas de la prudencia y al decoro profesional, sin hacer uso de medios de publicidad con avisos exagerados que den lugar a equívocos sobre su especialidad o idoneidad profesional.'
		),array(
            'article_id' => '36',
            'article_chapter' => '8',
			'article_name' => 'ARTÍCULO 36. PROHIBICIONES A LOS PROFESIONALES RESPECTO DE LA DIGNIDAD DE SUS PROFESIONES',
            'article_content' => 'Son prohibiciones a los profesionales respecto de la dignidad de sus profesiones:
            a) Recibir o conceder comisiones, participaciones u otros beneficios ilegales o injustificados con el objeto de gestionar, obtener o acordar designaciones de índole profesional o la encomienda de trabajo profesional.'
		),array(
            'article_id' => '37',
            'article_chapter' => '8',
			'article_name' => 'ARTÍCULO 37. DEBERES DE LOS PROFESIONALES PARA CON SUS COLEGAS Y DEMÁS PROFESIONALES',
            'article_content' => 'Son deberes de los profesionales para con sus colegas y demás profesionales de la ingeniería:
            a) Abstenerse de emitir públicamente juicios adversos sobre la actuación de algún colega, señalando errores profesionales en que presuntamente haya incurrido, a no ser de que ello sea indispensable por razones ineludibles de interés general o, que se le haya dado anteriormente la posibilidad de reconocer y rectificar aquellas actuaciones y errores, haciendo dicho profesional caso omiso de ello;
            b) Obrar con la mayor prudencia y diligencia cuando se emitan conceptos sobre las actuaciones de los demás profesionales;
            c) Fijar para los colegas que actúen como colaboradores o empleados suyos, salarios, honorarios, retribuciones o compensaciones justas y adecuadas, acordes con la dignidad de las profesiones y la importancia de los servicios que prestan;
            Nota: Sentencia C-570 de 2004, Corte Constitucional. El Literal c) declarado CONDICIONALMENTE EXEQUIBLE " ... en el entendido de que, para efectos disciplinarios, al definir si la retribución es justa y adecuada en cada caso la autoridad deberá tener como único parámetro de juicio todas las normas jurídicas vigentes, aplicables a la relación que se examina".
            d) Respetar y reconocer la propiedad intelectual de los demás profesionales sobre sus diseños y proyectos.'
		),array(
            'article_id' => '38',
            'article_chapter' => '8',
			'article_name' => 'ARTÍCULO 38. PROHIBICIONES A LOS PROFESIONALES RESPECTO DE SUS COLEGAS Y DEMÁS PROFESIONALES',
            'article_content' => 'Son prohibiciones a los profesionales, respecto de sus colegas y demás profesionales de la ingeniería:
            a) Utilizar sin autorización de sus legítimos autores y para su aplicación en trabajos profesionales propios, los estudios, cálculos, planos, diseños y software y demás documentación perteneciente a aquellos, salvo que la tarea profesional lo requiera, caso en el cual se deberá dar aviso al autor de tal utilización;
            b) Difamar, denigrar o criticar injustamente a sus colegas, o contribuir en forma directa o indirecta a perjudicar su reputación o la de sus proyectos o negocios con motivo de su actuación profesional;
            c) Usar métodos de competencia desleal con los colegas;
            d) Designar o influir para que sean designados en cargos técnicos que deban ser desempeñados por los profesionales de que trata el presente Código, a personas carentes de los títulos y calidades que se exigen legalmente;
            e) Proponer servicios con reducción de precios, luego de haber conocido las propuestas de otros profesionales;
            Nota: Sentencia C-570 de 2004, Corte Constitucional. La Corte Constitucional se declaró INHIBIDA de fallar sobre este literal por ineptitud de la demanda.
            f) Revisar trabajos de otro profesional sin conocimiento y aceptación previa del mismo, a menos que este se haya separado completamente de tal trabajo.
            Nota: Sentencia C-570 de 2004, Corte Constitucional. La Corte Constitucional se declaró INHIBIDA de fallar sobre este literal por ineptitud de la demanda.'
		),array(
            'article_id' => '39',
            'article_chapter' => '8',
			'article_name' => 'ARTÍCULO 39. DEBERES DE LOS PROFESIONALES PARA CON SUS CLIENTES Y EL PÚBLICO EN GENERAL',
            'article_content' => 'Son deberes de los profesionales para con sus clientes y el público en general:
            a) Mantener el secreto y reserva, respecto de toda circunstancia relacionada con el cliente y con los trabajos que para él se realizan, salvo obligación legal de revelarla o requerimiento del Consejo Profesional respectivo;
            Nota: Sentencia C-570 de 2004, Corte Constitucional. La Corte Constitucional se declaró INHIBIDA de fallar sobre este literal por ineptitud de la demanda.
            b) Manejar con honestidad y pulcritud los fondos que el cliente le confiare con destino a desembolsos exigidos por los trabajos a su cargo y rendir cuentas claras, precisas y frecuentes. Todo ello independientemente y sin perjuicio de lo establecido en las leyes vigentes;
            c) Dedicar toda su aptitud y atender con la mayor diligencia y probidad, los asuntos encargados por su cliente;
            d) Los profesionales que dirijan el cumplimiento de contratos entre sus clientes y terceras personas, son ante todo asesores y guardianes de los intereses de sus clientes y en ningún caso, les es lícito actuar en perjuicio de aquellos terceros.'
		),array(
            'article_id' => '40',
            'article_chapter' => '8',
			'article_name' => 'ARTÍCULO 40. PROHIBICIONES A LOS PROFESIONALES RESPECTO DE SUS CLIENTES Y EL PÚBLICO EN GENERAL',
            'article_content' => 'Son prohibiciones a los profesionales respecto de sus clientes y el público en general:
            a) Ofrecer la prestación de servicios cuyo objeto, por cualquier razón de orden técnico, jurídico, reglamentario, económico o social, sea de dudoso o imposible cumplimiento, o los que por circunstancias de idoneidad personal, no pudiere satisfacer;
            b) Aceptar para su beneficio o el de terceros, comisiones, descuentos, bonificaciones u otras análogas ofrecidas por proveedores de equipos, insumos, materiales, artefactos o estructuras, por contratistas y/o por otras personas directamente interesadas en la ejecución de los trabajos que proyecten o dirijan, salvo autorización legal o contractual.'
		),array(
            'article_id' => '41',
            'article_chapter' => '8',
			'article_name' => 'ARTÍCULO 41. DEBERES DE LOS PROFESIONALES QUE SE DESEMPEÑEN EN CALIDAD DE SERVIDORES PÚBLICOS O PRIVADOS',
            'article_content' => 'Son deberes de los profesionales que se desempeñen en funciones públicas o privadas, los siguientes:
            a) Actuar de manera imparcial, cuando por las funciones de su cargo público o privado, sean responsables de fijar, preparar o evaluar pliegos de condiciones de licitaciones o concursos;
            b) Los profesionales que se hallen ligados entre sí por razón de jerarquía, ya sea en la administración pública o privada, se deben mutuamente, independiente y sin perjuicio de aquella relación, el respeto y el trato impuesto por su condición de colegas.
            Nota: Sentencia C-570 de 2004, Corte Constitucional. El Literal b) declarado INEXEQUIBLE.'
		),array(
            'article_id' => '42',
            'article_chapter' => '8',
			'article_name' => 'ARTÍCULO 42. PROHIBICIONES A LOS PROFESIONALES QUE SE DESEMPEÑEN EN CALIDAD DE SERVIDORES PÚBLICOS O PRIVADOS',
            'article_content' => ' Son prohibiciones a los profesionales que se desempeñen en funciones públicas o privadas, las siguientes:
            a) Participar en el proceso de evaluación de tareas profesionales de colegas, con quienes se tuviese vinculación de parentesco, hasta el grado fijado por las normas de contratación pública, o vinculación societaria de hecho o de derecho. La violación de esta norma se imputará también al profesional que acepte tal evaluación;
            b) Los profesionales superiores jerárquicos, deben abstenerse de proceder en forma que desprestigie o menoscabe a los profesionales que ocupen cargos subalternos al suyo;
            Nota: Sentencia C-570 de 2004, Corte Constitucional. El Literal b) declarado INEXEQUIBLE.
            c) Cometer, permitir o contribuir a que se cometan actos de injusticia en perjuicio de otro profesional, tales como destitución, reemplazo, disminución de categoría, aplicación de penas disciplinarias, sin causa demostrada y justa.
            Nota: Sentencia C-570 de 2004, Corte Constitucional. El Literal c) declarado INEXEQUIBLE.'
		),array(
            'article_id' => '43',
            'article_chapter' => '8',
			'article_name' => 'ARTÍCULO 43. DEBERES DE LOS PROFESIONALES EN LOS CONCURSOS O LICITACIONES',
            'article_content' => 'Son deberes de los profesionales en los concursos o licitaciones:
            a) Los profesionales que se dispongan a participar en un concurso o licitación por invitación pública o privada y consideren que las bases pudieren transgredir las normas de la ética profesional, deberán denunciar ante el Consejo Profesional respectivo la existencia de dicha transgresión;
            b) Los profesionales que participen en un concurso o licitación están obligados a observar la más estricta disciplina y el máximo respeto hacia los miembros del jurado o junta de selección, los funcionarios y los demás participantes.
            Nota: Sentencia C-570 de 2004, Corte Constitucional. El Literal b) declarado INEXEQUIBLE.'
		),array(
            'article_id' => '44',
            'article_chapter' => '8',
			'article_name' => 'ARTÍCULO 44. DE LAS PROHIBICIONES A LOS PROFESIONALES EN LOS CONCURSOS O LICITACIONES',
            'article_content' => 'Son prohibiciones de los profesionales en los concursos o licitaciones:
            a) Los profesionales que hayan actuado como asesores de la parte contratante en un concurso o licitación deberán abstenerse de intervenir directa o indirectamente en las tareas profesionales requeridas para el desarrollo del trabajo que dio lugar al mismo, salvo que su intervención estuviese establecida en las bases del concurso o licitación.
            Nota: Sentencia C-570 de 2004, Corte Constitucional. La Corte Constitucional se declaró INHIBIDA de fallar sobre este literal por ineptitud de la demanda.'
		),array(
            'article_id' => '45',
            'article_chapter' => '9',
			'article_name' => 'ARTÍCULO 45. RÉGIMEN DE INHABILIDADES E INCOMPATIBILIDADES QUE AFECTAN EL EJERCICIO',
            'article_content' => ' Incurrirán en faltas al régimen de inhabilidades e incompatibilidades y por lo tanto se les podrán imponer las sanciones a que se refiere la presente ley:
            a) Los profesionales que actúen simultáneamente como representantes técnicos o asesores de más de una empresa que desarrolle idénticas actividades y en un mismo tema, sin expreso consentimiento y autorización de las mismas para tal actuación;
            b) Los profesionales que en ejercicio de sus actividades públicas o privadas hubiesen intervenido en determinado asunto, no podrán luego actuar o asesorar directa o indirectamente a la parte contraria en la misma cuestión;
            Nota: Sentencia C-570 de 2004, Corte Constitucional. La Corte Constitucional se declaró INHIBIDA de fallar sobre este literal por ineptitud de la demanda.
            c) Los profesionales no deben intervenir como peritos o actuar en cuestiones que comprendan las inhabilidades e incompatibilidades generales de ley.'
		),
        //Titulo V
        array(
            'article_id' => '46',
            'article_chapter' => '10',
			'article_name' => 'ARTÍCULO 46. DEFINICIÓN DE FALTA DISCIPLINARIA',
            'article_content' => 'Se entiende como falta que promueva la acción disciplinaria y en consecuencia, la aplicación del procedimiento aquí establecido, toda violación a las prohibiciones y al régimen de inhabilidades e incompatibilidades, al correcto ejercicio de la profesión o al cumplimiento de las obligaciones impuestas por el Código de Ética Profesional adoptado en virtud de la presente ley.'
		),array(
            'article_id' => '47',
            'article_chapter' => '10',
			'article_name' => 'ARTÍCULO 47. SANCIONES APLICABLES',
            'article_content' => ' Los Consejos Seccionales o Regionales de Ingeniería podrán sancionar a los profesionales responsables de la comisión de faltas disciplinarias, con:
            a) Amonestación escrita;
            b) Suspensión en el ejercicio de la profesión hasta por cinco (5) años;
            c) Cancelación de la matrícula profesional, del certificado de inscripción profesional o del certificado de matrícula profesional.'
		),array(
            'article_id' => '48',
            'article_chapter' => '10',
			'article_name' => 'ARTÍCULO 48. ESCALA DE SANCIONES',
            'article_content' => 'Los profesionales de la ingeniería, de sus profesiones afines o de sus profesiones auxiliares, a quienes se les compruebe la violación de normas del Código de Ética Profesional adoptado en la presente ley, estarán sometidos a las siguientes sanciones por parte del Consejo Profesional de Ingeniería respectivo:
            a) Las faltas calificadas por el Consejo Regional o Seccional como leves, siempre y cuando el profesional disciplinado no registre antecedentes disciplinarios, darán lugar a la aplicación de la sanción de amonestación escrita;
            b) Las faltas calificadas por el Consejo Regional o Seccional como leves, cuando el profesional disciplinado registre antecedentes disciplinarios, darán lugar a la aplicación de la sanción de suspensión de la matrícula profesional hasta por el término de seis (6) meses;
            c) Las faltas calificadas por el Consejo Regional o Seccional como graves, siempre y cuando el profesional disciplinado no registre antecedentes disciplinarios, darán lugar a la aplicación de la sanción de suspensión de la matrícula profesional por un término de seis (6) meses a dos (2) años;
            d) Las faltas calificadas por el Consejo Regional o Seccional como graves, cuando el profesional disciplinado registre antecedentes disciplinarios, darán lugar a la aplicación de la sanción de suspensión de la matrícula profesional por un término de dos (2) a cinco (5) años;
            e) Las faltas calificadas por el Consejo Regional o Seccional como gravísimas, siempre darán lugar a la aplicación de la sanción de cancelación de la matrícula profesional.'
		),array(
            'article_id' => '49',
            'article_chapter' => '10',
			'article_name' => 'ARTÍCULO 49. FALTAS SUSCEPTIBLES DE SANCIÓN DISCIPLINARIA',
            'article_content' => 'Será susceptible de sanción disciplinaria todo acto u omisión del profesional, intencional o culposo, que implique violación de las prohibiciones; incumplimiento de las obligaciones; ejecución de actividades incompatibles con el decoro que exige el ejercicio de la ingeniería, de alguna de sus profesiones afines o de alguna de sus profesiones auxiliares; el ejercicio de actividades delictuosas relacionadas con el ejercicio de la profesión o el incumplimiento de alguno de los deberes que la profesión o las normas que la rigen le imponen.'
		),array(
            'article_id' => '50',
            'article_chapter' => '10',
			'article_name' => 'ARTÍCULO 50. ELEMENTOS DE LA FALTA DISCIPLINARIA',
            'article_content' => 'La configuración de la falta disciplinaria deberá estar enmarcada dentro de los siguientes elementos o condiciones:
            a) La conducta o el hecho debe haber sido cometido por un profesional de la ingeniería, de alguna de sus profesiones afines o de alguna de sus profesiones auxiliares, debidamente matriculado;
            b) La conducta o el hecho debe ser intencional o culposo;
            c) El hecho debe haber sido cometido en ejercicio de la profesión o de actividades conexas o relacionadas con esta;
            d) La conducta debe ser violatoria de deberes, prohibiciones, inhabilidades o incompatibilidades inherentes a la profesión de la ingeniería, de alguna de sus profesiones afines o de alguna de sus profesiones auxiliares;
            e) La conducta debe ser apreciable objetivamente y procesalmente debe estar probada;
            f) La sanción disciplinaria debe ser la consecuencia lógica de un debido proceso, que se enmarque dentro de los postulados del artículo 29 de la Constitución Política y específicamente, del régimen disciplinario establecido en la presente ley.'
		),array(
            'article_id' => '51',
            'article_chapter' => '10',
			'article_name' => 'ARTÍCULO 51. PREVALENCIA DE LOS PRINCIPIOS RECTORES',
            'article_content' => 'En la interpretación y aplicación del régimen disciplinario establecido prevalecerán, en su orden, los principios rectores que determina la Constitución Política, este código y el Código Contencioso Administrativo.'
		),array(
            'article_id' => '52',
            'article_chapter' => '10',
			'article_name' => 'ARTÍCULO 52. CRITERIOS PARA DETERMINAR LA GRAVEDAD O LEVEDAD DE LA FALTA DISCIPLINARIA',
            'article_content' => 'El Consejo Profesional Seccional o Regional correspondiente de Ingeniería determinará si la falta es leve, grave o gravísima, de conformidad con los siguientes criterios:
                a) El grado de culpabilidad;
                b) El grado de perturbación a terceros o a la sociedad;
                c) La falta de consideración con sus clientes, patronos, subalternos y, en general, con todas las personas a las que pudiera afectar el profesional disciplinado con su conducta;
                d) La reiteración en la conducta;
                e) La jerarquía y mando que el profesional disciplinado tenga dentro de su entidad, sociedad, la persona jurídica a la que pertenece o representa, etc.;
                f) La naturaleza de la falta y sus efectos, según la trascendencia social de la misma, el mal ejemplo dado, la complicidad con otros profesionales y el perjuicio causado;
                g) Las modalidades o circunstancias de la falta, teniendo en cuenta el grado de preparación, el grado de participación en la comisión de la misma y el aprovechamiento de la confianza depositada en el profesional disciplinado;
                h) Los motivos determinantes, según se haya procedido por causas innobles o fútiles, o por nobles y altruistas;
                i) El haber sido inducido por un superior a cometerla;
                j) El confesar la falta antes de la formulación de cargos, haciéndose responsable de los perjuicios causados;
                k) Procurar, por iniciativa propia, resarcir el daño o compensar el perjuicio causado, antes de que le sea impuesta la sanción.'
		),array(
            'article_id' => '53',
            'article_chapter' => '10',
			'article_name' => 'ARTÍCULO 53. FALTAS CALIFICADAS COMO GRAVÍSIMAS',
            'article_content' => 'Se consideran gravísimas y se constituyen en causal de cancelación de la matrícula profesional, sin requerir la calificación que de ellas haga el Consejo respectivo, las siguientes faltas:
                a) Derivar, de manera directa o por interpuesta persona, indebido o fraudulento provecho patrimonial en ejercicio de la profesión, con consecuencias graves para la parte afectada;
                b) Obstaculizar, en forma grave, las investigaciones que realice el Consejo Profesional de Ingeniería respectivo;
                c) El abandono injustificado de los encargos o compromisos profesionales, cuando con tal conducta causen grave detrimento al patrimonio económico del cliente o se afecte, de la misma forma, el patrimonio público;
                d) La utilización fraudulenta de las hojas de vida de sus colegas para participar en concursos, licitaciones públicas, lo mismo que para suscribir los respectivos contratos;
                e) Incurrir en algún delito que atente contra sus clientes, colegas o autoridades de la República, siempre y cuando la conducta punible comprenda el ejercicio de la ingeniería o de alguna de sus profesiones auxiliares;
                f) Cualquier violación gravísima, según el criterio del Consejo respectivo, del régimen de deberes, obligaciones y prohibiciones que establecen el Código Ética y la presente ley.'
		),array(
            'article_id' => '54',
            'article_chapter' => '10',
			'article_name' => 'ARTÍCULO 54. CONCURSO DE FALTAS DISCIPLINARIAS',
            'article_content' => 'El profesional que con una o varias acciones u omisiones infrinja varias disposiciones del Código de Ética Profesional o varias veces la misma disposición, quedará sometido a la que establezca la sanción más grave o, en su defecto, a una de mayor entidad.'
		),array(
            'article_id' => '55',
            'article_chapter' => '10',
			'article_name' => 'ARTÍCULO 55. CIRCUNSTANCIAS QUE JUSTIFICAN LA FALTA DISCIPLINARIA',
            'article_content' => 'La conducta se justifica cuando se comete:
                a) Por fuerza mayor o caso fortuito;
                b) En estricto cumplimiento de un deber legal;
                c) En cumplimiento de orden legítima de autoridad competente emitida con las formalidades legales.'
		),array(
            'article_id' => '56',
            'article_chapter' => '10',
			'article_name' => 'ARTÍCULO 56. ACCESO AL EXPEDIENTE',
            'article_content' => 'El investigado tendrá acceso a la queja y demás partes del expediente disciplinario, solo a partir del momento en que sea escuchado en versión libre y espontánea o desde la notificación de cargos, según el caso.'
		),array(
            'article_id' => '57',
            'article_chapter' => '10',
			'article_name' => 'ARTÍCULO 57. PRINCIPIO DE IMPARCIALIDAD',
            'article_content' => 'El Consejo Profesional de Ingeniería respectivo, directamente o a través de sus Consejos Seccionales o Regionales, deberá investigar y evaluar, tanto los hechos y circunstancias desfavorables, como los favorables a los intereses del disciplinado.'
		),array(
            'article_id' => '58',
            'article_chapter' => '10',
			'article_name' => 'ARTÍCULO 58. DIRECCIÓN DE LA FUNCIÓN DISCIPLINARIA',
            'article_content' => ' Corresponde al Presidente del Consejo Profesional de Ingeniería respectivo, la dirección de la función disciplinaria, sin perjuicio del impedimento de intervenir o tener injerencia en la investigación, en razón de tener que conocer en segunda instancia por vía de apelación o de consulta.'
		),array(
            'article_id' => '59',
            'article_chapter' => '10',
			'article_name' => 'ARTÍCULO 59. PRINCIPIO DE PUBLICIDAD',
            'article_content' => 'El Consejo Profesional de Ingeniería respectivo respetará y aplicará el principio de publicidad dentro de las investigaciones disciplinarias; no obstante, ni el quejoso, ni terceros interesados se constituirán en partes dentro de estas.'
		),
        //Capitulo II
        array(
            'article_id' => '60',
            'article_chapter' => '11',
			'article_name' => 'ARTÍCULO 60. INICIACIÓN DEL PROCESO DISCIPLINARIO',
            'article_content' => 'El proceso disciplinario de que trata el presente título se iniciará por queja interpuesta por cualquier persona natural o jurídica, la cual deberá formularse por escrito ante el Consejo Seccional o Regional del Consejo Profesional de Ingeniería respectivo, correspondiente a la jurisdicción territorial del lugar en que se haya cometido el último acto constitutivo de la falta o en defecto de este, ante el Consejo Seccional o Regional geográficamente más cercano.
            PARÁGRAFO 1o. No obstante, en los casos de público conocimiento o hecho notorio y cuya gravedad lo amerite, a juicio de la Junta de Consejeros del Consejo Profesional Nacional respectivo, los Consejos Seccionales o Regionales deberán asumir la investigación disciplinaria de oficio.
            PARÁGRAFO 2o. La Asesoría Jurídica del Consejo Profesional de Ingeniería respectivo u oficina que haga sus veces, resolverá todos los casos de conflictos de competencias, decisión de única instancia y en contra de la cual no procederá recurso alguno.'
		),array(
            'article_id' => '61',
            'article_chapter' => '11',
			'article_name' => 'ARTÍCULO 61. RATIFICACIÓN DE LA QUEJA',
            'article_content' => 'Recibida la queja por el Consejo Seccional o Regional, a través de la Secretaría procederá a ordenarse la ratificación bajo juramento de la queja y mediante auto, ordenará la investigación preliminar, con el fin de establecer si hay o no mérito para abrir investigación formal disciplinaria contra el presunto o presuntos infractores.
            Del auto a que se refiere el presente artículo se dará aviso escrito al Consejo Profesional Nacional correspondiente.
            PARÁGRAFO. En todo caso que el quejoso sea renuente a rendir la ratificación juramentada y esta fuera absolutamente necesaria para poder continuar la investigación preliminar, por adolecer la queja de elementos suficientes para establecer alguna clase de indicio en contra del profesional o su debida identificación o individualización, la Secretaría Seccional respectiva ordenará sumariamente el archivo de la queja; actuación de la que rendirá informe a la Junta de Consejeros Seccionales y de la que dará aviso al Consejo Profesional Nacional.'
		),array(
            'article_id' => '62',
            'article_chapter' => '11',
			'article_name' => 'ARTÍCULO 62. TRASLADO DE COMPETENCIA',
            'article_content' => 'Cuando existan razones para que se considere que se pueda entorpecer un proceso en determinado Consejo Seccional, el Consejo Nacional, podrá comisionar a otro Consejo Seccional, diferente del competente por jurisdicción territorial, el desarrollo del proceso disciplinario, para garantizar el cumplimento de todos los principios que lo rigen.'
		),array(
            'article_id' => '63',
            'article_chapter' => '11',
			'article_name' => 'ARTÍCULO 63. INVESTIGACIÓN PRELIMINAR',
            'article_content' => 'La investigación preliminar será adelantada por la respectiva Secretaría Seccional y no podrá excederse de sesenta (60) días, contados a partir de la fecha del auto que ordena la apertura de la investigación preliminar, durante los cuales se decretarán y practicarán las pruebas que el investigador considere pertinentes y que conduzcan a la comprobación de los hechos; las cuales podrán ser, entre otras, testimoniales, documentales, periciales, etc.'
		),array(
            'article_id' => '64',
            'article_chapter' => '11',
			'article_name' => 'ARTÍCULO 64. FINES DE LA INDAGACIÓN PRELIMINAR',
            'article_content' => ' La indagación preliminar tendrá como fines verificar la ocurrencia de la conducta, determinar si es constitutiva de falta disciplinaria e identificar o individualizar al profesional que presuntamente intervino en ella.
            PARÁGRAFO. Para el cumplimiento de los fines de la indagación preliminar, el funcionario competente hará uso de los medios de prueba legalmente reconocidos y podrá oír en versión libre y espontánea al profesional que considere necesario para determinar la individualización o identificación de los intervinientes en el hecho investigado.'
		),array(
            'article_id' => '65',
            'article_chapter' => '11',
			'article_name' => 'ARTÍCULO 65. INFORME Y CALIFICACIÓN DEL MÉRITO DE LA INVESTIGACIÓN PRELIMINAR',
            'article_content' => 'Terminada la etapa de investigación preliminar, la Secretaría Seccional o Regional procederá dentro de los diez (10) días hábiles siguientes, a rendir un informe al Presidente Seccional, para que este, dentro de los quince (15) días hábiles siguientes a su recibo, califique lo actuado mediante auto motivado, en el que se determinará si hay o no mérito para adelantar investigación formal disciplinaria contra el profesional disciplinado y en caso afirmativo, se le formulará con el mismo auto, el correspondiente pliego de cargos. Si no se encontrare mérito para seguir la actuación, el Presidente Seccional ordenará en la misma providencia el archivo del expediente, informando sucintamente la determinación a la Junta de Consejeros Seccional o Regional en la siguiente sesión ordinaria, para que quede consignado en el acta respectiva, comunicando la decisión adoptada al quejoso, a los profesionales involucrados y al Consejo Profesional Nacional respectivo.'
		),array(
            'article_id' => '66',
            'article_chapter' => '11',
			'article_name' => 'ARTÍCULO 66. NOTIFICACIÓN PLIEGO DE CARGOS',
            'article_content' => 'La Secretaría Regional o Seccional, notificará personalmente el pliego de cargos al profesional inculpado. No obstante, de no poder efectuarse la notificación personal, se hará por edicto en los términos establecidos en el Código Contencioso Administrativo. Si transcurrido el término de la notificación por edicto, el inculpado no compareciere, se proveerá el nombramiento de un apoderado de oficio, de la lista de abogados inscritos ante el Consejo Seccional de la Judicatura correspondiente, con quien se continuará la actuación; designación que conllevará al abogado, las implicaciones y responsabilidades que la ley determina.'
		),array(
            'article_id' => '67',
            'article_chapter' => '11',
			'article_name' => 'ARTÍCULO 67. TRASLADO DEL PLIEGO DE CARGOS',
            'article_content' => 'Surtida la notificación, se dará traslado al profesional inculpado por el término improrrogable de diez (10) días hábiles, para presentar descargos, solicitar y aportar pruebas. Para tal efecto, el expediente permanecerá a su disposición en la Secretaría de la Seccional o Regional respectiva.'
		),array(
            'article_id' => '68',
            'article_chapter' => '11',
			'article_name' => 'ARTÍCULO 68. ETAPA PROBATORIA',
            'article_content' => 'Vencido el término de traslado, la Secretaría Seccional, decretará las pruebas solicitadas por el investigado y las demás que de oficio considere conducentes y pertinentes, mediante auto contra el cual no procede recurso alguno y el cual deberá ser comunicado al profesional disciplinado. El término probatorio será de sesenta (60) días.'
		),array(
            'article_id' => '69',
            'article_chapter' => '11',
			'article_name' => 'ARTÍCULO 69. FALLO DE PRIMERA INSTANCIA',
            'article_content' => 'Vencido el término probatorio previsto, el Presidente Regional o Seccional, elaborará un proyecto de decisión, que se someterá a la consideración de la Junta de Consejeros Regionales o Seccionales, la cual podrá aceptarlo, aclararlo, modificarlo o revocarlo. Si la mayoría de los miembros asistentes a la sesión aprueban el proyecto de decisión, se adoptará la decisión propuesta mediante resolución motivada.
            PARÁGRAFO. Los salvamentos de voto respecto del fallo final, si los hay, deberán constar en el acta de la reunión respectiva.'
		),array(
            'article_id' => '70',
            'article_chapter' => '11',
			'article_name' => 'ARTÍCULO 70. NOTIFICACIÓN DEL FALLO',
            'article_content' => 'La decisión adoptada por el Consejo Profesional Seccional, se notificará personalmente al interesado, por intermedio de la Secretaría Seccional, dentro de los diez (10) días siguientes a la fecha de la sesión en que se adoptó y si no fuere posible, se realizará por edicto, en los términos del artículo 45 del Código Contencioso Administrativo'
		),array(
            'article_id' => '71',
            'article_chapter' => '11',
			'article_name' => 'ARTÍCULO 71. RECURSO DE APELACIÓN',
            'article_content' => 'Contra dicha providencia solo procede el recurso de apelación ante el Consejo Profesional Nacional de Ingeniería respectivo, dentro de los cinco (5) días siguientes a la fecha de la notificación personal o de la desfijación del edicto recurso que deberá presentarse ante el Consejo Regional o Seccional por escrito y con el lleno de los requisitos que exige el Código Contencioso Administrativo.'
		),array(
            'article_id' => '72',
            'article_chapter' => '11',
			'article_name' => 'ARTÍCULO 72. AGOTAMIENTO DE LA VÍA GUBERNATIVA',
            'article_content' => 'El Consejo Profesional Nacional resolverá el recurso interpuesto, mediante resolución motivada; determinación que será definitiva y contra la cual no procederá recurso alguno por vía gubernativa.'
		),array(
            'article_id' => '73',
            'article_chapter' => '11',
			'article_name' => 'ARTÍCULO 73. CONFIRMACIÓN',
            'article_content' => 'En todo caso, el acto administrativo mediante el cual se dé por terminada la actuación de un Consejo Seccional dentro de un proceso disciplinario, deberá ser confirmado, modificado o revocado, según el caso, por el Consejo Profesional Nacional de Ingeniería correspondiente, por vía de apelación o de consulta.'
		),array(
            'article_id' => '74',
            'article_chapter' => '11',
			'article_name' => 'ARTÍCULO 74. CÓMPUTO DE LA SANCIÓN',
            'article_content' => 'Las sanciones impuestas por violaciones al presente régimen disciplinario, empezarán a computarse a partir de la fecha de la comunicación personal o de la entrega por correo certificado, que se haga al profesional sancionado de la decisión del Consejo Profesional Nacional correspondiente, sobre la apelación o la consulta.'
		),array(
            'article_id' => '75',
            'article_chapter' => '11',
			'article_name' => 'ARTÍCULO 75. AVISO DE LA SANCIÓN',
            'article_content' => 'De toda sanción disciplinaria impuesta a un profesional, a través de la Secretaría del Consejo Seccional respectivo, se dará aviso a la Procuraduría General de la Nación, a todas las entidades que tengan que ver con el ejercicio profesional correspondiente, con el registro de proponentes y contratistas y a las agremiaciones de profesionales, con el fin de que se impida el ejercicio de la profesión por parte del sancionado, debiendo estas, ordenar las anotaciones en sus registros y tomar las medidas pertinentes, con el fin de hacer efectiva la sanción. La anotación tendrá vigencia y solo surtirá efectos por el término de la misma.'
		),array(
            'article_id' => '76',
            'article_chapter' => '11',
			'article_name' => 'ARTÍCULO 76. CADUCIDAD DE LA ACCIÓN',
            'article_content' => 'La acción disciplinaria a que se refiere el presente título caduca en cinco (5) años contados a partir de la fecha en que se cometió el último acto constitutivo de la falta. El auto que ordena la apertura de la investigación preliminar, interrumpe el término de caducidad. El proceso prescribirá tres años después de la fecha de expedición de dicho auto.'
		),array(
            'article_id' => '77',
            'article_chapter' => '11',
			'article_name' => 'ARTÍCULO 77. RÉGIMEN TRANSITORIO',
            'article_content' => ' Todas las actuaciones que se adelanten por parte de los Consejos Profesionales de Ingeniería y sus respectivos Consejos Seccionales o Regionales, de acuerdo con los procedimientos vigentes en el momento en que comience a regir la presente ley, seguirán rigiéndose por estos hasta su culminación.'
		),
        //Titulo VI
        array(
            'article_id' => '78',
            'article_chapter' => '12',
			'article_name' => 'ARTÍCULO 78. VIGENCIA',
            'article_content' => 'La presente ley rige a partir de la fecha de su publicación en el Diario Oficial y deroga todas las disposiciones que le sean contrarias, en especial la Ley 20 de 1971, la Ley 14 de 1975, la Ley 64 de 1978, la Ley 28 de 1989, la Ley 33 de 1989, Ley 392 de 1997 y sus normas reglamentarias.
            Nota: Sentencia C-570 de 2004, Corte Constitucional. Artículo CONDICIONALMENTE EXEQUIBLE "... en el entendido de que la derogación de normas que allí se ordena no comprende las relacionadas con la creación y asignación de funciones a los consejos profesionales existentes para especialidades de la ingeniería y las profesiones afines y auxiliares de esa disciplina".
            Auto 226 de 2003, Corte Constitucional. La Corte Constitucional dispuso: En consecuencia, los Artículos 26, 27 y 28 de la Ley 435 de 1998, están vigentes y aplican con todos sus efectos para el COPNIA.
            PARÁGRAFO. Las funciones asignadas por leyes anteriores a Consejos Profesionales de Ingeniería y profesiones afines y auxiliares que a la fecha de la entrada en vigencia de la presente ley, no se hayan instalado o no estén funcionando, pasarán al Consejo Profesional de Ingeniería, Copnia
            Nota: Sentencia C-570 de 2004. Parágrafo declarado INEXEQUIBLE
            Notas Especiales para la totalidad de la Ley 842 de 2003:
            Mediante la Sentencia C-078 de 2003, la Corte Constitucional revisó las objeciones presidenciales a los artículos25, 26, 27, 28 y 80 delproyecto de Ley No. 44 de 2001 del Senado de la República,218 de 2002 de la Cámara de Representantes, en cumplimiento de lo dispuesto en el artículo 167 de la Constitución Política.
            Los artículos 25, 26, 27, 28 y 80 del Proyecto de Ley, son actualmente los artículos 24, 25, 26, 27 y 78 de la Ley 842 de 2003.
            Sentencia C-649 de 2003, Corte Constitucional. Se declaró cumplida la exigencia constitucional del artículo 167 de la Carta Política.'
		)
	);

    


}
