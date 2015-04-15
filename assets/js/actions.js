window.onload = function () {

    $(".priest-photo").css("height",$(".priest-photo").width());
    video();
    scrollToSection();
    playMusic();
    changeImage();
    $(window).resize(function () {
        video();
    });
    logoHome();
}

$(window).scroll(function () {
	changeNavState();
});

function changeNavState() {
	if($(window).scrollTop() > ($(window).height()/3)){
		$(".header-bg").stop().animate({
			opacity: 1
		});
	}else{
		$(".header-bg").stop().animate({
			opacity: 0
		});
	}
}

function video() {
	var h = $(window).height();
	var w = $(window).width();
	if(w > h){
        $(".home-video").css("width","100vw");
		$(".home-video").css("width","auto");
    }else{
        $(".home-video").css("width","auto");
		$(".home-video").css("width","100vh");
    }
}

function changeImage() {
    $(".opt-concurso").mouseenter(function () {
        var sr = $(this).find("img").attr("src");
        var sour = sr.substring(0, sr.length - 4);
        $(this).find("img").attr("src",sour+"i.jpg");
    }); 
    $(".opt-concurso").mouseleave(function () {
        var sr = $(this).find("img").attr("src");
        var sour = sr.substring(0, sr.length - 5);
        $(this).find("img").attr("src",sour+".jpg");
    });
}


function scrollToSection() {
	$(".opt > a").click(function () {
		var place = $(this).attr("href");
		var to = place.substring(1,place.length);
		$("html, body").animate({
			scrollTop: $("."+to).offset().top - 30
		});
		return false;
	});
}

function footerPos() {
    if(body.innerHeight <= window.innerHeight){
        $("footer").css({});
    }
}

function logoHome() {
    $(".logo-header").click(function () {
        window.location = "http://www.movimientojuventud.com.gt"
    });
}

function playMusic() {
    /*var song = new Audio();
    song.src = "<? echo base_url('assets/music/brother.mp3') ?>";
    song.play();*/
}