$(document).ready(function() { 

	var btn_auto = document.getElementById('btn-u');

	btn_auto.addEventListener('click', function() {
	    alert('Hello world');
	}, false);


	$("#btn-auto").click(function() {
		console.log('aqui');
		$("#moto").addClass( "d-none" );
		$("#auto").addClass( "d-block" );
	});

	$("#btn-moto").click(function() {
	  	$("#auto").addClass( "d-none" );
	  	$("#moto").addClass( "d-block" );
	});

});