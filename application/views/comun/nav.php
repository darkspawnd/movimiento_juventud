<body>
    <header> 
    <div class="header-bg"> </div>
        <div class="header-wrapper">
        <div class="logo-header"> <img src="<? echo base_url('assets/images/logo-header_w.png') ?>"/> </div>
        <a href="<? echo site_url('iniciar/menu') ?>"><div class="inscribete"> INSCRIBETE </div></a>
            <div class="header-container">
                <div class="opt" id="redirect"> <a href="#first">Inicio</a> </div>
                <div class="opt formC"> <a href="#third">Historia</a> </div>
                <div class="opt formC"> <a href="#fourth">Concursos</a> </div>
            </div>
        </div>
        <script type="text/javascript"> 
            var url = document.URL;
            if(url != "<? echo site_url() ?>"){
                $(".formC").each(function () {
                    $(this).hide();
                });
                $("#redirect").find("a").attr("href","<? echo site_url() ?>");
                $("header").css({
                    background: "#1F1F1F",
                    top: "0"
                });
            }
        </script>
    </header>