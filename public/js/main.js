//Leaflet
var Markers = [
	{x:"40.184822", y:"44.509730", popup:"Երևանի աշխատակազմ"},
	{x:"39.207909", y:"46.4047959", popup:"Սյունիքի մարզային ստորաբաժանում"},
	{x:"40.784404", y:"43.8053866", popup:"Շիրակի մարզային ստորաբաժանում"},
	{x:"40.354582", y:"45.1195619", popup:"Գեղարքունիքի մարզային ստորաբաժանում"},
	{x:"40.8895931", y:"45.1342821", popup:"Տավուշի մարզային ստորաբաժանում"}
]

if ($(window).width() <= 1270) {
	var map = L.map('map_sm').setView([40.18615679287163, 44.5149837585256], 10);
} 
else {
 	var map = L.map('map').setView([40.18615679287163, 44.5149837585256], 10);
}

L.tileLayer('http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}',{
  maxZoom: 20,
  subdomains:['mt0','mt1','mt2','mt3']
}).addTo(map);

var vectorIcon = L.icon({
  iconUrl: '../img/Vector.png',
  iconSize:     [32, 45],
  iconAnchor:   [10, 30],
  popupAnchor:  [5, -30]
});

for (let i of Markers) {
    L.marker([i.x, i.y], {icon: vectorIcon}).addTo(map).bindPopup(i.popup);
}

//Link redirects
if(window.location.href.includes('#')) {
	$('.custom_list_group_action').removeClass('active');
	$('.tab-pane').removeClass('show active');

	if(window.location.href.includes('apteryges')) {
		$('.apteryges-tab').addClass('active');
		$('#section4').addClass('show active');
	}
	else if(window.location.href.includes('advice')) {
		$('.advice-tab').addClass('active');
		$('#section6').addClass('show active');
	}
	else if(window.location.href.includes('international')) {
		$('.international-tab').addClass('active');
		$('#section5').addClass('show active');
	}
	else if(window.location.href.includes('opinion')) {
		$('.opinion-tab').addClass('active');
		$('#section6').addClass('show active');
	}
} 

//Functions
function dropDownFunction() {
  var x = document.getElementById("first");
  var rotated = document.getElementById('dropdown_rotate');
  if (x.style.display === "none") {
    x.style.display = "flex";
    rotated.style.transform = 'rotate(180deg)';
  } else {
    x.style.display = "none";
    rotated.style.transform = 'rotate(0)';
  }
}

function preferences() {
	$('.prefInvis').toggle('fast');
}

function toggle_search() {
	$('#search-form-sm').toggleClass('d-flex');
}

function hot_line_toggle() {
	$('.hot_line').css('display', 'none');
	$('.hot_line_new').fadeIn('fast');
}

function negative() {
	$('body').each(function () {
		$(this).toggleClass('negative');
	});
}

function black() {
	$('body').each(function () {
		$(this).toggleClass('black');
	});
}

function gray() {
	$('body').each(function () {
		$(this).toggleClass('gray');
	});
}

function zoom() {
	$('body').each(function () {
		$(this).toggleClass('zoom');
	});
}

function font_style() {
	$('body').each(function () {
		$(this).css('font-family', 'initial')
	});
}

function revert() {
	$('body').each(function () {
		$(this).removeClass('negative black gray zoom font_style');
	});
}
