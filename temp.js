$("#button").click=function()
{
	var data = new FormData($('#team')[0]);
 
		$.ajax({
			type:"GET",
			url:"inser.php",
			data:data,
			contentType: false,
            cache: false,
            processData: false,
			success:function(dta)
			{
				alert(dta);
			}
		});
 
}
}

$("#button1").click=function()
{
	var data = new FormData($('#team1')[0]);
 
		$.ajax({
			type:"GET",
			url:"inser.php",
			data:data,
			contentType: false,
            cache: false,
            processData: false,
			success:function(dta)
			{
				alert(dta);
			}
		});
 
}
}