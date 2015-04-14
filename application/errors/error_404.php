<<!DOCTYPE html>
<html>
<head>
    <title> Movimiento Juventud 2015 </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="Movimiento organizado por jóvenes y para jóvenes que tiene como fin promover el arte, el deporte y la ciencia en los jóvenes guatemaltecos de hoy.">
    <meta name="Keywords" content="Colegio Salesiano Don Bosco de Guatemala Movimiento Juventud 2015">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="http://localhost:8888/movimiento_juventud/bower_components/normalize.css/normalize.css" type="text/css">
    <link href="http://localhost:8888/movimiento_juventud/assets/css/style.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="http://localhost:8888/movimiento_juventud/bower_components/jquery/dist/jquery.js"></script>
    <script type="text/javascript" src="http://localhost:8888/movimiento_juventud/bower_components/modernizr/modernizr.js"></script>
    <script type="text/javascript" src="http://localhost:8888/movimiento_juventud/bower_components/shufflejs/dist/jquery.shuffle.js"></script>
    <script type="text/javascript" src="http://localhost:8888/movimiento_juventud/assets/js/actions.js"></script>
</head>
<link rel="stylesheet" type="text/css" href="http://localhost:8888/movimiento_juventud/assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="http://localhost:8888/movimiento_juventud/assets/css/formstyle.css">
<body>
    <header> 
    <div class="header-bg"> </div>
        <div class="header-wrapper">
        <div class="logo-header"> <img src="http://localhost:8888/movimiento_juventud/assets/images/logo-header_w.png"/> </div>
        <a href="http://localhost:8888/movimiento_juventud/index.php/iniciar/menu"><div class="inscribete"> INSCRIBETE </div></a>
            <div class="header-container">
                <div class="opt" id="redirect"> <a href="#first">Inicio</a> </div>
                <div class="opt formC"> <a href="#third">Historia</a> </div>
                <div class="opt formC"> <a href="#fourth">Concursos</a> </div>
            </div>
        </div>
        <script type="text/javascript"> 
            var url = document.URL;
            if(url != "http://localhost:8888/movimiento_juventud/"){
                $(".formC").each(function () {
                    $(this).hide();
                });
                $("#redirect").find("a").attr("href","http://localhost:8888/movimiento_juventud/");
                $("header").css({
                    background: "#1F1F1F",
                    top: "0"
                });
            }
        </script>
    </header>
    <div class="wrapper error404">
        <h1 style="color: #FF3355;"> Error 404 </h1><hr />
        <p> <label class="strong"> Página no encontrada </label>
            <a href="../">Volver a la página principal</a>
        </p>
    </div>   
        <div class="form-wrapper"></div>

   <footer> Todos los derechos reservados. Colegio Salesiano Don Bosco Guatemala </footer>
	<script type="text/javascript">
	    
	    console.log($("body").height() );
	    console.log($(window).height());
	    
	    if($("body").height() > $(window).height()){
	        $("footer").css({
	            position: "relative",
	            bottom: 0,
	            left: 0
	        });   
	    }else{
	        $("footer").css({
	            position: "fixed",
	            bottom: 0,
	            left: 0
	        }); 
	    }
	</script>
</body>
</html>