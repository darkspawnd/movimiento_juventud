    <link rel="stylesheet" type="text/css" href="http://localhost:8888/movimiento_juventud/assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="http://localhost:8888/movimiento_juventud/assets/css/formstyle.css">
	<body> 
    <div class="cover top no-padding">
        <img class="cover" src="http://localhost:8888/movimiento_juventud/assets/images/arteycultura.jpg">
    </div>
    <div class="wrapper">
        <h1> Baile </h1>
        <h3> Bases del Concurso </h3>
        <p>a)	Podrá inscribirse un grupo por establecimiento educativo.</p>
        <p>b)	Cada grupo deberá entregar a la Comisión de Comunicación la grabación a usar durante su presentación, indicando el número de pista a utilizar y presentándola en USB.</p>
        <p>c)	Se permiten todos los ritmos, ponderándose la originalidad de la coreografía.</p>
        <p>d)	Quedan totalmente excluidos de este concurso los bailes eróticos y reñidos con la moral y las buenas costumbres.</p>
        <p>e)	El tiempo máximo de cada intervención en la Fase de Eliminatorias es de cinco (5) minutos y en la Fase Final (Semana Oficial) es de diez (10) minutos, quedando descalificados los grupos que se excedan a dicho tiempo.</p>
        <p>f)	El grupo ganador del primer lugar de Juventud 2014 está inscrito automáticamente para la Fase Final (Semana Oficial), sin necesidad de participar en la Fase de Eliminatorias.</p>
        <p>g)	El uso de pólvora está terminantemente prohibido de igual manera sustancias inflamables u objetos incandescentes.</p>
        <p>h)	El uso de vehículos como material de la presentación quedan terminantemente prohibidos.</p>
        <h3>Bases específicas:</h3>
           <p> * Cada grupo representante tendrá un mínimo de cinco (5) y un máximo de veinte (20) integrantes.</p>
        <hr />
        <p> <b>Fecha</b> - 20 de Mayo</p>
        <hr />
    </div> 
    <form method="post" accept-charset="utf-8" action="http://localhost:8888/movimiento_juventud/index.php/concurso/bailesubmit"/>
    <?php echo validation_errors(); ?>
    <div class="form-wrapper">
		<h2>Inscripción</h2>
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
            <input type="text" class="form-control" placeholder="Nombre Del Representante" name="nombre_encargado"/>
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
		<h3>Ramas</h3>
		<div class="all"><input type="radio" name="id_concurso"  id="r1" value="11" checked /><label for="r1"> &nbsp Baile Coreografico</label> </div>
        <div class="all"><input type="radio" name="id_concurso" id="r2" value="12"/><label for="r2"> &nbsp Break Dance</label></div>
		<div class="all"><input type="radio" name="id_concurso" id="r3" value="13"/><label for="r3"> &nbsp Salsa</label></div>
        <div class="form-row">
            <input type="checkbox" id="terminos" name="terminos" value="aceptar_terminos"> <label class="terms" for="terminos"> He leído y acepto los términos y condiciones </label> <a href="#">(Ver términos y condiciones)</a>
        </div>
        <div class="form-row">
           <input type="button" class="form-control btn_bottom" value="Descargar ficha" onclick="window.location ='https://drive.google.com/file/d/0B_I-3D9xnhN8WGR3RVhTX0NJVTA/view?usp=sharing'" />
            <input type="submit" class="form-control send-art btn_bottom" />
        </div>
    </div>
	</body>
