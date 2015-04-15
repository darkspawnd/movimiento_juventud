<!-- Formulario Instrumentos Musicales -->
    <link rel="stylesheet" type="text/css" href="<? echo base_url('assets/css/bootstrap.css') ?>">
    <link rel="stylesheet" type="text/css" href="<? echo base_url('assets/css/formstyle.css') ?>">
	<body>
    <div class="cover top no-padding">
        <img class="cover" src="<? echo base_url('assets/images/arteycultura.jpg') ?>">
    </div>
    <div class="wrapper">
        <h1> Certámen de Instrumentos Musicales </h1>
        <hr />
        <h2> Bases del Concurso </h2>

            <!-- AQui 
            FALTA 
            MUCHA 
            INFORMACION 
            DE LAS 
            BASES 
            DE ESTE 
            CONCURSO -->

        <p> <b>Fecha Guitarra Clásica</b> - 29 de Abril</p>
        <p> <b>Fecha Instrumentos Musicales</b> - 13 de Mayo</p>
        <hr />
    </div> 
    <form method="post" accept-charset="utf-8" action="<? echo site_url('concurso/instrumentossubmit') ?>"/>
    <div class="form-wrapper decla">
        <!-- Form Validation Errors -->
        <?php echo validation_errors('<div class="error-box"><div class="error-container">-', '</div></div>'); ?>
        <script type="application/javascript">
            if($(".error-box").length > 0){
                var boxes = document.getElementsByClassName("error-box");
                boxes[boxes.length - 1].style.paddingBottom = "20px";
            }
        </script>
        <!-- Form Validation Errors -->        
        <h2>Inscripción</h2><a href="<? echo site_url('iniciar/datos') ?>" class="data-purpose">¿Por qué necesitamos estos datos?</a>
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
            <input type="text" class="form-control" placeholder="Teléfono/Celular Participante" name="telefono_participante"/>
        </div>
        <div class="form-row">
            <input type="text" class="form-control" placeholder="Email Del Participante" name="mail_participante"/>
        </div>
		<h2>Género</h2>
        <div class="all"><input id="m" type="radio"  name="genero" value="masculino" checked/><label for="m"> &nbsp Masculino</label> </div>
        <div class="all"><input id="f" type="radio" name="genero" value="femenino"/><label for="f"> &nbsp Femenino</label></div>
        <h2>Rama</h2>
        <div class="all"><input type="radio" name="id_concurso" value="18" checked id="ba"/><label for="ba"> &nbsp Guitarra Clásica</label> </div>
        <div class="all"><input type="radio" name="id_concurso"value="19" id="di"/><label for="di"> &nbsp Guitarra Eléctrica</label></div>
        <div class="all"><input type="radio" name="id_concurso"value="20" id="di"/><label for="di"> &nbsp Cordófono</label></div>
        <div class="all"><input type="radio" name="id_concurso"value="21" id="di"/><label for="di"> &nbsp Aerófono</label></div>
        <div class="all"><input type="radio" name="id_concurso"value="22" id="di"/><label for="di"> &nbsp Teclado</label></div>
        <div class="all"><input type="radio" name="id_concurso"value="23" id="di"/><label for="di"> &nbsp Percusión Rítmica</label></div>

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