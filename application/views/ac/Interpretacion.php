<!-- Certámen In -->
    <link rel="stylesheet" type="text/css" href="<? echo base_url('assets/css/bootstrap.css') ?>">
    <link rel="stylesheet" type="text/css" href="<? echo base_url('assets/css/formstyle.css') ?>">
	<body>
    <div class="cover top no-padding">
        <img class="cover" src="<? echo base_url('assets/images/arteycultura.jpg') ?>">
    </div>
    <div class="wrapper">
        <h1> Interpretacion de la Canción </h1>
        <hr />
        <h2> Bases del Concurso </h2>
        <p>a)	La presentación puede ser en cualquier idioma en las ramas propuestas.
        <p>b)	Cada participante deberá traer su pista o acompañamiento musical el día del evento o cantar a capela.
        <p>c)	Cada participante o participantes podrá interpretar como máximo una (1) canción de dos (2) minutos en la fase eliminatoria y una (1) canción completa en la final.</p> 
        <p>d)	Cada participante entregará a la Comisión de Audio su pista en el momento de su participación.  Ésta deberá ser recogida al finalizar el evento. </p> 
        <p>e)	La Comisión de Arte y Cultura no se hace responsable por pistas olvidadas o no recogidas al finalizar la interpretación.</p> 
        <p>f)	Para la rama individual se calificarán en orden de prioridades, los siguientes aspectos:
            <p> &nbsp&nbsp&nbsp&nbsp 1.	AFINACIÓN </p>    
            <p> &nbsp&nbsp&nbsp&nbsp 2.	METRORITMO (sincronía con pista o acompañamiento)</p> 
            <p> &nbsp&nbsp&nbsp&nbsp 3. GRADO DE DIFICULTAD BIEN PROYECTADO (técnica, amplitud de tesitura, etc.)</p> 
            <p> &nbsp&nbsp&nbsp&nbsp 4.	PROYECCIÓN ESCÉNICA</p>  
        </p> 
        <p>g)	Para la rama de dúos, tríos o cuartetos polifónicos se calificarán en orden de prioridades, los siguientes aspectos:
        <p>&nbsp&nbsp&nbsp&nbsp 1.	AFINACIÓN
        <p>&nbsp&nbsp&nbsp&nbsp 2.	GRADO DE DIFICULTAD BIEN PROYECTADO (tipo de polifonía, a capella, etc.)</p> 
        <p>&nbsp&nbsp&nbsp&nbsp 3.	EMPASTE (uniformidad vocal)</p> 
        <p>&nbsp&nbsp&nbsp&nbsp 4.	PROYECCIÓN ESCÉNICA</p> 
        </p> 
        <p>h)	Para la rama de cantautores está prohibido el plagio de composiciones musicales.</p> 
        <p>i)	En la Fase de Eliminatorias cada institución educativa puede participar con un máximo de tres (3) alumnos en la rama individual, y con un máximo de dos (2) agrupaciones para dúos, tríos y cuartetos.</p> 
        <p>c)	En la Fase Final (Semana Oficial) cada institución educativa puede participar con la cantidad de alumnos que hayan sido clasificados por parte del jurado calificador. </p> 
        <p>j)	El ganador oficial del primer lugar de Juventud 2014 podrá participar en la Semana Oficial sin competir en la Fase de Eliminatorias.</p> 

        <hr />
        <p> <b>Fecha Femenino</b> - 14 de Mayo</p>
        <p> <b>Fecha Mascultino</b> - 4 de Mayo</p>
        <hr/>
    </div> 
    <div class="form-wrapper inter">
        <div class="error-box">
            <div class="error-container">
                <p class="warning"><label class="strong big">Advertencias: </label></p>
                <?php echo validation_errors(); ?>
            </div>
        </div>
        <h1>Inscripción</h1><a href="<? echo site_url('iniciar/datos') ?>" class="data-purpose">¿Por qué necesitamos estos datos?</a>
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
        <div class="all"><input type="radio" name="id_concurso" value="24" checked id="ba"/><label for="ba"> &nbsp Individual</label> </div>
        <div class="all"><input type="radio" name="id_concurso"value="25" id="di"/><label for="di"> &nbsp Dúos</label></div>
        <div class="all"><input type="radio" name="id_concurso"value="26" id="di"/><label for="di"> &nbsp Tríos</label></div>
        <div class="all"><input type="radio" name="id_concurso"value="27" id="di"/><label for="di"> &nbsp Cuartetos Polifónicos                                Cuartetos 

             Polifónicos</label></div>

        <div class="form-row">
            <input type="checkbox" id="terminos" name="terminos" value="aceptar_terminos"> <label class="terms" for="terminos"> Doy fe de la veracidad de los datos y me comprometo a cumplir las bases del evento</label> <a href="#">(Ver bases)</a>
        </div>
        <div class="form-row">
            <input type="button" class="form-control btn_bottom" value="Descargar ficha" onClick="window.location = 'https://drive.google.com/file/d/0B_I-3D9xnhN8NUpnREg2RkNzOUk/view?usp=sharing'"/>
            <input type="submit" class="form-control send-art btn_bottom" />
        </div>
    </div>
</body>