$(function () {
	//Aqui vai todo nosso codigo de javascript.
	$("nav.mobile").click(function () {
		//O que vai acontecer quando clicarmos na nav.mobile!
		var listaMenu = $("nav.mobile ul");
		//Abrir menu atrav�s do fadein
		/*
		if(listaMenu.is(':hidden') == true){
			listaMenu.fadeIn();
		}
		else{
			listaMenu.fadeOut();
		}
		*/

		//Abrir ou fechar sem efeitos
		/*
		
		if(listaMenu.is(':hidden') == true){
			//listaMenu.show();
			listaMenu.css('display','block');
		}
		else{
			//listaMenu.hide();
			listaMenu.css('display','none');
		}
		*/

		if (listaMenu.is(":hidden") == true) {
			//fa fa-times
			//fa fa-bars
			//var icone =  $('.botao-menu-mobile i');
			var icone = $(".botao-menu-mobile").find("i");
			icone.removeClass("fa-bars");
			icone.addClass("fa-times");
			listaMenu.slideToggle();
		} else {
			var icone = $(".botao-menu-mobile").find("i");
			icone.removeClass("fa-times");
			icone.addClass("fa-bars");
			listaMenu.slideToggle();
		}
	});

	if ($("target").length > 0) {
		//O elemento existe, portanto precisamos dar o scroll em algum elemento.
		var elemento = "#" + $("target").attr("target");
		var divScroll = $(elemento).offset().top;
		$("html,body").animate({ scrollTop: divScroll }, 2000);
	}

	carregarDinamico();
	function carregarDinamico() {
		$("[realtime]").click(function () {
			var pagina = $(this).attr("realtime");
			$(".container-principal").hide();
			$(".container-principal").load(include_path + "pages/" + pagina + ".php");

			setTimeout(function () {
				initialize();
				addMarker(-27.609959, -48.576585, "", "Minha casa", undefined, false);
			}, 1000);

			$(".container-principal").fadeIn(1000);
			window.history.pushState("", "", pagina);

			return false;
		});
	}
});
