<?php
class Concurso extends CI_Controller {

/*	public function form($com,$con)
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
	
// Se Carga la vista de dualquier concurso
		$this->load->view('comun/header');
		$this->load->view('comun/nav');
		$this->load->view($com.'/'.$con);
		$this->load->view('comun/footer');
	}*/


	 function creativoSubmit()
	{

		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$ahora=unix_to_human(time());

		if ($this->form_validation->run('creativo') == false)
		{	
	// Hubo error en la validacion
		$this->load->view('comun/header');
		$this->load->view('comun/nav');
		$this->load->view('ac/creativo');
		$this->load->view('comun/footer');

		}
		else
		{
			// array campos de la base de datos y las variables del POST
			$data_establecimiento = array(
			   'nombre_establecimiento' => $_POST['nombre_establecimiento']	,
			   'direccion_establecimiento' => $_POST['direccion_establecimiento'] ,
			   'telefono_establecimiento' => $_POST['telefono_establecimiento']
			);
			$id_establecimiento = $this->Insertar->newEstablecimiento($data_establecimiento);

			$data_participante = array(
			   'primer_nombre' => $_POST['primer_nombre'],
			   'segundo_nombre' => $_POST['segundo_nombre'],
			   'primer_apellido'=> $_POST['primer_apellido'],
			   'segundo_apellido'=> $_POST['segundo_apellido'],
			   'fecha_nacimiento'=> $_POST['anio'].'/'.$_POST['mes'].'/'.$_POST['dia'],
			   'telefono_participante' => $_POST['telefono_participante'],
			   'mail_participante' => $_POST['mail_participante'],
			   'genero'=>$_POST['genero']
			);
			$id_participante = $this->Insertar->newParticipante($data_participante);


			$data_encargado = array(
				'nombre_encargado' => $_POST['nombre_encargado'],
				'telefono_encargado' => $_POST['telefono_encargado'],
				'mail_encargado' => $_POST['mail_encargado'],
				'cargo' => $_POST['cargo']
				);
			$id_encargado = $this->Insertar->newEncargado($data_encargado);
// Obtener el id de concurso 
			$categoria = ($_POST['categoria']== 'basicos') ? 1 : 2 ;
			$rama = ($_POST['rama']=='caricatura') ? 1 : 2 ;
			$subr=$_POST['subr'];
			if ($rama==1) {
				if ($categoria==1) {
					$id_concurso=1;
				}else{
					$id_concurso=6;
				}
			}elseif ($subr=='lapiz') {
				if ($categoria==1) {
					$id_concurso=2;
				}else{
					$id_concurso=7;
				}
			}elseif ($subr=='carboncillo') {
				if ($categoria==1) {
					$id_concurso=3;
				}else{
					$id_concurso=8;
				}
			}elseif ($subr=='b/n') {
				if ($categoria==1) {
					$id_concurso=4;
				}else{
					$id_concurso=9;
				}
			}elseif ($subr=='color') {
				if ($categoria==1) {
					$id_concurso=5;
				}else{
					$id_concurso=10;
				}
			}
	
		// Asigna al participante al establecimiento
			$data_asignacion_p_e = array(
				'id_participante' => $id_participante,
				'id_establecimiento' => $id_establecimiento 
				);
			$id_asignar_establecimiento = $this->Insertar->newAsignacion_P_E($data_asignacion_p_e);
// se asignara al concurso
			$data_asignacion_individual= array(
				'id_asignar_establecimiento' => $id_asignar_establecimiento,
				'id_encargado' => $id_encargado,
				'id_concurso' => $id_concurso
				);
			$id_asignacion_individual = $this->Insertar->newAsignacion_Individual($data_asignacion_individual);
// Se Ingresa el formulario con la fecha 
			$data_formulario = array(
				'id_asignacion_individual' => $id_asignacion_individual,
				'id_equipo' => null,
				'id_asignar_equipo' => null,
				'fecha_inclucion' => $ahora
				);
			$id_formulario = $this->Insertar->newFormulario($data_formulario);

// Mostromos la vista de que se ingreso correctamente
			$this->load->view('comun/header');
			$this->load->view('comun/nav');
			$this->load->view('paginas/formsuccess');
			$this->load->view('comun/footer');
		}
	}





