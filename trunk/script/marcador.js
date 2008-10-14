$(document).ready(function(){
	$.ajax(
	{
		url: 'xml/partidos.xml',
		type: 'GET',
		dataType: 'xml',
		timeout: 1000,
		error: function(){ 
			alert("error cargando el xml");
		},
		success : function(xml){
					$('#marcador').append('<h1>MARCADOR</h1>');
					$('#marcador').append('<table id="tablamarcador">');
					// Aqui me lo cierra
					$(xml).find("partido").each(function(){
						var id_partido = $(this).attr('id');
						var local = $(this).find('equipolocal').text();
						var goleslocal = $(this).find('goleslocal').text();
						var golesvisitante = $(this).find('golesvisitante').text();
						var visitante = $(this).find('equipovisitante').text();
						//alert(id_partido); Por si luego quiero hacer un enlace al partido
						$('#tablamarcador').append('<tr><td class="ML">'+ local +'</td><td class="MGV">'+goleslocal+'</td><td class="MGV">'+ golesvisitante +'</td><td class="MV">'+visitante+'</td></tr>');
						}
					);
					//$('#marcador').append('</table>');
				}
	}
	);
});