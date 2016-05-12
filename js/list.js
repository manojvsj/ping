$(document).ready(function(){
	$.ajax({
		url:'/ping/list.php',
		success: function(data,error){
			$('#list').html(data);
			updateStatus();
		},
		error: function(data,error) {
			console.log(data);
		}
	})
	function updateStatus() {
		var rows = $('.row_value');
		if(rows.length) {
			rows.each(function(index) {
				getStatus($(this),$(this).find('.host').text(),$(this).find('.port').text());
			});
		}
	}
	
	function getStatus($this,host,port) {
		$.ajax({
			url:'/ping/checkstatus.php',
			data:'host='+host+'&port='+port,
			success: function(data,error) {
				$this.find('.status').html(data);
			},
			error: function(data, error) {
				$this.find('.status').html('Error.. try again later');
			}
		});
	}
});