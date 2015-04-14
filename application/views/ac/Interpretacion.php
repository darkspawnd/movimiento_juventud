<!-- Certamen In -->
    <link rel="stylesheet" type="text/css" href="http://localhost:8888/movimiento_juventud/assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="http://localhost:8888/movimiento_juventud/assets/css/formstyle.css">
	<body>
    <div class="cover top no-padding">
        <img class="cover" src="http://localhost:8888/movimiento_juventud/assets/images/arteycultura.jpg">
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
        <p> <b>Fecha</b> - 27 de Abril</p>
        <hr/>
    </div> 
    <div class="form-wrapper inter">
        <div class="error-box">
            <div class="error-container">
                <p class="warning"><label class="strong big">Advertencias: </label></p>
                <?php echo validation_errors(); ?>
            </div>
        </div>
		<h1>Inscripción</h1>
        <div class="form-row">
            <input type="text" class="form-control" placeholder="Nombre Del Establecimiento" name="nombre_establecimiento"/>
        </div>
	    <div class="form-row">
		  <input type="text"class="form-control" placeholder="Direecion" name="direccion_establecimiento"/>
        </div>  
        <div class="form-row">
		  <input type="text" class="form-control" placeholder="Telefono"  name="telefono_establecimiento"/>
        </div>
        <div class="form-row">
            <input type="text" class="form-control" placeholder="Nombre Del Grupo" name="nombre_grupo"/>
        </div>
        <div class="form-row">
            <input type="text" class="form-control" placeholder="Nombre Del Representante del Grupo" name="nombre_representante"/>
        </div>
        <div class="form-row">
            <input type="text" class="form-control" placeholder="Telefono/Celular" name="telefono_representante"/>
        </div>
        <div class="form-row">
            <input type="text" class="form-control" placeholder="Email" name="mail_representante"/>
        </div>
		<h2>Ramas</h2>
		<div class="all"><input type="radio" value="coreografico" name="categoria"/><label> &nbsp Individual</label> </div>
        <div class="all"><input type="radio" name="categoria"value="break"/><label> &nbsp Duos</label></div>
		<div class="all"><input type="radio" name="categoria" value="salsa"/><label> &nbsp Trios</label></div>
		<div class="all"><input type="radio" name="categoria" value="salsa"/><label> &nbsp Cuartetos Polifonicos</label></div>
        <div class="form-row">
            <input type="submit" class="form-control" />
        </div>
    </div>
</body>