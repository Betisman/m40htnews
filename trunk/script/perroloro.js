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
							$('#nombreequipo').html(nombre);
						}
					);
					$(xml).find("ArenaName").each(function(){
							var estadio = $(this).text();
							$('#nombreestadio').html(estadio);
						}
					)
					$(xml).find("LeagueLevelUnitName").each(function(){
							var liga = $(this).text();
							$('#division').html(liga);
						}
					)
					$(xml).find("NumberOfVictories").each(function(){
							var victorias = $(this).text();
							$('#NumberOfVictories').html(victorias);
						}
					)
					$(xml).find("NumberOfUndefeated").each(function(){
							var noperdidos = $(this).text();
							$('#NumberOfUndefeated').html(noperdidos);
						}
					)
				  }
	}
	);
});
