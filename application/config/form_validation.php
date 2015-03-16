<<?php  
$config = array(
                 'baile' => array(
                                    array(
                                            'field' => 'nombre_establecimiento',
                                            'label' => 'Nombre del Establecimiento',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'mail_establecimiento',
                                            'label' => 'Correo del establecimiento',
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
                                            'field' => 'nombre_participante',
                                            'label' => 'Nombre del Participante',
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
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'mail_participante',
                                            'label' => 'Correo del Participante',
                                            'rules' => 'valid_emails'
                                         )
                                    ),
                 'email' => array(
                                    array(
                                            'field' => 'emailaddress',
                                            'label' => 'EmailAddress',
                                            'rules' => 'required|valid_email'
                                         ),
                                    array(
                                            'field' => 'name',
                                            'label' => 'Name',
                                            'rules' => 'required|alpha'
                                         ),
                                    array(
                                            'field' => 'title',
                                            'label' => 'Title',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'message',
                                            'label' => 'MessageBody',
                                            'rules' => 'required'
                                         )
                                    )                          
               );
?>