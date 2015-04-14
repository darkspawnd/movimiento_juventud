<!-- Formulario Coros -->
    <link rel="stylesheet" type="text/css" href="<? echo base_url('assets/css/bootstrap.css') ?>">
    <link rel="stylesheet" type="text/css" href="<? echo base_url('assets/css/formstyle.css') ?>">
	<body>
    <div class="cover top no-padding">
        <img class="cover" src="<? echo base_url('assets/images/arteycultura.jpg') ?>">
    </div>
    <form method="post" accept-charset="utf-8" action="<? echo site_url('concurso/corossubmit') ?>"/>
    <div class="form-wrapper">
        <?php echo validation_errors('<div class="error-box"><div class="error-container">-', '</div></div>'); ?>
        <script type="application/javascript">
            if($(".error-box").length > 0){
                var boxes = document.getElementsByClassName("error-box");
                boxes[boxes.length - 1].style.paddingBottom = "20px";
            }
        </script>
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
</body>