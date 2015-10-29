<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Productos extends CI_Controller{
    
	    function __construct(){
	        parent::__construct();			
			$this->load->helper(array('html', 'url', 'form'));	
	   	}

	   	function index(){
	   		
			$data['productos'] = $this->trae_productos();
	   		$this->load->view("productos", $data);
	   	}

	   	function descripcion($idproduct,$idcategory){
	   		$data['productos'] = $this->trae_productos($idproduct,$idcategory);
	   		$data['productos']['idcategory'] = $idcategory;


	   		$this->load->view("descripcion_producto", $data);
	   	}

	   	function trae_productos($idproduct=null, $idcategory=null){
	   		$productos = array(
	   		'1' => array(
	   			'category_id' => '1',
	   			'category_name' => 'del CID',
	   			'products' => array(
	   					1 => array(
	   						'idproduct' => '1',
	   						'name' => 'Pistache',
	   						'photos' => array(
	   							'1' => 'products/fichas/pistaches.png',
	   						),
	   						'sub_category' => 'lata_servibar',
	   						'description' => '
								Excelente y deliciosa botana, que "menos engorda" pues es uno de los frutos secos más bajos en calorías (160) sin colesterol siendo una excelente fuente de fibra y proteína, proporcionando un alto valor nutricional.<br><br>
								Originarios del Medio Oriente, actualmente se cultivan en otras regiones subtropicales, como California, USA. <br><br>
								Ayudan a combatir la ansiedad de hambre y se presentan tostados y adicionados con sal yodatada.<br><br>
								Su presentación en latas al alto vacío, tostados sin aceite agregado  amplían su vida en anaquel por más de 24 meses.<br><br>
								Próximamente se tendrá la presentación con substituto de sal.
	   						',
	   						'presentation' => array(
	   							'1' => 'lata de 100 gr.',
	   						)
	   					),
	   					4 => array(
	   						'idproduct' => '4',
	   						'name' => 'Nuez de la india',
	   						'photos' => array(
	   							'1' => 'products/fichas/nuez_india.png',
	   						),
	   						'sub_category' => 'lata_servibar',
	   						'description' => '
								Deliciosa y exclusiva botana que puede estar horneada o frita, proporcionan abundantes minerales esenciales, especialmente manganeso, potasio, cobre, hierro, magnesio, zinc y selenio, así como las vitaminas B5, B6 y B1.<br><br>
								Su envase al alto vacío le permite una vida en anaquel por más de 18 meses. Se encuentran adicionados con sal yodatada y próximamente con sustituto de sal.<br>

	   						',
	   						'presentation' => array(
	   							'1' => 'lata de 115 gr.',
	   						)
	   					),
	   					3 => array(
	   						'idproduct' => '3',
	   						'name' => 'Almendra ahumada',
	   						'photos' => array(
	   							'1' => 'products/fichas/almendra.png',	   					
	   						),
	   						'sub_category' => 'lata_servibar',
	   						'description' => '
								Botana rica en proteínas (19/100 gr.similar a la carne), muy beneficiosa para la salud, no contiene colesterol.<br><br>
								50 grs. de almendras aportan una dosis de hierro muy similar a las espinacas.<br><br>
								Su alto porcentaje de ácido oléico (30%) ayuda al sistema cardiovascular; y arginina (un aminoácido esencial para los niños) más un 10% de fibra soluble.<br><br>
								Su presentación en latas al alto vacío, amplían su vida en anaquel por más de 18 meses. Se encuentran tostadas, sin aceite agregado y condimentadas con el exclusivo ahumado “Del Cid”.
	   						 ',
	   						'presentation' => array(
	   							'1' => 'lata de 115 gr.',
	   						)
	   					),
						5 => array(
	   						'idproduct' => '5',
	   						'name' => 'Almendra salada',
	   						'photos' => array(
	   							'1' => 'products/fichas/almendrasalada.png',
	   						),
	   						'sub_category' => 'lata_servibar',
	   						'description' => '
								50 grs. de almendras aportan una dosis de hierro muy similar a las espinacas.<br><br>
								Su alto porcentaje de ácido oléico (30%) ayuda al sistema cardiovascular; y arginina (un aminoácido esencial para los niños) más un 10% de fibra soluble.<br><br>
								Su envase al alto vacío permiten su vida en anaquel por más de 18 meses. Se encuentran tostada y adicionada con sal yodatada y próximamente con sustituto de sal.<br>
	   						 ',
	   						'presentation' => array(
	   							'1' => 'lata de 115 gr.',
	   						)
	   					),	
	   					2 => array(
	   						'idproduct' => '2',
	   						'name' => 'Nuez mixta',
	   						'photos' => array(
	   							'1' => 'products/fichas/nueces_mixtas.png',
	   						),
	   						'sub_category' => 'lata_servibar',
	   						'description' => '
								Exclusiva mezcla que contiene nuez de nogal y nuez de la india fritas y saladas, almendra tostada salada, uva pasa o arándanos y menos del 50% de cacahuates surtidos, su envase al alto vacío permite una vida en anaquel de más de 18 meses.
	   						 ',
	   						'presentation' => array(
	   							'1' => 'lata de 115 gr.',
	   						)
	   					),
	   					6=> array(
	   						'idproduct' => '6',
	   						'name' => 'Cacahuate',
	   						'photos' => array(
	   							'1' => 'products/fichas/cacahuate_salado.png',
	   						),
	   						'sub_category' => 'lata_servibar',
	   						'description' => '
								Su envase al alto vacío le permiten una vida en anaquel por más de 18 meses.<br><br>
								Se encuentran tostado, frito y salado.
	   						 ',
	   						'presentation' => array(
	   							'1' => 'lata de 115 gr.',
	   						)
	   					),
	   					/***********/
/*	   					7=> array(
	   						'idproduct' => '7',
	   						'name' => 'Nuez mixta',
	   						'photos' => array(
	   							'1' => 'products/fichas/nueces_mixtas.png',
	   						),
	   						'sub_category' => 'granel',
	   						'description' => '
									Exclusiva mezcla de nueces , almendras , cacahuates y frutas deshidaratadas.	
								Contiene nuez de nogal frita salada, nuez de la india frita y salada, almendra tostada salada,
								uva pasa o arándanos y menos del 50% de cacahuates con y sin cutícula.	
								Su presentación en latas al alto vacío con 115 grs.  permiten su vida en anaquel por más de 
								18 meses.
							',
	   						'presentation' => array(
	   							'1' => 'lata de 100 gr.',
	   							'2' => 'lata de 250 gr.',
	   							'3' => 'bolsa de 700 gr.',
	   						)
	   					),*/	 
	   					/***********/
	   					8=> array(
	   						'idproduct' => '8',
	   						'name' => 'Nuez Pecanera',
	   						'photos' => array(
	   							'1' => 'products/fichas/nuezpecanera.png',
	   						),
	   						'sub_category' => 'granel',
	   						'description' => '
								La nuez pecanera es rica en ácidos grasos mono y poli insaturados como los Omega 3 y Omega 6, beneficos para la salud.<br><br>
								Es fuente de proteína, rica en arginina, fitoesteroles y compuestos fitoquimicos que tienen el efecto modulador del colesterols seríco.<br><br>
								Contiene vitaminas E (antioxidantes), del complejo B así como hierro.<br><br>
								Procedente principalmente de los estados de Chihuahua y Coahuila con sus variedades Western y Wichita entre otras.<br><br>
								Contamos con mitades y trozos en diversos tamaños.
	   						',
	   						'presentation' => array(
	   							'1' => 'bolsa de 1 kg.',
	   							// '2' => 'lata de 250 gr.',
	   							// '3' => 'bolsa de 700 gr.',
	   						)
	   					),	
	   					9=> array(
	   						'idproduct' => '9',
	   						'name' => 'Botana salada',
	   						'photos' => array(
	   							'1' => 'products/fichas/botanasalada.png',
	   						),
	   						'sub_category' => 'granel',
	   						'description' => '
								Exclusiva mezcla que contiene nuez de nogal y nuez de la india fritas y saladas, almendra tostada salada, uva pasa o arándanos y menos del 50% de cacahuates surtidos.
	   						',
	   						'presentation' => array(
	   							'1' => 'bolsa de 1 kg.',
	   							// '2' => 'lata de 250 gr.',
	   							// '3' => 'bolsa de 700 gr.',
	   						)
	   					),	
	   					10=> array(
	   						'idproduct' => '10',
	   						'name' => 'Botana enchilada',
	   						'photos' => array(
	   							'1' => 'products/fichas/botanaenchilada.png',
	   						),
	   						'sub_category' => 'granel',
	   						'description' => '
								Exclusiva mezcla que contiene nuez de la india, almendra tostada salada, pepita frita, pistache y cacahuates surtidos enchilados, salados y tipo japonés.
	   						',
	   						'presentation' => array(
	   							'1' => 'bolsa de 1 kg.',
	   							// '2' => 'lata de 250 gr.',
	   							// '3' => 'bolsa de 700 gr.',
	   						)
	   					),	
	   					11=> array(
	   						'idproduct' => '11',
	   						'name' => 'Personalizada',
/*	   						'photos' => array(
	   							'1' => '',
	   						),*/
	   						'sub_category' => 'granel',
	   						'description' => '
								En Representaciones Valsan adecuamos las mezclas de botanas de acuerdo a sus necesidades, personalizándolas y dandole la exclusividad de la mezcla.
	   						',
	   						'presentation' => array(
	   							'1' => 'bolsa de 1 kg.',
	   							// '2' => 'lata de 250 gr.',
	   							// '3' => 'bolsa de 700 gr.',
	   						)
	   					),	 
	   					12=> array(
	   						'idproduct' => '12',
	   						'name' => 'Proximamente',
	   						'photos' => array(
	   							'1' => '',
	   						),
	   						'sub_category' => 'bolsa_70_gr',
	   						'description' => null,
	   						'presentation' => null,
	   						'prox' => null,
	   					),	
	   					13=> array(
	   						'idproduct' => '13',
	   						'name' => 'Proximamente',
	   						'photos' => array(
	   							'1' => '',
	   						),
	   						'sub_category' => 'bolsa_40_gr',
	   						'description' => null,
	   						'presentation' => null,
	   						'prox' => null,
	   					),	
	   					14=> array(
	   						'idproduct' => '14',
	   						'name' => 'Proximamente',
	   						'photos' => array(
	   							'1' => '',
	   						),
	   						'sub_category' => 'bolsa_1_kg',
	   						'description' => null,
	   						'presentation' => null,
	   						'prox' => null,
	   					),		   						   						   					  					   					   					  					
	   				   					   					   					   					  					
	   				),
	   			),
			'2' => array(
	   			'category_id' => '2',
	   			'category_name' => 'Higiene Industrial',
	   			'products' => array(
	   					1 => array(
	   						'idproduct' => '1',
	   						'name' => 'Ambientadores',
	   						'photos' => null,
	   						'sub_category' => 'vijusa',
	   						'description' => 'Aromas persistentes, capaces de conseguir un alto grado de efectividad y rendimiento. Agradables a la hora de entrar e imperceptibles a la hora de estar, por tanto, podemos considerar que no son molestos y que nuestro organismo los acepta sin mayor problema transcurridos unos minutos.',
/*	   						'presentation' => array(
	   							'1' => 'lata de 100 gr.',
	   							'2' => 'lata de 250 gr.',
	   							'3' => 'bolsa de 700 gr.',
	   						),*/
	   						// 'prox' => null,
	   					),
	   					3 => array(
	   						'idproduct' => '3',
	   						'name' => 'Desengrasantes',
	   						'photos' => null,
	   						'sub_category' => 'vijusa',
	   						'description' => 'Limpieza y desinfección, todo producto que sea capaz de eliminar sin gran esfuerzo una suciedad tan complicada como la grasa de una cocina, siempre será bien recibido. Los Desengrasantes se caracterizan por tener un pH alto, Alcalino. Su función, bien utilizada, es la de reducir el tiempo de eliminación de la grasa sin dañar la superficie. ',
	   						/*'presentation' => array(
	   							'1' => 'lata de 100 gr.',
	   							'2' => 'lata de 250 gr.',
	   							'3' => 'bolsa de 700 gr.',
	   						),*/
	   						// 'prox' => null,
	   					),
						5 => array(
	   						'idproduct' => '5',
	   						'name' => 'Tratamiendo de pisos',
	   						'photos' => null,
	   						'sub_category' => 'vijusa',
	   						'description' => 'La limpieza no es solo verla, hay que sentirla. Los tiempos cambian y con ellos, aparecen materiales más sofisticados, más delicados y más difíciles de mantener. En esta sección encontrará el producto indicado para realizar la limpieza más exclusiva.',
	   						/*'presentation' => array(
	   							'1' => 'lata de 100 gr.',
	   							'2' => 'lata de 250 gr.',
	   							'3' => 'bolsa de 700 gr.',
	   						),*/
	   						// 'prox' => null,
	   					),		
	   					4 => array(
	   						'idproduct' => '4',
	   						'name' => 'Vajillas y Cristaleria',
	   						'photos' => null,
	   						'sub_category' => 'vijusa',
	   						'description' => 'Brillo y transparencia unidos.  La limpieza de la vajilla, de la loza y sobre todo de la cristalería ya no es un problema. En nuestro catálogo encontrará una amplia gama de productos para el lavado manual o mecánico. <BR><BR> No todos los lavavajillas son iguales, asegúrese de utilizar el que mejor funcione con sus necesidades, dureza de agua, etc.',
	   						/*'presentation' => array(
	   							'1' => 'lata de 100 gr.',
	   							'2' => 'lata de 250 gr.',
	   							'3' => 'bolsa de 700 gr.',
	   						),*/
	   						// 'prox' => null,
	   					),
	   					2 => array(
	   						'idproduct' => '2',
	   						'name' => 'Limpiadores',
	   						'photos' => null,
	   						'sub_category' => 'vijusa',
	   						'description' => 'Eficacia, rentabilidad, rapidez. Limpiar sin esfuerzo, limpiar mucho en poco tiempo. Ofrecemos productos altamente rentables para la limpieza de cualquier superficie por delicada que sea. Haga de la limpieza una tarea cómoda a la vez que agradable. Déjese aconsejar por expertos que le ofrecerán productos exclusivos, rápidos y eficaces. Consúltenos.',
	   						/*'presentation' => array(
	   							'1' => 'lata de 100 gr.',
	   							'2' => 'lata de 250 gr.',
	   							'3' => 'bolsa de 700 gr.',
	   						),*/
	   						// 'prox' => null,
	   					),			
	   					6=> array(
	   						'idproduct' => '6',
	   						'name' => 'Desinfectante/Higienizantes',
	   						'photos' => null,
	   						'sub_category' => 'vijusa',
	   						'description' => 'La seguridad: la mayor garantía de las cosas bien hechas. Productos garantizados: desinfectantes y bactericidas que nos aseguren un alto grado de tranquilidad.',
	   						/*'presentation' => array(
	   							'1' => 'lata de 100 gr.',
	   							'2' => 'lata de 250 gr.',
	   							'3' => 'bolsa de 700 gr.',
	   						),*/
	   						// 'prox' => null,
	   					),
	   					/***********/
	   					7=> array(
	   						'idproduct' => '7',
	   						'name' => 'Insecticidas',
	   						'photos' => null,
	   						'sub_category' => 'vijusa',
	   						'description' => '¿Ha pensado en los insectos que nos atacan sin defensa y en la incomodidad y riesgo contaminante que representan para usted y sus clientes? Consúltenos, le asesoraremos para que utilice el insecticida adecuado a sus necesidades.',
	   						/*'presentation' => array(
	   							'1' => 'lata de 100 gr.',
	   							'2' => 'lata de 250 gr.',
	   							'3' => 'bolsa de 700 gr.',
	   						),*/
	   						// 'prox' => null,
	   					),	 
	   					/***********/
	   					8=> array(
	   						'idproduct' => '8',
	   						'name' => 'Biológicos',
	   						'photos' => null,
	   						'sub_category' => 'vijusa',
	   						'description' => 'Además de soluciones químicas, disponemos de otro tipo de tratamientos para solucionar malos olores, atascos en canalizaciones y conductos, así como soluciones enzimáticas y biológicas para los aseos. Consúltenos, le asesoraremos para que conozca los diferentes tratamientos biológicos.',
	   						/*'presentation' => array(
	   							'1' => 'lata de 100 gr.',
	   							'2' => 'lata de 250 gr.',
	   							'3' => 'bolsa de 700 gr.',
	   						),*/
	   						// 'prox' => null,
	   					),	
	   					9=> array(
	   						'idproduct' => '9',
	   						'name' => 'Industria Alimentaria',
	   						'photos' => null,
	   						'sub_category' => 'vijusa',
	   						'description' => 'La prevención, aplicación, y formación, son el mejor sistema. Presentamos una nueva gama de productos para la limpieza y desinfección de empresas relacionadas con el sector alimentario A.P.P.C.C.. Disponemos de productos limpiadores y desinfectantes para la limpieza C.I.P. (Clean in place) y C.O.P. (Clean out place), así como productos dosificados a través de centrales de higiene en los sistemas de rociado y espuma.',
	   					),
	   					10=> array(
	   						'idproduct' => '9',
	   						'name' => 'Industria Alimentaria',
	   						'photos' => null,
	   						'sub_category' => 'vijusa',
	   						'description' => 'La prevención, aplicación, y formación, son el mejor sistema. Presentamos una nueva gama de productos para la limpieza y desinfección de empresas relacionadas con el sector alimentario A.P.P.C.C.. Disponemos de productos limpiadores y desinfectantes para la limpieza C.I.P. (Clean in place) y C.O.P. (Clean out place), así como productos dosificados a través de centrales de higiene en los sistemas de rociado y espuma.',
	   					),	   							   					
	   					11=> array(
	   						'idproduct' => '11',
	   						'name' => 'Industria Automotriz',
	   						'photos' => null,
	   						'sub_category' => 'vijusa',
	   						'description' => 'Limpiar materiales, eliminar suciedad, trabajar en condiciones adversas: frío, humedad, lluvia, son trabajos incómodos que progresivamente deterioran la piel de las manos. En este apartado encontrará cremas lavamanos para eliminar suciedad y proteger, al mismo tiempo, las manos de empleados y mecánicos así como, productos para la limpieza de automóviles y eliminación de atascos sin dificultad.',
	   					),
	   					15=> array(
	   						'idproduct' => '15',
	   						'name' => 'Lavandería',
	   						'photos' => null,
	   						'sub_category' => 'vijusa',
	   						'description' => 'La ropa sucia tiene tanto valor como la limpia: Seleccionar y clasificar la ropa por departamentos (grado de suciedad, color o ropa blanca, uso, etc.) dosificar los productos correctamente, etc. Productos adecuados para sus necesidades.',
	   					),		   						
	   					16=> array(
	   						'idproduct' => '16',
	   						'name' => 'Higiene',
	   						'photos' => null,
	   						'sub_category' => 'vijusa',
	   						'description' => 'La Higiene Personal es el concepto básico del aseo, de la limpieza y del cuidado del cuerpo humano. Ofrecemos los productos ideales para hacer de esto una labor sencilla y eficaz.',
	   					),	
	   					17=> array(
	   						'idproduct' => '17',
	   						'name' => 'Concentrados',
	   						'photos' => null,
	   						'sub_category' => 'vijusa',
	   						'description' => 'Los productos concentrados ofrecen algunas ventajas importantes, entre ellas, conviene destacar: son fáciles de transportar y de almacenar ocupando un espacio muy reducido. La dosificación es mínima por lo cual la reposición es más espaciada. Se recomienda para una correcta dosificación la instalación de centrales de mezcla que administren el producto en su justa medida.',
	   					),	
	   					18=> array(
	   						'idproduct' => '18',
	   						'name' => 'Consumo',
	   						'photos' => null,
	   						'sub_category' => 'vijusa',
	   						'description' => 'Los productos industriales están concebidos para limpiar más enérgicamente que los de uso doméstico. Lo que pasa es que a veces los envases más prácticos se hacen vitales muchas veces para la utilización de los productos de limpieza.',
	   					),	
	   					19=> array(
	   						'idproduct' => '19',
	   						'name' => 'Ecológicos',
	   						'photos' => null,
	   						'sub_category' => 'vijusa',
	   						'description' => 'Los Productos Ecolim están formados con una selección de materias primas respetuosas con el medio ambiente, tales como, el reducido impacto en el entorno acuático, la eliminación de determinadas substancias peligrosas, etc.',
	   					),	
	   					20=> array(
	   						'idproduct' => '20',
	   						'name' => 'Albercas',
	   						'photos' => null,
	   						'sub_category' => 'vijusa',
	   						'description' => 'La Elección y el manejo de los productos destinados a la conservación del agua de las piscinas es muy importante. En éste apartado veremos una serie de productos destinados al mantenimiento del agua. Es vital para la salud que el agua de las piscinas esté en perfecto estado, así se evitarán infecciones, irritaciones en la piel, alergias, etc.',
	   					),	
	   					
	   					11=> array(
	   						'idproduct' => '11',
	   						'name' => 'Kimberly clark',
	   						'photos' => array(
	   							'1' => '',
	   						),
	   						'sub_category' => 'papel',
	   						'description' => 'En representaciones Valsan, estamos comprometidos con la calidad de nuestros productos, es por eso que ofrecemos alta gama de productos... ',
	   						'presentation' => null,
	   						'prox' => null,
	   					),	 
	   					12=> array(
	   						'idproduct' => '12',
	   						'name' => 'Tork',
	   						'photos' => array(
	   							'1' => '',
	   						),
	   						'sub_category' => 'papel',
	   						'description' => null,
	   						'presentation' => null,
	   						'prox' => null,
	   					),	
	   					13=> array(
	   						'idproduct' => '13',
	   						'name' => 'Georgia Pacific',
	   						'photos' => array(
	   							'1' => '',
	   						),
	   						'sub_category' => 'papel',
	   						'description' => null,
	   						'presentation' => null,
	   						'prox' => null,
	   					),		   						   					  					   					   				
	   					14=> array(
	   						'idproduct' => '14',
	   						'name' => 'Proximamente',
	   						'photos' => null,
	   						'sub_category' => 'sanitizantes',
	   						'description' => null,
	   						'presentation' => null,
	   						'prox' => null,
	   					),		   						  					
	   				   					   					   					   					  					
	   				),
	   			),
			'3'	 => array(
				'category_id' => '3',
	   			'category_name' => 'Amenities',
	   			'products' => array(
	   					1 => array(
	   						'idproduct' => '1',
	   						'name' => 'Lata menta',
	   						'photos' => null,
	   						'sub_category' =>'lata_menta',
	   						'description' => null,
	   						'presentation' => null,
	   						'prox' => null
						),
	   					2 => array(
	   						'idproduct' => '2',
	   						'name' => 'Promocionales',
	   						'photos' => null,
	   						'sub_category' =>'promocionales',
	   						'description' => null,
	   						'presentation' => null,
	   						'prox' => null
						),						
					),
				),
	   		);
			if($idproduct == null && $idcategory == null){
				return $productos;
			}else{
				return $productos[$idcategory]['products'][$idproduct];
			}
	   	}
	   	
	} //fin de la clase
?>