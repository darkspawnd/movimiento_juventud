<?php
class Concurso extends CI_Controller {

	public function form($com,$con)
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
	
// Se Carga la vista de dualquier concurso
		$this->load->view('comun/header');
		$this->load->view('comun/nav');
		$this->load->view($com.'/'.$con);
		$this->load->view('comun/footer');
	}

	public function creativoSubmit()
	{

		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
	
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

		//regresa el id de los datos que se mandan a insertar con la misma linea de codigo
			$id_establecimiento = $this->Insertar->newEstablecimiento($data_establecimiento);
			$id_participante = $this->Insertar->newParticipante($data_participante);
		// Asigna al participante al establecimiento
			$data_asignacion_p_e = array(
				'id_participante' => $id_participante,
				'id_establecimiento' => $id_establecimiento 
				);
			$id_asignar_establecimiento = $this->Insertar->newAsignacion_P_E($data_asignacion_p_e);
// se asignara al concurso
			$data_asignacion_individual= array(
				'id_asignar_establecimiento' => $id_asignar_establecimiento,
				'id_concurso' => $id_concurso
				);
			$id_asignacion_individual = $this->Insertar->newAsignacion_Individual($data_asignacion_individual);
// Mostromos la vista de que se ingreso correctamente
			$this->load->view('comun/header');
			$this->load->view('comun/nav');
			// falta vista de Ingreso exitoso
			$this->load->view('comun/footer');
		}
	}


	function baileSubmit()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
	
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

// Mostramos la vista de que se ingreso correctamente
			$this->load->view('comun/header');
			$this->load->view('comun/nav');
			// falta vista de Ingreso exitoso
			$this->load->view('comun/footer');
		}
	}

 	function corosSubmit()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		
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
				'id_concurso' => $_POST['id_concurso'],
				'numero_integrantes' => $_POST['numero_integrantes'],
				);
			$id_equipo = $this->Insertar->newEquipo($data_equipo);
		}
	}

}
?>
