$(document).ready(function () {
	if ($(window).width() >= 1300 && $(window).width() >= 1679) {
		$("#imgempresa").hover(function(){
			$(".fondo").css('display', 'block');
			$(".fondo").css('background', 'black');
			$(".fondo").css('width', '2112px');
			$(".fondo").css('height', '100%');
			$(".fondo").css('position', 'absolute');
			$(".fondo").css('opacity', '0.7');
			$(".fondo").css('margin-top', '-70px');
			$(".fondo").css('z-index', '100');
			// $("body").css('opacity', '0.5');
			$("body").css('z-index', '1 !important');
			$("body").css('position', 'relative');
			$(this).addClass("imgcoopred");
			$(this).removeClass("imgcoop");
			/*$(this).css('width','350px');
			$(this).css('margin','-20px 0px 0px -140px');
			$(this).css('opacity', '1');
			$(this).css('z-index', '1000 !important');
			$(this).css('position', 'absolute');*/
			$("#virtualCoop").css('width','410px');
			$("#fondo-modal").css('background','white');
		}, function(){
			$(".fondo").css('display', 'none');
			$(this).removeClass("imgcoopred");
			$(this).addClass("imgcoop");
			$(this).css('width','300px');
			$(this).css('margin','-20px 0px 0px 0px');
		});
	}

	if ($(window).width() >= 1680) {
		$("#imgempresa").hover(function(){
			$(this).addClass("imgcoopred");
			$(this).removeClass("imgcoop");
			/*$(this).css('width','500px');
			$(this).css('margin','-20px 0px 0px -140px');
			$("#virtualCoop").css('width','410px');
			$("#virtualCoop").css('z-index','0 !important');
			$("#virtualCoop").css('border-radius','48px 0 0 0');*/

		}, function(){
			$(this).removeClass("imgcoopred");
			$(this).addClass("imgcoop");
			$(this).css('width','400px');
			$(this).css('margin','-20px 0px 0px 0px');
		});
	}

	$("#next1").on('click', function(){
		$("#contenido1").hide();
		$("#contenido2").show();
	});

	$("#next2").on('click', function(){
		$("#contenido2").hide();
		$("#contenido3").show();
	});

	$("#next3").on('click', function(){
		$("#contenido3").hide();
		$("#contenido4").show();
	});

	$("#next4").on('click', function(){
		$("#contenido4").hide();
		$("#contenido5").show();
	});

	$("#next5").on('click', function(){
		$("#contenido5").hide();
		$("#contenido1").show();
		$("#nav-profile-tab").addClass("nav-item nav-link active");
		$("#nav-home-tab").removeClass("nav-item nav-link active");
		$("#nav-home-tab").addClass("nav-item nav-link");
		$("#nav-profile").addClass("tab-pane fade show active");
		$("#nav-home").removeClass("tab-pane fade show active");
		$("#nav-home").addClass("tab-pane fade");
		$("#nav-home-tab").css("color","white !important");
	});




	$("#previus2").on('click', function(){
		$("#contenido1").show();
		$("#contenido2").hide();
	});

	$("#previus3").on('click', function(){
		$("#contenido2").show();
		$("#contenido3").hide();
	});

	$("#previus4").on('click', function(){
		$("#contenido3").show();
		$("#contenido4").hide();
	});

	$("#previus5").on('click', function(){
		$("#contenido4").show();
		$("#contenido5").hide();
	});

	$("#next6").on('click', function(){
		$("#contenido6").hide();
		$("#contenido7").show();
	});

	$("#next7").on('click', function(){
		$("#contenido7").hide();
		$("#contenido8").show();
	});

	$("#next8").on('click', function(){
		$("#contenido8").hide();
		$("#contenido9").show();
	});

	$("#next9").on('click', function(){
		$("#contenido9").hide();
		$("#contenido10").show();
	});

	$("#next10").on('click', function(){
		$("#contenido10").hide();
		$("#contenido6").show();
		$("#nav-profile-tab").addClass("nav-item nav-link active");
		$("#nav-home-tab").removeClass("nav-item nav-link active");
		$("#nav-home-tab").addClass("nav-item nav-link");
		$("#nav-profile").addClass("tab-pane fade show active");
		$("#nav-home").removeClass("tab-pane fade show active");
		$("#nav-home").addClass("tab-pane fade");
		$("#nav-home-tab").css("color","white !important");
	});
	
	
		$("#nav-profile-tab1").addClass("nav-item nav-link active");
		$("#nav-home-tab1").removeClass("nav-item nav-link active");
		$("#nav-home-tab1").addClass("nav-item nav-link");
		$("#nav-profile1").addClass("tab-pane fade show active");
		$("#nav-home1").removeClass("tab-pane fade show active");
		$("#nav-home1").addClass("tab-pane fade");
		$("#nav-home-tab1").css("color","white !important");

		$("#nav-profile-tab2").addClass("nav-item nav-link active");
		$("#nav-home-tab2").removeClass("nav-item nav-link active");
		$("#nav-home-tab2").addClass("nav-item nav-link");
		$("#nav-profile2").addClass("tab-pane fade show active");
		$("#nav-home2").removeClass("tab-pane fade show active");
		$("#nav-home2").addClass("tab-pane fade");
		$("#nav-home-tab2").css("color","white !important");
	
});
