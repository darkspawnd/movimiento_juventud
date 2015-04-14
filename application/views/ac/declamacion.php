<!-- Formulario Certamen Creativo o Dibujo -->
    <link rel="stylesheet" type="text/css" href="<? echo base_url('assets/css/bootstrap.css') ?>">
    <link rel="stylesheet" type="text/css" href="<? echo base_url('assets/css/formstyle.css') ?>">
	<body>
    <div class="cover top no-padding">
        <img class="cover" src="<? echo base_url('assets/images/arteycultura.jpg') ?>">
    </div>
    <div class="wrapper">
        <h1> Certamen de Declamación </h1>
        <hr />
        <h2> Bases del Concurso </h2>
        <p>a)	El tiempo de declamación no podrá exceder los cinco (5) minutos.</p>
        <p>b)	La participación deberá hacerse en Idioma Español.</p>
        <p>c)	El participante deberá presentar una (1) copia impresa del poema de participación.</p>
        <p>d)	El alumno deberá presentarse con el uniforme del colegio al que pertenece el día de su participación.</p>
        <p>e)	En la Fase de Eliminatorias cada institución educativa puede participar con un máximo de tres (3) alumnos.</p>
        <p>a)	En la Fase Final (Semana Oficial) cada institución educativa puede participar con la cantidad de alumnos que hayan sido clasificados por parte del jurado calificador.</p>
        <p>f)	El ganador oficial del primer lugar de Juventud 2014 podrá participar en la Semana Oficial sin competir en la Fase de Eliminatorias.</p>
        <hr />
        <p> <b>Fecha</b> - 27 de Abril</p>
        <hr />
    </div> 
    <form method="post" accept-charset="utf-8" action="<? echo site_url('concurso/declamacionsubmit') ?>"/>
    <div class="form-wrapper decla">
        <!-- Form Validation Errors -->
        <?php echo validation_errors('<div class="error-box"><div class="error-container">-', '</div></div>'); ?>
        <script type="application/javascript">
            if($(".error-box").length > 0){
                var boxes = document.getElementsByClassName("error-box");
                boxes[boxes.length - 1].style.paddingBottom = "20px";
            }
        </script>
        <!-- Form Validation Errors -->        <h2>Inscripción</h2>
        <h3> Datos del establecimiento: </h3>
        <div class="form-row">
            <input type="text" class="form-control" placeholder="Nombre Del Establecimiento" name="nombre_establecimiento"/>
        </div>
        <div class="form-row">
          <input type="text"class="form-control" placeholder="Dirección Del Establecimiento" name="direccion_establecimiento"/>
        </div>  
        <div class="form-row">
          <input type="text" class="form-control" placeholder="Teléfono Del Establecimiento"  name="telefono_establecimiento"/>
        </div>
        <h3> Datos del participante: </h3>
        <div class="form-row">
            <input type="text" class="form-control" placeholder="Primer Nombre" name="primer_nombre"/>
        </div>
        <div class="form-row">
            <input type="text" class="form-control" placeholder="Segundo Nombre" name="segundo_nombre"/>
        </div>
        <div class="form-row">
            <input type="text" class="form-control" placeholder="Primer Apellido" name="primer_apellido"/>
        </div>
        <div class="form-row">
            <input type="text" class="form-control" placeholder="Segundo Apellido" name="segundo_apellido"/>
        </div>
        <div class="form-row">
            <input type="text" class="form-control fecha" placeholder="Día" name="dia"/> /
            <input type="text" class="form-control fecha" placeholder="Mes" name="mes"/> /
            <input type="text" class="form-control fecha" placeholder="Año" name="anio"/>
        </div>
        <div class="form-row">
            <input type="text" class="form-control" placeholder="Telefono/Celular Participante" name="telefono_participante"/>
        </div>
        <div class="form-row">
            <input type="text" class="form-control" placeholder="Email Del Participante" name="mail_participante"/>
        </div>
		<h2>Género</h2>
        <div class="all"><input id="m" type="radio"  name="genero" value="masculino" checked/><label for="m"> &nbsp Masculino</label> </div>
        <div class="all"><input id="f" type="radio" name="genero" value="femenino"/><label for="f"> &nbsp Femenino</label></div>
        <h2>Categoría</h2>
        <div class="all"><input type="radio" name="categoria" value="basicos" checked id="ba"/><label for="ba"> &nbsp Básicos</label> </div>
        <div class="all"><input type="radio" name="categoria"value="diversificado" id="di"/><label for="di"> &nbsp Diversificado</label></div>
        <div class="form-row">
            <input type="checkbox" id="terminos" name="terminos" value="aceptar_terminos"> <label class="terms" for="terminos"> Doy fe de la veracidad de los datos y me comprometo a cumplir las bases del evento</label> <a href="#">(Ver bases)</a>
        </div>
        <div class="form-row">
            <input type="button" class="form-control btn_bottom" value="Descargar ficha" onClick="window.location = 'https://drive.google.com/file/d/0B_I-3D9xnhN8NUpnREg2RkNzOUk/view?usp=sharing'"/>
            <input type="submit" class="form-control send-art btn_bottom" />
        </div>
    </div>
</div>
</form>
</body>