	function baileSubmit()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$ahora=unix_to_human(time());
	
		if ($this->form_validation->run('baile') == false)
		{	
	// Hubo error en la validacion
		$this->load->view('comun/header');
		$this->load->view('comun/nav');
		$this->load->view('ac/baile');
		$this->load->view('comun/footer');

		}
		else
		{
			// array campos de la base de datos y las variables del POST
			$data_establecimiento = array(
			   'nombre_establecimiento' => $_POST['nombre_establecimiento']	,
			   'direccion_establecimiento' => $_POST['direccion_establecimiento'] ,
			   'telefono_establecimiento' => $_POST['telefono_establecimiento']
			);
			$id_establecimiento = $this->Insertar->newEstablecimiento($data_establecimiento);
			
			$data_encargado = array(
				'nombre_encargado' => $_POST['nombre_encargado'],
				'telefono_encargado' => $_POST['telefono_encargado'],
				'mail_encargado' => $_POST['mail_encargado'],
				);
			$id_encargado = $this->Insertar->newEncargado($data_encargado);
			
			$data_equipo = array(
				'nombre_equipo' => $_POST['nombre_equipo'],
				'id_establecimiento' => $id_establecimiento,
				'id_encargado' => $id_encargado,
				'id_concurso' => $_POST['id_concurso'],
				'numero_integrantes' => $_POST['numero_integrantes'],
				);
			$id_equipo = $this->Insertar->newEquipo($data_equipo);

			$data_formulario = array(
				'id_asignacion_individual' => null,
				'id_equipo' => $id_equipo,
				'id_asignar_equipo' => null,
				'fecha_inclucion' => $ahora
				);
			$id_formulario = $this->Insertar->newFormulario($data_formulario);

// Mostramos la vista de que se ingreso correctamente
			$this->load->view('comun/header');
			$this->load->view('comun/nav');
			$this->load->view('paginas/formsuccess');
			$this->load->view('comun/footer');
		}
	}






 	function corosSubmit()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$ahora=unix_to_human(time());
		
		if ($this->form_validation->run('coros') == false)
		{	
		// Hubo error en la validacion
		$this->load->view('comun/header');
		$this->load->view('comun/nav');
		$this->load->view('ac/coros');
		$this->load->view('comun/footer');

		}
		else
		{
			// array campos de la base de datos y las variables del POST
			$data_establecimiento = array(
			   'nombre_establecimiento' => $_POST['nombre_establecimiento']	,
			   'direccion_establecimiento' => $_POST['direccion_establecimiento'] ,
			   'telefono_establecimiento' => $_POST['telefono_establecimiento']
			);
			$id_establecimiento = $this->Insertar->newEstablecimiento($data_establecimiento);
			
			$data_encargado = array(
				'nombre_encargado' => $_POST['nombre_encargado'],
				'telefono_encargado' => $_POST['telefono_encargado'],
				'mail_encargado' => $_POST['mail_encargado'],
				);
			$id_encargado = $this->Insertar->newEncargado($data_encargado);
			
			$data_equipo = array(
				'nombre_equipo' => "Coro de ".$_POST['nombre_establecimiento'],
				'id_establecimiento' => $id_establecimiento,
				'id_encargado' => $id_encargado,
				'id_concurso' => 14,
				'numero_integrantes' => $_POST['numero_integrantes'],
				);
			$id_equipo = $this->Insertar->newEquipo($data_equipo);

			$data_formulario = array(
				'id_asignacion_individual' => null,
				'id_equipo' => $id_equipo,
				'id_asignar_equipo' => null,
				'fecha_inclucion' => $ahora
				);
			$id_formulario = $this->Insertar->newFormulario($data_formulario);

			$this->load->view('comun/header');
			$this->load->view('comun/nav');
			$this->load->view('paginas/formsuccess');
			$this->load->view('comun/footer');
		}
	}





	function marimbaSubmit()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$ahora=unix_to_human(time());
		
		if ($this->form_validation->run('marimba') == false)
		{	
		// Hubo error en la validacion
		$this->load->view('comun/header');
		$this->load->view('comun/nav');
		$this->load->view('ac/marimba');
		$this->load->view('comun/footer');
		}
		else
		{
			// array campos de la base de datos y las variables del POST
			$data_establecimiento = array(
			   'nombre_establecimiento' => $_POST['nombre_establecimiento']	,
			   'direccion_establecimiento' => $_POST['direccion_establecimiento'] ,
			   'telefono_establecimiento' => $_POST['telefono_establecimiento']
			);
			$id_establecimiento = $this->Insertar->newEstablecimiento($data_establecimiento);
			
			$data_encargado = array(
				'nombre_encargado' => $_POST['nombre_encargado'],
				'telefono_encargado' => $_POST['telefono_encargado'],
				'mail_encargado' => $_POST['mail_encargado'],
				);
			$id_encargado = $this->Insertar->newEncargado($data_encargado);
			
			$data_equipo = array(
				'nombre_equipo' => $_POST['nombre_equipo'],
				'id_establecimiento' => $id_establecimiento,
				'id_encargado' => $id_encargado,
				'id_concurso' => 30,
				'numero_integrantes' => $_POST['numero_integrantes'],
				);
			$id_equipo = $this->Insertar->newEquipo($data_equipo);

			$data_formulario = array(
				'id_asignacion_individual' => null,
				'id_equipo' => $id_equipo,
				'id_asignar_equipo' => null,
				'fecha_inclucion' => $ahora
				);
			$id_formulario = $this->Insertar->newFormulario($data_formulario);

			$this->load->view('comun/header');
			$this->load->view('comun/nav');
			$this->load->view('paginas/formsuccess');
			$this->load->view('comun/footer');
		}
	}




	function declamacionSubmit()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$ahora=unix_to_human(time());
		
		if ($this->form_validation->run('declamacion') == false)
		{	
		// Hubo error en la validacion
		$this->load->view('comun/header');
		$this->load->view('comun/nav');
		$this->load->view('ac/declamacion');
		$this->load->view('comun/footer');
		}
		else
		{
			$data_establecimiento = array(
			   'nombre_establecimiento' => $_POST['nombre_establecimiento']	,
			   'direccion_establecimiento' => $_POST['direccion_establecimiento'] ,
			   'telefono_establecimiento' => $_POST['telefono_establecimiento']
			);
			$id_establecimiento = $this->Insertar->newEstablecimiento($data_establecimiento);

			$data_participante = array(
			   'primer_nombre' => $_POST['primer_nombre'],
			   'segundo_nombre' => $_POST['segundo_nombre'],
			   'primer_apellido'=> $_POST['primer_apellido'],
			   'segundo_apellido'=> $_POST['segundo_apellido'],
			   'fecha_nacimiento'=> $_POST['anio'].'/'.$_POST['mes'].'/'.$_POST['dia'],
			   'telefono_participante' => $_POST['telefono_participante'],
			   'mail_participante' => $_POST['mail_participante'],
			   'genero'=>$_POST['genero']
			);
			$id_participante = $this->Insertar->newParticipante($data_participante);

			$data_encargado = array(
				'nombre_encargado' => $_POST['nombre_encargado'],
				'telefono_encargado' => $_POST['telefono_encargado'],
				'mail_encargado' => $_POST['mail_encargado'],
				'cargo' => $_POST['cargo']
				);
			$id_encargado = $this->Insertar->newEncargado($data_encargado);

			$data_asignacion_p_e = array(
				'id_participante' => $id_participante,
				'id_establecimiento' => $id_establecimiento 
				);
			$id_asignar_establecimiento = $this->Insertar->newAsignacion_P_E($data_asignacion_p_e);

// se asignara al concurso
			$data_asignacion_individual= array(
				'id_asignar_establecimiento' => $id_asignar_establecimiento,
				'id_encargado' => $id_encargado,
				'id_concurso' => $_POST['id_concurso']
				);
			$id_asignacion_individual = $this->Insertar->newAsignacion_Individual($data_asignacion_individual);
// Se Ingresa el formulario con la fecha 
			$data_formulario = array(
				'id_asignacion_individual' => $id_asignacion_individual,
				'id_equipo' => null,
				'id_asignar_equipo' => null,
				'fecha_inclucion' => $ahora
				);
			$id_formulario = $this->Insertar->newFormulario($data_formulario);
			
		}
	}

	function rockSubmit()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$ahora=unix_to_human(time());
		
		if ($this->form_validation->run('rock') == false)
		{	
		$this->load->view('comun/header');
		$this->load->view('comun/nav');
		$this->load->view('ac/rock');
		$this->load->view('comun/footer');
		}
		else
		{
			$data_establecimiento = array(
			   'nombre_establecimiento' => $_POST['nombre_establecimiento']	,
			   'direccion_establecimiento' => $_POST['direccion_establecimiento'] ,
			   'telefono_establecimiento' => $_POST['telefono_establecimiento']
			);
			$id_establecimiento = $this->Insertar->newEstablecimiento($data_establecimiento);
			
			$data_encargado = array(
				'nombre_encargado' => $_POST['nombre_encargado'],
				'telefono_encargado' => $_POST['telefono_encargado'],
				'mail_encargado' => $_POST['mail_encargado'],
				);
			$id_encargado = $this->Insertar->newEncargado($data_encargado);
			
			$data_equipo = array(
				'nombre_equipo' => $_POST['nombre_equipo'],
				'id_establecimiento' => $id_establecimiento,
				'id_encargado' => $id_encargado,
				'id_concurso' => 17,
				'numero_integrantes' => $_POST['numero_integrantes'],
				);
			$id_equipo = $this->Insertar->newEquipo($data_equipo);

			$data_formulario = array(
				'id_asignacion_individual' => null,
				'id_equipo' => $id_equipo,
				'id_asignar_equipo' => null,
				'fecha_inclucion' => $ahora
				);
			$id_formulario = $this->Insertar->newFormulario($data_formulario);

// Mostramos la vista de que se ingreso correctamente
			$this->load->view('comun/header');
			$this->load->view('comun/nav');
			$this->load->view('paginas/formsuccess');
			$this->load->view('comun/footer');
		}
	}





	function instrumentosSubmit()
	{

		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$ahora=unix_to_human(time());

		if ($this->form_validation->run('instrumentos') == false)
		{	
	// Hubo error en la validacion
		$this->load->view('comun/header');
		$this->load->view('comun/nav');
		$this->load->view('ac/instrumentos');
		$this->load->view('comun/footer');

		}
		else
		{
			// array campos de la base de datos y las variables del POST
			$data_establecimiento = array(
			   'nombre_establecimiento' => $_POST['nombre_establecimiento']	,
			   'direccion_establecimiento' => $_POST['direccion_establecimiento'] ,
			   'telefono_establecimiento' => $_POST['telefono_establecimiento']
			);
			$id_establecimiento = $this->Insertar->newEstablecimiento($data_establecimiento);

			$data_participante = array(
			   'primer_nombre' => $_POST['primer_nombre'],
			   'segundo_nombre' => $_POST['segundo_nombre'],
			   'primer_apellido'=> $_POST['primer_apellido'],
			   'segundo_apellido'=> $_POST['segundo_apellido'],
			   'fecha_nacimiento'=> $_POST['anio'].'/'.$_POST['mes'].'/'.$_POST['dia'],
			   'telefono_participante' => $_POST['telefono_participante'],
			   'mail_participante' => $_POST['mail_participante'],
			   'genero'=>$_POST['genero']
			);
			$id_participante = $this->Insertar->newParticipante($data_participante);


			$data_encargado = array(
				'nombre_encargado' => $_POST['nombre_encargado'],
				'telefono_encargado' => $_POST['telefono_encargado'],
				'mail_encargado' => $_POST['mail_encargado'],
				'cargo' => $_POST['cargo']
				);
			$id_encargado = $this->Insertar->newEncargado($data_encargado);
	
		// Asigna al participante al establecimiento
			$data_asignacion_p_e = array(
				'id_participante' => $id_participante,
				'id_establecimiento' => $id_establecimiento 
				);
			$id_asignar_establecimiento = $this->Insertar->newAsignacion_P_E($data_asignacion_p_e);
// se asignara al concurso
			$data_asignacion_individual= array(
				'id_asignar_establecimiento' => $id_asignar_establecimiento,
				'id_encargado' => $id_encargado,
				'id_concurso' => $_POST['id_concurso']
				);
			$id_asignacion_individual = $this->Insertar->newAsignacion_Individual($data_asignacion_individual);
// Se Ingresa el formulario con la fecha 
			$data_formulario = array(
				'id_asignacion_individual' => $id_asignacion_individual,
				'id_equipo' => null,
				'id_asignar_equipo' => null,
				'fecha_inclucion' => $ahora
				);
			$id_formulario = $this->Insertar->newFormulario($data_formulario);

// Mostromos la vista de que se ingreso correctamente
			$this->load->view('comun/header');
			$this->load->view('comun/nav');
			$this->load->view('paginas/formsuccess');
			$this->load->view('comun/footer');
		}
	}

