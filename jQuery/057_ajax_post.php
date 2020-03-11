<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style type="text/css">
	       .box3{
	       	background-color: lightgreen;
	       } 
	</style>
</head>
<body>

    	<form action="#">
    	        <input type="text">
	    </form>

	    <div id="text">Some text</div>

</body>
<script type="text/javascript" src="jquery3.4.1.js"></script>
</html>

<script type="text/javascript">
	
$(document).ready(function(){
	
	$('input').keyup(function(){
		let nm = $('input').val();
		console.log(nm);

		$.post('name.php', {
			name: nm
		},function(data, status){
			console.log(status);
			console.log(data);
		})
	});

});


</script>