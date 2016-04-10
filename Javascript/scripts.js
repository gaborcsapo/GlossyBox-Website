var list = [];
$(document).ready(function() {
	
	$('#add').click(function(){
		if (list.length == 0)
			$('#List').text("List of numbers: ");
		var number = Number($("#Number").val());
		$("#Number").val("");
		$('#List').append(number + "   ");
		list.push(number);
	});
	
	$('#calculate').click(function(){
		var sum = 0;
		for (var i in list) {
			if (list[i]%2 == 1)
				break;
			else
				sum += 1;
		}
		list = [];
		$('#Result').text("I counted " + sum + " numbers");		
	});
});