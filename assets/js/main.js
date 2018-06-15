$(document).ready(function(){
	
	init();

});

function init(){

	var ecole = window.location.hash.substr(1);

	$( window ).load(function() {
	  $('.main-content').addClass('loaded');
	});

	$('.menu li a').on('click', function(){
		if($(this).parents('li').find('.submenu').hasClass('active')){
			$(this).parents('li').find('.submenu').removeClass('active');
			$('.empty-submenu').removeClass('active');
		}
		else{
			$('.submenu').removeClass('active');
			$(this).parents('li').find('.submenu').addClass('active');
			$('.empty-submenu').addClass('active');
		}
	});

	$(".questions h3").on('click', function(){
		var id = $(this).attr('data-key');
		console.log(id);
		if(!$(this).hasClass('active')){
			$(".questions h3").removeClass('active');
			$(".response-wrapper").removeClass('active');
			$(this).addClass('active');
			$('.response-wrapper[data-key='+id+']').addClass('active');
		}
		
	});

	$(".rubrique h2").on('click', function(){
		var $rubriqueInner = $(this).find('.rubrique-inner');
		if(!$(this).parents('.rubrique').hasClass('active')){
			$(".rubrique").removeClass('active');
			$(this).parents('.rubrique').addClass('active');
			$('html,body').animate({
	      scrollTop: $(this).offset().top - 30},
	      800);
		}
		else{
			$(this).parents('.rubrique').removeClass('active');
			console.log($(this).parents('.rubrique').find('.rubrique-inner'));
			if($(this).parents('.rubrique').find('.rubrique-inner').hasClass('ecole-active')){
				$(this).parents('.rubrique').find('.rubrique-inner').removeClass('ecole-active');
			}
		}
		
	});


	if(ecole != ''){
		console.log(ecole);
		$('.menu-ecole li').removeClass('active');
		$('.menu-ecole li[data-id='+ecole+']').addClass('active');
		var url = $('.menu-ecole li[data-id='+ecole+']').attr("data-target");
		var $loadCont = $('.rubrique[data-key=1] .rubrique-inner');
		openPage(url, $loadCont);
	}

	$('.menu-ecole li').on('click', function(e){
		$('.menu-ecole li').removeClass('active');
		$(this).addClass('active');
		if(!$('.rubrique[data-key=1]').hasClass('active')){
			$('.rubrique').removeClass('active');
			$('.rubrique[data-key=1]').addClass('active');
		}
		var url = $(this).attr("data-target");
		var $loadCont = $('.rubrique[data-key=1] .rubrique-inner');

		openPage(url, $loadCont);
	});

	$('.carte-nom-ecole').on('click', function(e){
		// $('.menu-ecole li').removeClass('active');
		// $(this).addClass('active');
		var url = $(this).attr("data-target");
		var $loadCont = $('.rubrique[data-key=1] .rubrique-inner');
		openPage(url, $loadCont);
	});

	$('.menu-ecole li').mouseenter(function(){
		var id = $(this).attr('data-id');
		$('.carte-nom-ecole[data-id='+id+']').addClass('active');
	});

	$('.menu-ecole li').mouseleave(function(){
		var id = $(this).attr('data-id');
		$('.carte-nom-ecole[data-id='+id+']').removeClass('active');
	});

	$('.carte-nom-ecole').mouseenter(function(){
		var id = $(this).attr('data-id');
			$('.menu-ecole li[data-id='+id+']').addClass('active');
	});

	$('.carte-nom-ecole').mouseleave(function(){
		var id = $(this).attr('data-id');
		if((ecole != id)){
			$('.menu-ecole li[data-id='+id+']').removeClass('active');
		}
	});

	if($('body[data-template="error"]')){
		window.addEventListener("keydown", function(e) {
		    // space and arrow keys
		    if([32, 37, 38, 39, 40].indexOf(e.keyCode) > -1) {
		        e.preventDefault();
		    }
		}, false);
	}

	if($('body').attr('data-template') == 'error'){
		window.onload = function () {
			var pong = new Pong(document.getElementById('pong'));

			function resize () {
				var gameHeight = '500px';
				document.getElementById('pong').style.height = gameHeight;

				pong.resize();
			}

			resize();
			window.onresize = resize;

			pong.players.a.addControls({
				'up': 'up',
				'down': 'down',
			});

			pong.on('update', function () {
				if (pong.players.b.y < pong.balls[0].y) {
					pong.players.b.move(1);
				} else if (pong.players.b.y > pong.balls[0].y) {
					pong.players.b.move(-1);
				}
			});
		};
	}


}


function openPage(url, target){
  $.ajax({
   url: url,
    success: function(data) {
      target.html(data).addClass('active').addClass('ecole-active');
      $('.main-ecole').addClass('loaded');
      console.log(data);
    }
  });
}
