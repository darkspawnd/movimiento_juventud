<!-- Formulario Coros -->
    <link rel="stylesheet" type="text/css" href="http://localhost:8888/movimiento_juventud/assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="http://localhost:8888/movimiento_juventud/assets/css/formstyle.css">
	<body>
    <div class="cover top no-padding">
        <img class="cover" src="http://localhost:8888/movimiento_juventud/assets/images/arteycultura.jpg">
    </div>
    <div class="form-wrapper">
		<h2>Inscripción</h2><a href="http://localhost:8888/movimiento_juventud/index.php/iniciar/datos" class="data-purpose">¿Por qué necesitamos estos datos?</a>
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
            <input type="text" class="form-control" placeholder="Cantidad de Integrantes" name="numero_integrantes" onkeypress="return event.charCode >= 48 && event.charCode <= 57"/>
        <div class="form-row">
            <input type="checkbox" id="terminos" name="terminos" value="aceptar_terminos"> <label class="terms" for="terminos"> Doy fe de la veracidad de los datos y me comprometo a cumplir las bases del evento</label> <a href="#">(Ver bases)</a>
        </div>
        <div class="form-row">
            <div class="form-row">
            <input type="button" class="form-control btn_bottom" value="Descargar ficha" onClick="window.location = 'https://drive.google.com/file/d/0B_I-3D9xnhN8VXFaYjgzWGdfdlU/view?usp=sharing'"/>
            <input type="submit" class="form-control send-art btn_bottom" />
        </div>
        </div>
    </div>
        </div>
</body>