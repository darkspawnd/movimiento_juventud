<!-- Formulario de Certámen Creativo-->
    <link rel="stylesheet" type="text/css" href="<? echo base_url('assets/css/bootstrap.css') ?>">
    <link rel="stylesheet" type="text/css" href="<? echo base_url('assets/css/formstyle.css') ?>">
    <body>
    <div class="cover top no-padding">
        <img class="cover" src="<? echo base_url('assets/images/arteycultura.jpg') ?>">
    </div>
    <div class="wrapper">
        <h1>Certámen Creativo</h1>
        <hr/>
        <h3> Bases del Concurso </h3>
        <p> a)  El concursante deberá presentarse en la fecha programada por la Comisión de Arte y Cultura con sus materiales de trabajo. </p>
        <p> b)  El formato para los concursos de Caricatura, Retrato y Pintura, será de tema libre.</p>
        <p> c)  Dado a que el tema de participación es libre, no puede atentar contra la moral y las buenas costumbres.</p>
        <p> d)  Cada concursante tendrá dos (2) horas para realizar su trabajo.</p>
        <p> e)  En el momento del concurso se prohíbe el ingreso de personas ajenas al mismo, los acompañantes de los alumnos participantes deberán esperar en el área de cafetería del Colegio Don Bosco.</p>
        <p> f)  Un jurado calificador idóneo calificará los trabajos de los participantes en días posteriores a la realización del mismo.</p>
        <p> g)  Las obras generadas durante estos concursos serán exhibidas en la Exposición de Arte levantada durante la Semana Oficial del Movimiento Juventud.</p>
        <p> h)  En la Fase de Eliminatorias cada institución educativa puede participar con un máximo de cinco (5) alumnos por cada rama del Certámen creativo.</p>
        <hr />
        <p> <b>Caricatura</b> - 27 de Abril</p>
        <p> <b>Retratos</b> - 28 de Abril</p>
        <p> <b>Pintura</b> - 29 de Abril</p>
        <hr />
    </div>
    <form method="post" accept-charset="utf-8" action="<? echo site_url('concurso/creativosubmit') ?>"/>
    <div class="form-wrapper crea">
        
        <!-- Form Validation Errors -->
        <?php echo validation_errors('<div class="error-box"><div class="error-container">-', '</div></div>'); ?>
        <script type="application/javascript">
            if($(".error-box").length > 0){
                var boxes = document.getElementsByClassName("error-box");
                boxes[boxes.length - 1].style.paddingBottom = "20px";
            }
        </script>
		<!-- Form Validation Errors -->
        
        <h2>Inscripción</h2>
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
        <h3>Datos del Encargado:</h3>
        <div class="form-row">
            <input type="text" class="form-control" placeholder="Nombre Del Encargado" name="nombre_encargado"/>
        </div>
        <div class="form-row">
            <input type="text" class="form-control" placeholder="Teléfono/Celular Encargado" name="telefono_encargado"/>
        </div>
        <div class="form-row">
            <input type="text" class="form-control" placeholder="Email del Encargado" name="mail_encargado"/>
        </div>
         <div class="form-row">
            <input type="text" class="form-control" placeholder="Cargo del Encargado dentro de su institución" name="cargo"/>
        </div>
		<h2>Categoría</h2>
		<div class="all"><input type="radio" name="categoria" value="basicos" checked id="ba"/><label for="ba"> &nbsp Básicos</label> </div>
        <div class="all"><input type="radio" name="categoria"value="diversificado" id="di"/><label for="di"> &nbsp Diversificado</label></div>
        <h2> Rama </h2>
		<div class="all"><input type="radio" name="rama" value="caricatura" checked id="ca"/><label for="ca"> &nbsp Caricatura</label></div>
		<div class="all"><input type="radio" name="rama" value="retrato" id="re"/><label for="re"> &nbsp Retrato</label></div>
		<select class="form-control" id="one" name="subr">
			 <option id="vacio1" > ... </option>
		  	 <option value="lapiz">Lápiz </option>
		 	 <option value="carboncillo" >Carboncillo </option>
		</select>
		<div class="all"><input type="radio" name="rama" value="pintura" id="pin"/><label for="pin"> &nbsp Pintura</label></div>
		<select id="two" class="form-control" style="" name="subr">
		 	 <option id="vacio2"> ... </option>
		  	 <option value="b/n" >Blanco y Negro </option>
		 	 <option value="color">Color </option>
		</select>
        <div class="form-row">
            <input type="checkbox" id="terminos" name="terminos" value="aceptar_terminos"> <label class="terms" for="terminos"> Doy fe de la veracidad de los datos y me comprometo a cumplir las bases del evento</label> <a href="#">(Ver bases)</a>
        </div>
        <div class="form-row">
            <input type="button" class="form-control btn_bottom" value="Descargar ficha" onClick="window.location = ' https://drive.google.com/file/d/0B_I-3D9xnhN8Z3pQenFVSWNVbmM/view?usp=sharing'"/>
            <input type="submit" class="form-control send-art btn_bottom" />
        </div>
    </form>
        <!-- De esta manera el usuario solo podra escoger una sola opcion  -->
        <script type="text/javascript">
        	var selects = document.getElementsByTagName("select");
   				selects[0].disabled = true;
        		selects[1].disabled = true;
        	$("input[name='rama']").click(function() {
        		var selects = document.getElementsByTagName("select");
   				selects[0].disabled = true;
        		selects[1].disabled = true;
        		if($(this).val() == "caricatura"){
        			selects[0].disabled = true;
        			selects[1].disabled = true;
        			selects[0].selectedIndex = 0;
        			selects[1].selectedIndex = 0;
        		}else if($(this).val() == "retrato") {
        			selects[0].disabled = false;
        			selects[1].disabled = true;
        			selects[1].selectedIndex = 0;
                    selects[0].selectedIndex = 1;
        		}else if($(this).val() == "pintura") {
        			selects[0].disabled = true;
        			selects[1].disabled = false;
        			selects[0].selectedIndex = 0;
                    selects[1].selectedIndex = 1;
        		}
        	});
        </script>
    </div>