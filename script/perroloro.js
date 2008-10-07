$(document).ready(function(){
	$.ajax(
	{
		url: 'xml/perroloro.xml',
		type: 'GET',
		dataType: 'xml',
		timeout: 1000,
		error: function(){ 
			alert("error cargando el xml");
		},
		success : function(xml){
					$(xml).find("TeamName").each(function(){
							var nombre = $(this).text();
							$('#nombreequipo').html('<h1>'+ nombre +'</h1>');
						}
					);
					$(xml).find("LeagueLevelUnitName").each(function(){
							var liga = $(this).text();
							$('#nombreequipo').append('<h2>'+ "Está en la liga "+ liga +'</h2>');
						}
					)
				  }
	}
	);
});