<body>
    <header> 
    <div class="header-bg"> </div>
        <div class="header-wrapper">
        <div class="logo-header"> <img src="http://localhost:8888/movimiento_juventud/assets/images/logo-header_w.png"/> </div>
        <div class="inscribete"> INSCRIBETE </div>
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