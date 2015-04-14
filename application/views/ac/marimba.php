
	<link rel="stylesheet" type="text/css" href="<? echo base_url('assets/css/bootstrap.css') ?>">
    <link rel="stylesheet" type="text/css" href="<? echo base_url('assets/css/formstyle.css') ?>">
	<body>
    <div class="cover top no-padding">
        <img class="cover" src="<? echo base_url('assets/images/arteycultura.jpg') ?>">
    </div>
    <div class="wrapper">
        <h1>Marimba</h1>
        <h3> Bases del Concurso </h3>
        <p> a)	Cada institución educativa puede participar con un máximo de dos (2) conjuntos marimbístico. </p>
        <p> b)	Deberán de interpretar una obra de carácter obligatorio y  otra obra “ad libitum”.  La primera será la misma para todos los participantes, para lo cual las partituras serán entregadas el día de la inscripción, o se encontrarán en la web del Colegio Salesiano Don Bosco.  La segunda obra podrá ser cualquiera, siempre y cuando pertenezca específicamente al repertorio marimbístico guatemalteco, o bien una composición propia, realizada para su ejecución en marimba.</p>
        <p> c)	Cada grupo debe hacer una breve reseña de la pieza musical y del autor.</p>
        <p> d)	Las piezas musicales ejecutadas deberán ser originales, de autores guatemaltecos o de algún otro país.</p>
        <p> e)	Los directores de cada grupo marimbístico no pueden participar en la ejecución del instrumento.</p>
        <hr />
        <p> <b>Fecha</b> - 30 de Julio</p>
        <hr />
    </div>    
    <form method="post" accept-charset="utf-8" action="<? echo site_url('concurso/marimbasubmit') ?>"/>
    <div class="form-wrapper">
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
        <h3>Datos del Director:</h3>
        <div class="form-row">
            <input type="text" class="form-control" placeholder="Director de la Marimba" name="nombre_encargado"/>
        </div>
        <div class="form-row">
            <input type="text" class="form-control" placeholder="Teléfono/Celular del Director" name="telefono_encargado"/>
        </div>
        <div class="form-row">
            <input type="text" class="form-control" placeholder="Email del Director" name="mail_encargado"/>
        </div>
        <h3>Datos del Grupo:</h3>
        <div class="form-row">
            <input type="text" class="form-control" placeholder="Nombre De la Marimba" name="nombre_equipo"/>
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