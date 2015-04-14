 <!-- Pie de pagina -->

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