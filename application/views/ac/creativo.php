<!-- Formulario de Certamen Creativo-->
    <link rel="stylesheet" type="text/css" href="http://localhost:8888/movimiento_juventudassets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="http://localhost:8888/movimiento_juventudassets/css/formstyle.css">
    <body>
    <div class="cover top no-padding">
        <img class="cover" src="http://localhost:8888/movimiento_juventudassets/images/arteycultura.jpg">
    </div>
    <div class="wrapper">
        <h1>Certamen Creativo</h1>
        <hr/>
        <h1> Bases del Concurso </h1>
        <p> a)  El concursante deberá presentarse en la fecha programada por la Comisión de Arte y Cultura con sus materiales de trabajo. </p>
        <p> b)  El formato para los concursos de Caricatura, Retrato y Pintura, será de tema libre.</p>
        <p> c)  Dado a que el tema de participación es libre, no puede atentar contra la moral y las buenas costumbres.</p>
        <p> d)  Cada concursante tendrá dos (2) horas para realizar su trabajo.</p>
        <p> e)  En el momento del concurso se prohíbe el ingreso de personas ajenas al mismo, los acompañantes de los alumnos participantes deberán esperar en el área de cafetería del Colegio Don Bosco.</p>
        <p> f)  Un jurado calificador idóneo calificará los trabajos de los participantes en días posteriores a la realización del mismo.</p>
        <p> g)  Las obras generadas durante estos concursos serán exhibidas en la Exposición de Arte levantada durante la Semana Oficial del Movimiento Juventud.</p>
        <p> h)  En la Fase de Eliminatorias cada institución educativa puede participar con un máximo de cinco (5) alumnos por cada rama del certamen creativo.</p>
        <hr />
        <p> <b>Caricatura</b> - 27 de Abril</p>
        <p> <b>Retratos</b> - 28 de Abril</p>
        <p> <b>Pintura</b> - 29 de Abril</p>
        <hr />
    </div>
    <form method="post" accept-charset="utf-8" action="http://localhost:8888/movimiento_juventudindex.php/concurso/creativosubmit"/>
    <?php echo validation_errors(); ?>
    <div class="form-wrapper crea">
		<h1>Inscripción</h1>
        <div class="form-row">
            <input type="text" class="form-control" placeholder="Nombre Del Establecimiento" name="nombre_establecimiento"/>
        </div>
	    <div class="form-row">
		  <input type="text"class="form-control" placeholder="Dirección Del Establecimiento" name="direccion_establecimiento"/>
        </div>  
        <div class="form-row">
		  <input type="text" class="form-control" placeholder="Teléfono Del Establecimiento"  name="telefono_establecimiento"/>
        </div>
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
            <input type="text" class="form-control" placeholder="Fecha De Nacimiento" name="fecha_nacimiento"/>
        </div>
        <div class="form-row">
            <input type="text" class="form-control" placeholder="Telefono/Celular Participante" name="telefono_participante"/>
        </div>
        <div class="form-row">
            <input type="text" class="form-control" placeholder="Email Del Participante" name="mail_participante"/>
        </div>
        <h2>Genero</h2>
		<div class="all"><input type="radio"  name="genero" value="masculino" checked/><label> &nbsp Masculino</label> </div>
        <div class="all"><input type="radio" name="genero" value="femenino"/><label> &nbsp Femenino</label></div>
		<h2>Categoria</h2>
		<div class="all"><input type="radio" name="categoria" value="basicos" checked/><label> &nbsp Basicos</label> </div>
        <div class="all"><input type="radio" name="categoria"value="diversificado"/><label> &nbsp Diversificado</label></div>
        <h2> Rama </h2>
		<div class="all"><input type="radio" name="rama" value="caricatura" checked/><label> &nbsp Caricatura</label></div>
		<div class="all"><input type="radio" name="rama" value="retrato"/><label> &nbsp Retrato</label></div>
		<select class="form-control" id="one" name="retrato">
			 <option id="vacio1" name="subr"> ... </option>
		  	 <option value="lapiz">Lapiz </option>
		 	 <option value="carboncillo" >Carboncillo </option>
		</select>
		<div class="all"><input type="radio" name="rama" value="pintura"/><label> &nbsp Pintura</label></div>
		<select id="two" class="form-control" style="" name="subr">
		 	 <option id="vacio2"> ... </option>
		  	 <option value="b/n" >Blanco y Negro </option>
		 	 <option value="color">Color </option>
		</select>
        <div class="form-row">
            <input type="submit" class="form-control" />
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
        <!-- Aqui se envia el formulario -->
    </div>