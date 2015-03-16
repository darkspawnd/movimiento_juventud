<?php
class Concurso extends CI_Controller {

	public function form($con)
	{
		

		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$data['title'] = ucfirst($con);

		if ($con == "baile") {	
		$this->form_validation->set_rules('nombre_establecimiento','nombre','required');
		$this->form_validation->set_rules('direccion_establecimiento','direccion','required');
		$this->form_validation->set_rules('telefono_establecimiento','telefono','required');
		$this->form_validation->set_rules('mail_establecimiento','mail','required');	
		}elseif($con == "creativo") {	
	
		}elseif ($con == "coros") {	
		$this->form_validation->set_rules('nombre_establecimiento','nombre','required');
		$this->form_validation->set_rules('direccion_establecimiento','direccion','required');
		$this->form_validation->set_rules('telefono_establecimiento','telefono','required');
		}

		$this->load->view('comun/header');
		$this->load->view('comun/nav');
		$this->load->view('ac/'.$con);
		$this->load->view('comun/footer');
		
	
	}

	public function creativosubmit()
	{

		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nombre_establecimiento','nombre','required');
		$this->form_validation->set_rules('direccion_establecimiento','direccion','required');
		$this->form_validation->set_rules('telefono_establecimiento','telefono','required');
	
		if ($this->form_validation->run() == false)
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
				$data = array(
				   'nombre_establecimiento' => $_POST['nombre_establecimiento']	,
				   'direccion_establecimiento' => $_POST['direccion_establecimiento'] ,
				   'telefono_establecimiento' => $_POST['telefono_establecimiento']
				);

				//regresa el id del establecimiento que se manda a insertar
				$id_establecimiento = $this->Insertar->newEstablecimiento($data);


				$data_participante = array(
				   'primer_nombre' => $_POST['primer_nombre'],
				   'segundo_nombre' => $_POST['segundo_nombre'],
				   'primer_apellido'=> $_POST['primer_apellido'],
				   'segundo_apellido'=> $_POST['segundo_apellido'],
				   'fecha_nacimiento'=> $_POST['fecha_nacimiento'],
				   'telefono_participante' => $_POST['telefono_participante'],
				   'mail_participante' => $_POST['mail_participante'],
				   'genero'=>$_POST['genero']
				);


				$this->Insertar->newParticipante($data_participante);


	}


	}
}
?>
