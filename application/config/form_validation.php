<!-- En este documento le damos las reglas a cada formulario sobre lo que es necesario en cada uno -->
<?php  
$config = array(
    'creativo' => array(
                                    array(
                                            'field' => 'nombre_establecimiento',
                                            'label' => 'Nombre del Establecimiento',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'direccion_establecimiento',
                                            'label' => 'Dirección del establecimiento',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'mail_establecimiento',
                                            'label' => 'Correo del establecimiento',
                                            'rules' => 'valid_emails'
                                         ),
                                    array(
                                            'field' => 'telefono_establecimiento',
                                            'label' => 'Teléfono del Establecimiento',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'primer_nombre',
                                            'label' => 'Primer Nombre',
                                            'rules' => 'required'
                                         ),
                                     array(
                                            'field' => 'segundo_nombre',
                                            'label' => 'Segundo Nombre',
                                         ),
                                    array(
                                            'field' => 'primer_apellido',
                                            'label' => 'Primer Apellido',
                                            'rules' => 'required'
                                         ),
                                     array(
                                            'field' => 'segundo_apellido',
                                            'label' => 'Segundo Apellido',
                                         ),
                                    array(
                                            'field' => 'telefono_participante',
                                            'label' => 'Teléfono del Participante',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'mail_participante',
                                            'label' => 'Correo del Participante',
                                            'rules' => 'valid_emails',
                                            'rules' => 'required'
                                         ),
                                     array(
                                            'field' => 'nombre_encargado',
                                            'label' => 'Nombre del Encargado',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'telefono_encargado',
                                            'label' => 'Teléfono del Encargado',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'mail_encargado',
                                            'label' => 'Correo del Encargado',
                                            'rules' => 'valid_email',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'cargo',
                                            'label' => 'Cargo del Encargado',
                                            'rules' => 'required' 
                                        ),
                                    array(
                                        'field' => 'terminos',
                                        'label' => 'donde acepta las bases del concurso',
                                        'rules' => 'required'
                                        )
                                    ),
                'coros' => array(
                                    array(
                                            'field' => 'nombre_establecimiento',
                                            'label' => 'Nombre del Establecimiento',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'direccion_establecimiento',
                                            'label' => 'Direccion del Establecimiento',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'mail_establecimiento',
                                            'label' => 'Correo del Establecimiento',
                                            'rules' => 'valid_emails'
                                         ),
                                    array(
                                            'field' => 'telefono_establecimiento',
                                            'label' => 'Teléfono del Establecimiento',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'nombre_encargado',
                                            'label' => 'Nombre del Representante',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'telefono_encargado',
                                            'label' => 'Teléfono del Representante',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'mail_encargado',
                                            'label' => 'Correo del Representante',
                                            'rules' => 'valid_emails',
                                            'rules' => 'required'
                                         ),
                                    array(
                                        'field' => 'numero_integrantes',
                                        'label' => 'Cantidad de Integrantes',
                                        'rules' => 'required' ,
                                        'rules' => 'integer'
                                        ),
                                    array(
                                        'field' => 'terminos',
                                        'label' => 'donde acepta las bases del concurso',
                                        'rules' => 'required'
                                        )
                                    ),
                'baile' => array(
                                    array(
                                            'field' => 'nombre_establecimiento',
                                            'label' => 'Nombre del Establecimiento',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'direccion_establecimiento',
                                            'label' => 'Direccion del Establecimiento',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'mail_establecimiento',
                                            'label' => 'Correo del Establecimiento',
                                            'rules' => 'valid_emails'
                                         ),
                                    array(
                                            'field' => 'telefono_establecimiento',
                                            'label' => 'Teléfono del Establecimiento',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'nombre_encargado',
                                            'label' => 'Nombre del Representante',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'telefono_encargado',
                                            'label' => 'Teléfono del Representante',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'mail_encargado',
                                            'label' => 'Correo del Representante',
                                            'rules' => 'valid_email',
                                            'rules' => 'required'
                                         ),
                                    array(
                                        'field' => 'nombre_equipo',
                                        'label' => 'Nombre Del Grupo',
                                        'rules' => 'required'
                                        ),
                                    array(
                                        'field' => 'numero_integrantes',
                                        'label' => 'Cantidad de Integrantes',
                                        'rules' => 'required' ,
                                        'rules' => 'integer',
                                        'rules' => 'less_than[21]',
                                        'rules' => 'greater_than[4]'
                                        ),
                                    array(
                                        'field' => 'terminos',
                                        'label' => 'donde acepta las bases del concurso',
                                        'rules' => 'required'
                                        )
                                    ),
                'declamacion' => array(
                                    array(
                                            'field' => 'nombre_establecimiento',
                                            'label' => 'Nombre del Establecimiento',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'direccion_establecimiento',
                                            'label' => 'Direccion del Establecimiento',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'mail_establecimiento',
                                            'label' => 'Correo del Establecimiento',
                                            'rules' => 'valid_emails'
                                         ),
                                    array(
                                            'field' => 'telefono_establecimiento',
                                            'label' => 'Teléfono del Establecimiento',
                                            'rules' => 'required'
                                         ),
                                      array(
                                            'field' => 'primer_nombre',
                                            'label' => 'Primer Nombre',
                                            'rules' => 'required'
                                         ),
                                     array(
                                            'field' => 'segundo_nombre',
                                            'label' => 'Segundo Nombre',
                                         ),
                                    array(
                                            'field' => 'primer_apellido',
                                            'label' => 'Primer Apellido',
                                            'rules' => 'required'
                                         ),
                                     array(
                                            'field' => 'segundo_apellido',
                                            'label' => 'Segundo Apellido',
                                         ),
                                    array(
                                            'field' => 'fecha_nacimiento',
                                            'label' => 'Fecha de Nacimento',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'telefono_participante',
                                            'label' => 'Teléfono del Participante',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'mail_participante',
                                            'label' => 'Correo del Participante',
                                            'rules' => 'valid_emails',
                                            'rules' => 'required'
                                         ),
                                     array(
                                            'field' => 'categoria',
                                            'label' => 'Categoría',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'mail_encargado',
                                            'label' => 'Correo del Representante',
                                            'rules' => 'valid_emails',
                                            'rules' => 'required'
                                         ),
                                    array(
                                        'field' => 'terminos',
                                        'label' => 'donde acepta las bases del concurso',
                                        'rules' => 'required'
                                        )
                                    ),
        'marimba' => array(
                                    array(
                                            'field' => 'nombre_establecimiento',
                                            'label' => 'Nombre del Establecimiento',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'direccion_establecimiento',
                                            'label' => 'Direccion del establecimiento',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'mail_establecimiento',
                                            'label' => 'Correo del establecimiento',
                                            'rules' => 'valid_emails'
                                         ),
                                    array(
                                            'field' => 'telefono_establecimiento',
                                            'label' => 'Teléfono del Establecimiento',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'nombre_equipo',
                                            'label' => 'Nombre del Grupo',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'nombre_encargado',
                                            'label' => 'Nombre del Director',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'telefono_encargado',
                                            'label' => 'Teléfono del Director',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'mail_encargado',
                                            'label' => 'Correo del Director',
                                            'rules' => 'valid_emails',
                                            'rules' => 'required'
                                         ),
                                    array(
                                        'field' => 'nombre_equipo',
                                        'label' => 'Nombre de la Marimba',
                                        'rules' => 'required'
                                        ),
                                    array(
                                        'field' => 'terminos',
                                        'label' => 'donde acepta las bases del concurso',
                                        'rules' => 'required'
                                        )
                                    ),
                 'interpretacion' => array(
                                    array(
                                            'field' => 'nombre_establecimiento',
                                            'label' => 'Nombre del Establecimiento',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'direccion_establecimiento',
                                            'label' => 'Direccion del establecimiento',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'mail_establecimiento',
                                            'label' => 'Correo del establecimiento',
                                            'rules' => 'valid_emails'
                                         ),
                                    array(
                                            'field' => 'telefono_establecimiento',
                                            'label' => 'Teléfono del Establecimiento',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'nombre_equipo',
                                            'label' => 'Nombre del Grupo',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'nombre_encargado',
                                            'label' => 'Nombre del Representante',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'telefono_encargado',
                                            'label' => 'Teléfono del Representante',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'categoria',
                                            'label' => 'Categoría',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'mail_encargado',
                                            'label' => 'Correo del Representante',
                                            'rules' => 'valid_emails',
                                            'rules' => 'required'
                                         ),
                                    array(
                                        'field' => 'terminos',
                                        'label' => 'donde acepta las bases del concurso',
                                        'rules' => 'required'
                                        )
                                    ),
                'teatro' => array(
                                    array(
                                            'field' => 'nombre_establecimiento',
                                            'label' => 'Nombre del Establecimiento',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'direccion_establecimiento',
                                            'label' => 'Direccion del establecimiento',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'mail_establecimiento',
                                            'label' => 'Correo del establecimiento',
                                            'rules' => 'valid_emails'
                                         ),
                                    array(
                                            'field' => 'telefono_establecimiento',
                                            'label' => 'Teléfono del Establecimiento',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'nombre_equipo',
                                            'label' => 'Nombre del Grupo',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'nombre_encargado',
                                            'label' => 'Nombre del Representante',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'duracion_obra',
                                            'label' => 'Duracion de la Obra',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'telefono_encargado',
                                            'label' => 'Teléfono del Representante',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'mail_encargado',
                                            'label' => 'Correo del Representante',
                                            'rules' => 'valid_emails',
                                            'rules' => 'required'
                                         ),
                                    array(
                                        'field' => 'terminos',
                                        'label' => 'donde acepta las bases del concurso',
                                        'rules' => 'required'
                                        )
                                    )                       
               );
?>