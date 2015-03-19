<?php

class Insertar extends CI_Model {


function exists_establecimiento($id)
{
	// Evalua si existe o no el registro con ese numero de id, regresa un valor True o False
	$this->db->from('Establecimiento');
	$this->db->where('idEstablecimiento',$id);
	$query = $this->db->get();
	
	return ($query->num_rows()>=1);
}


function newEstablecimiento($data)
{
// query select from where
	$this->db->from('Establecimiento');
	$this->db->where('nombre_establecimiento',$data['nombre_establecimiento']);
	$query = $this->db->get();
// si existe algun registro asi
	if ($query->num_rows()==1)
	{
// obtener el id del registro existente
		$row = $query->row();
		$idEstablecimiento = $row->idEstablecimiento;
	}
	else{
// si no id null
		$idEstablecimiento = '';
	}

// Si NO existe
	if (!$this->exists_establecimiento($idEstablecimiento))
	{
// inserta el dato y devuelve el id
		$this->db->insert('Establecimiento', $data); 
		return $this->db->insert_id();
	}
	else
	{
//Si ya existe que actualize los datos y siempre regresa el id 
		$this->db->where('idEstablecimiento',$idEstablecimiento);
		$this->db->update('Establecimiento',$data);
		return $idEstablecimiento;
	}


}

function exists_participante($id)
{

	$this->db->from('Participante');
	$this->db->where('idParticipante',$id);
	$query = $this->db->get();

	return ($query->num_rows()>=1);
}

 function newParticipante($data)
{
// query select from where
	$this->db->where('primer_nombre',$data['primer_nombre']);
	$this->db->where('segundo_nombre',$data['segundo_nombre']);
	$this->db->where('primer_apellido',$data['primer_apellido']);
	$this->db->where('segundo_apellido',$data['segundo_apellido']);
	$this->db->where('fecha_nacimiento',$data['fecha_nacimiento']);
	$this->db->from('Participante');
	$query = $this->db->get();
// si existe algun registro asi
	if ($query->num_rows()>=1)
	{
// obtener el id del registro existente
		$row = $query->row();
		$idParticipante = $row->idParticipante;
	}
	else{
// si no id null
		$idParticipante = '';
	}
// Si NO existe
	if (!$this->exists_participante($idParticipante))
	{
// inserta el dato y devuelve el id		
	$this->db->insert('Participante', $data); 
	return $this->db->insert_id();
	}
	else
	{
//Si ya existe que actualize los datos y siempre regresa el id 	
		$this->db->where('idParticipante',$idParticipante);
		$this->db->update('Participante',$data);	
		return $idParticipante;
	}
}
function exists_asig_P_E($id)
{
	$this->db->from('Asignar_Establecimiento');
	$this->db->where('idAsignar_Establecimiento',$id);
	$query = $this->db->get();

	return ($query->num_rows()>=1);
}

function newAsignacion_P_E($data)
{
	$this->db->where('id_participante',$data['id_participante']);
	$this->db->where('id_establecimiento',$data['id_establecimiento']);
	$this->db->from('Asignar_Establecimiento');
	$query = $this->db->get();

	if ($query->num_rows()>=1) {
		$row = $query->row();
		$idAsignar_Establecimiento = $row->idAsignar_Establecimiento;
	}else{
		$idAsignar_Establecimiento = '';
	}
	if (!$this->exists_asig_P_E($idAsignar_Establecimiento)) {
		$this->db->insert('Asignar_Establecimiento',$data);
		return $this->db->insert_id();
	}else{
		return $idAsignar_Establecimiento;
	}
}

function exists_asignacion_individual($id)
{
	$this->db->from('Asignacion_Individual');
	$this->db->where('idAsignacion_Individual',$id);
	$query = $this->db->get();
	return ($query->num_rows()>=1);
}


function newAsignacion_Individual($data)
{
	$this->db->where('id_asignar_establecimiento',$data['id_asignar_establecimiento']);
	$this->db->where('id_concurso',$data['id_concurso']);
	$this->db->from('Asignacion_Individual');
	$query = $this->db->get();

	if ($query->num_rows()>=1) {
		$row= $query->row();
		$idAsignacion_Individual = $row->$idAsignacion_Individual;
	}else{
		$idAsignacion_Individual = '';
	}
	if (!$this->exists_asignacion_individual($idAsignacion_Individual)) {
		$this->db->insert('Asignacion_Individual',$data);
		return $this->db->insert_id();
	}else{
		return $idAsignacion_Individual;
	}
}

function exists_encargado($id)
{
	$this->db->from('Encargado');
	$this->db->where('idEncargado',$id);
	$query = $this->db->get();
	return ($query->num_rows()>=1);
}

function newEncargado($data)
{
	$this->db->where('nombre_encargado',$data['nombre_encargado']);
	$this->db->where('mail_encargado',$data['mail_encargado']);
	$this->db->where('telefono_encargado',$data['telefono_encargado']);
	$this->db->from('Encargado');
	$query = $this->db->get();
	if ($query->num_rows()>=1) {
		$row= $query->row();
		$idEncargado = $row->idEncargado;
	}else{
		$idEncargado = '';
	}
	if (!$this->exists_encargado($idEncargado)) {
		$this->db->insert('Encargado',$data);
		return $this->db->insert_id();
	}else{
		return $idEncargado;
	}
}
function exists_equipo($id)
{
	$this->db->from('Equipo');
	$this->db->where('idEquipo',$id);
	$query = $this->db->get();
	return ($query->num_rows()>=1);
}

function newEquipo($data)
{
	$this->db->where('nombre_equipo',$data['nombre_equipo']);
	$this->db->where('id_establecimiento',$data['id_establecimiento']);
	$this->db->where('id_encargado',$data['id_encargado']);
	$this->db->where('id_concurso',$data['id_concurso']);
	$this->db->from('Equipo');
	$query = $this->db->get();
	if ($query->num_rows()>=1) {
		$row= $query->row();
		$idEquipo = $row->idEquipo;
	}else{
		$idEquipo = '';
	}
	if (!$this->exists_equipo($idEquipo)) {
		$this->db->insert('Equipo',$data);
		return $this->db->insert_id();
	}else{
		return $idEquipo;
	}
}


}
?>