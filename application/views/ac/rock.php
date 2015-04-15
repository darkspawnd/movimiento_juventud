
	<link rel="stylesheet" type="text/css" href="<? echo base_url('assets/css/bootstrap.css') ?>">
    <link rel="stylesheet" type="text/css" href="<? echo base_url('assets/css/formstyle.css') ?>">
	<body>
    <div class="cover top no-padding">
    <img class="cover" src="<? echo base_url('assets/images/arteycultura.jpg') ?>">
    </div>
    <div class="wrapper">
        <h1> Grupos de Rock </h1>
        <h3> Bases del Concurso </h3>
        <p>a)	El mínimo de integrantes por grupo es de tres (3) y un máximo de seis (6) personas.</p>
        <p>b)	Únicamente estudiantes del nivel medio pueden integrar los grupos musicales, los docentes no pueden participar; de hacerse provocará la descalificación inmediata del grupo.</p>
        <p>c)	El máximo de grupos por institución es de dos (2) grupos.</p>
        <p>d)	Se tendrá un tiempo de espera máximo de quince (15) minutos a partir de la hora citada.</p>
        <p>e)	Los integrantes del grupo musical deberán interpretar los instrumentos y la interpretación vocal en forma individual o grupal con un (1) tema del género rock.</p>
        <p>f)	Quedan excluidos los temas que vayan en contra de la religión, la moral y las buenas costumbres.</p>
        <p>g)	Cada grupo debe traer sus instrumentos y equipo de amplificación, de no contar con algún instrumento,  deberá prescindir del mismo.  Queda prohibido el uso de instrumental 
        de otra agrupación, salvo el caso de los vocalistas, el infringir esta norma automáticamente descalifica a ambas agrupaciones.</p>
        <p>h)	Los integrantes deben ser alumnos inscritos oficialmente en el nivel medio y del mismo establecimiento participante.</p>
       <p>i) Se calificarán en orden de prioridades, los siguientes aspectos:</p>
        <p>&nbsp&nbsp&nbsp&nbsp1. AFINACIÓN INSTRUMENTAL Y VOCAL</p>
        <p>&nbsp&nbsp&nbsp&nbsp2. INTEGRACIÓN SONORA Y ECUALIZACIÓN</p>
        <p>&nbsp&nbsp&nbsp&nbsp3. GRADO DE DIFICULTAD BIEN PROYECTADO (cambios de velocidad, cambios de compás, técnica, polifonía vocal)</p>
        <p>&nbsp&nbsp&nbsp&nbsp4. PROYECCIÓN ESCÉNICA (animación)</p>
        <p>j) El ganador oficial del primer lugar de Juventud 2014 podrá participar en la Semana Oficial sin competir en la Fase de Eliminatorias.</p>
        
        <hr />
        <p> <b>Fecha</b> - 6 de Mayo</p>
        <hr />
    </div> 
    <form method="post" accept-charset="utf-8" action="<? echo site_url('concurso/rocksubmit') ?>"/>
    <div class="form-wrapper rock">
		<a href="<? echo site_url('iniciar/datos') ?>" class="data-purpose">¿Por qué necesitamos estos datos?</a>
        <?php echo validation_errors('<div class="error-box"><div class="error-container">-', '</div></div>'); ?>
        <script type="application/javascript">
            if($(".error-box").length > 0){
                var boxes = document.getElementsByClassName("error-box");
                boxes[boxes.length - 1].style.paddingBottom = "20px";
            }
        </script>
        <h2>Inscripción</h2>
        <a href="<? echo site_url('iniciar/datos') ?>" class="data-purpose">¿Por qué necesitamos estos datos?</a>
        <h3> Datos del establecimiento: </h3>
        <div class="form-row">
            <input type="text" class="form-control" placeholder="Nombre Del Establecimiento" name="nombre_establecimiento"/>
        </div>
        <div class="form-row">
          <input type="text"class="form-control" placeholder="Dirección del Establecimiento" name="direccion_establecimiento"/>
        </div>  
        <div class="form-row">
          <input type="text" class="form-control" placeholder="Teléfono Del Establecimiento"  name="telefono_establecimiento"/>
        </div>
        <h3>Datos del Representante:</h3>
        <div class="form-row">
            <input type="text" class="form-control" placeholder="Nombre del Representante del Grupo" name="nombre_encargado"/>
        </div>
        <div class="form-row">
            <input type="text" class="form-control" placeholder="Teléfono/Celular Representante" name="telefono_encargado"/>
        </div>
        <div class="form-row">
            <input type="text" class="form-control" placeholder="Email del Representante" name="mail_encargado"/>
        </div>
        <h3>Datos del Grupo:</h3>
        <div class="form-row">
            <input type="text" class="form-control" placeholder="Nombre Del Grupo" name="nombre_equipo"/>
        </div>
        <div class="form-row">
            <input type="text" class="form-control" placeholder="Cantidad de Integrantes" name="numero_integrantes" onkeypress="return event.charCode >= 48 && event.charCode <= 57"/>
        </div>
        <div class="form-row">
            <input type="checkbox" id="terminos" name="terminos" value="aceptar_terminos"> <label class="terms" for="terminos"> Doy fe de la veracidad de los datos y me comprometo a cumplir las bases del evento</label> <a href="#">(Ver bases)</a>
        </div>
        <div class="form-row">
            <input type="button" class="form-control btn_bottom" value="Descargar ficha" onClick="window.location = 'https://drive.google.com/file/d/0B_I-3D9xnhN8VXFaYjgzWGdfdlU/view?usp=sharing'"/>
            <input type="submit" class="form-control send-art btn_bottom" />
        </div>
    </div>
    </form>
	