function interpretacionSubmit()
	{

		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$ahora=unix_to_human(time());

		if ($this->form_validation->run('interpretacion') == false)
		{	
	// Hubo error en la validacion
		$this->load->view('comun/header');
		$this->load->view('comun/nav');
		$this->load->view('ac/interpretacion');
		$this->load->view('comun/footer');

		}
		else
		{
			// array campos de la base de datos y las variables del POST
			$data_establecimiento = array(
			   'nombre_establecimiento' => $_POST['nombre_establecimiento']	,
			   'direccion_establecimiento' => $_POST['direccion_establecimiento'] ,
			   'telefono_establecimiento' => $_POST['telefono_establecimiento']
			);
			$id_establecimiento = $this->Insertar->newEstablecimiento($data_establecimiento);

			$data_participante = array(
			   'primer_nombre' => $_POST['primer_nombre'],
			   'segundo_nombre' => $_POST['segundo_nombre'],
			   'primer_apellido'=> $_POST['primer_apellido'],
			   'segundo_apellido'=> $_POST['segundo_apellido'],
			   'fecha_nacimiento'=> $_POST['anio'].'/'.$_POST['mes'].'/'.$_POST['dia'],
			   'telefono_participante' => $_POST['telefono_participante'],
			   'mail_participante' => $_POST['mail_participante'],
			   'genero'=>$_POST['genero']
			);
			$id_participante = $this->Insertar->newParticipante($data_participante);


			$data_encargado = array(
				'nombre_encargado' => $_POST['nombre_encargado'],
				'telefono_encargado' => $_POST['telefono_encargado'],
				'mail_encargado' => $_POST['mail_encargado'],
				'cargo' => $_POST['cargo']
				);
			$id_encargado = $this->Insertar->newEncargado($data_encargado);
	
		// Asigna al participante al establecimiento
			$data_asignacion_p_e = array(
				'id_participante' => $id_participante,
				'id_establecimiento' => $id_establecimiento 
				);
			$id_asignar_establecimiento = $this->Insertar->newAsignacion_P_E($data_asignacion_p_e);
// se asignara al concurso
			$data_asignacion_individual= array(
				'id_asignar_establecimiento' => $id_asignar_establecimiento,
				'id_encargado' => $id_encargado,
				'id_concurso' => $_POST['id_concurso']
				);
			$id_asignacion_individual = $this->Insertar->newAsignacion_Individual($data_asignacion_individual);
// Se Ingresa el formulario con la fecha 
			$data_formulario = array(
				'id_asignacion_individual' => $id_asignacion_individual,
				'id_equipo' => null,
				'id_asignar_equipo' => null,
				'fecha_inclucion' => $ahora
				);
			$id_formulario = $this->Insertar->newFormulario($data_formulario);

// Mostromos la vista de que se ingreso correctamente
			$this->load->view('comun/header');
			$this->load->view('comun/nav');
			$this->load->view('paginas/formsuccess');
			$this->load->view('comun/footer');
		}
	}




}
?>
