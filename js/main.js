var CURRENT = 0;
var global_owl = $("#owl-demo");

function jumpTo(number){
    global_owl.trigger('owl.goTo', number);
}

function afterAction(){
	CURRENT = this.owl.currentItem;
	if(this.owl.currentItem == 0){
		
	} else if(this.owl.currentItem == 1){
	
	} else if(this.owl.currentItem == 2){

	} else if(this.owl.currentItem == 3){

    } else if(this.owl.currentItem == 4){

    }
	initialize_positions();
}

function initialize_positions(){
	if(CURRENT == 0){
		$('.main_title_bg').css({
				position:'absolute',
				top: ($(window).height() - $('.main_title_bg').outerHeight())/2.5
		});
		var offset_middle = $('.main_title_bg').offset().top+$('.main_title_bg').height();
		var offset_bottom = $('.footer_0').offset().top;
		$('.down_button_0 img').css({
				height: (offset_bottom-offset_middle)/3,
		});
		var offset_button = ((offset_middle+(offset_bottom-offset_middle)/2))-$('.down_button_0').height()/2;
		$('.down_button_0').css({
				top: offset_button,
				height: (offset_bottom-offset_middle)/3
		});
	}
}

$(document).ready(function() {
  $('.item').css('height',$(window).height());

    global_owl.owlCarousel({
 
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true,
			navigation : false,
			pagination: false,
			dots: false,
			afterAction : afterAction
 
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
 
  });
	$('#slick_partners').slick({
			dots: false,
			arrows: true,
			speed: 300,
			slidesToShow: 12,
			slidesToScroll: 3,
			responsive: [
				{
					breakpoint: 1450,
					settings: {
						slidesToShow: 10,
						slidesToScroll: 3,
						infinite: true
					}
				},
				{
					breakpoint: 1130,
					settings: {
						slidesToShow: 9,
						slidesToScroll: 3,
						infinite: true
					}
				},
				{
					breakpoint: 1000,
					settings: {
						slidesToShow: 7,
						slidesToScroll: 3,
						infinite: true
					}
				},
				{
					breakpoint: 900,
					settings: {
						slidesToShow: 7,
						slidesToScroll: 3,
						infinite: true
					}
				},
				{
					breakpoint: 800,
					settings: {
						slidesToShow: 6,
						slidesToScroll: 3,
						infinite: true
					}
				},
				{
					breakpoint: 700,
					settings: {
						slidesToShow: 4,
						slidesToScroll: 1,
						infinite: true
					}
				},
				{
					breakpoint: 500,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 1,
						infinite: true
					}
				},
				{
					breakpoint: 400,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 1,
						infinite: true
					}
				},
				{
					breakpoint: 300,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
						infinite: true
					}
				}
			]
		});
});

$( window ).resize(function() {
  $('.item').css('height',$(window).height());
	initialize_positions();
});
window.onload = function() {
	document.getElementById("loader").style.display="none";
	document.getElementById("page").style.opacity="100";
	initialize_positions();
};

//google maps in contacts


		 function initialize() {
	  var mapCanvas = document.getElementById('map-canvas');
	  var myLatlng = new google.maps.LatLng(54.645411, 25.199383);
	  var mapOptions = {
      center: new google.maps.LatLng(54.645411, 25.199383),
      zoom: 15,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
	 var map = new google.maps.Map(mapCanvas,mapOptions);
	 var marker = new google.maps.Marker({
    position: myLatlng,
    title:"Hello World!"
	});
		marker.setMap(map);
	 google.maps.event.addDomListener(window, 'load', initialize); 
 }
google.maps.event.addDomListener(window, 'load', initialize);

//change text on hover

  $(document).ready(function () {
		$(".img-responsive-01").mouseover(function () {
				$(".bottom-number").text("01");
				$(".bottom-text").text("Gavę techninę užduotį ir reikalingą informaciją iš kliento – ją analizuojame. Pasitelkdami vizualizaciją, pateikiame tik patį geriausią sprendimą aiškioje ir kiekvienam suprantamoje formoje. Gavę užtikrintą kliento pritarimą ir supratimą, pateikiame pilną techninį pasiūlymą.");
		});
		$(".img-responsive-02").mouseover(function () {
				$(".bottom-number").text("02");
				$(".bottom-text").text("Įveikus idėjų generavimo etapą, pradedame 3D modeliavimo darbus. Tai leidžia darbus atlikti greičiau, tiksliau, patikimiau. Darbų eigoje glaudžiai bendraujame su klientu ir tiekėjais, deriname iškilusias problemas ir įsitikinę, kad klientas yra patenkintas sprendimu - pateikiame galutinį projekto variantą.");
		});
		$(".img-responsive-03").mouseover(function () {
				$(".bottom-number").text("03");
				$(".bottom-text").text("Šiame projekto rengimo etape, ruošiame detalizuotus darbinius ir surinkimo brėžinius skirtus gamybai ir surinkimui. Priklausomai nuo projekto, rengiamos techninės, aptarnavimo, instruktavimo dokumentacijos. Visą informaciją pateikiame klientui patogiais formatais.");
		});
		$(".img-responsive-04").mouseover(function () {
				$(".bottom-number").text("04");
				$(".bottom-text").text("Tik projekto autorius geriausiai žino savo kūrinio gamybos subtilybes. Todėl siūlome gamybą patikėti mums. Esame sukūrę glaudžius santykius su gamintojais ir tiekėjais, kurie laikosi mūsų užduotų techninių reikalavimų, taip užtikriname, kad gamybos sąnaudos atitiks kainos ir kokybės santykį.");
		});
	});


$( ".image-div, .image-div1" ).click(function() {
  $( ".fadeMe, .content-2-popup" ).toggle();
});
	
$( ".fadeMe" ).click(function() {
  $( ".fadeMe, .content-2-popup" ).toggle();
});
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	





