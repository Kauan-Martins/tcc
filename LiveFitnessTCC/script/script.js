$(document).ready(function(){
	$('#select').on('change', function(){
		var select = '#'+$(this).val();
		$('#planos').children('div').hide();
		$('#planos').children(select).show();
	});
});


$(document).ready(function(){
	
});



