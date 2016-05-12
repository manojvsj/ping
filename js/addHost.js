
$( document ).ready(function() {
    $('#addHost').submit(function(e){
		e.preventDefault();
		var datastring = $("#addHost").serialize();
		console.log(datastring);
		$.ajax({
			type:'POST',
			url:'/ping/addHost.php',
			data:datastring,
			dataType: "json",
			success: function(data, error) {
				console.log(data);
				if(data!=0) {
					console.log('s');
					$('.success').removeClass('hide');
					$('.error').addClass('hide');
				} else {
					console.log('or');
					$('.success').addClass('hide');
					$('.error').removeClass('hide');
				}
			},
			error: function(data, error) {
			console.log('er');
				$('.success').addClass('hide');
				$('.error').removeClass('hide');
			}
		});
	});
	
	console.log( "ready!" );
});