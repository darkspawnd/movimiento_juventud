<?php
class Guardar extends CI_Controller {

	public function saveFromCreativo($nombre_Establecimiento, $direccion_establecimiento,
		$telefono_establecimiento, $nombre_participante, $direccion_participante,
		$telefono_participante, $mail_participante, $genero, $categoria, $rama, $subr)
	{
		// Declaro las variables que aun no existen y que en la base de datos estaran vacias
		$pagina="";
		$foto_participante="";
		$fecha_nacimiento="";
		$documento="";
		$edad="";
		$numero_camisola="";

		$this->load->model('Insertar','',TRUE); //Carga modelo y conecta la base de datos(funcion de codigniter)
		$this->Insertar->newEstablecimiento(array($nombre_establecimiento,
	$direccion_establecimiento,$telefono_establecimiento,$pagina));
	}
}
?>