<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="../../tema5_jquery/jquery-3.4.1.min.js"></script>
</head>
<body>
	<h1>Empresa: </h1>
	<input type="text" name="nomEmpresa" id="empresaNom">
		<br>
	<div id="resultat"></div>
	
	<script type="text/javascript">
		$(function() {
			$('#empresaNom').keyup(function() {
				var empresa = $('#empresaNom').val();
				var link = "empreses.php?nomEmpresa=" + empresa;
				$.ajax({
					url: link,
                    method: "GET",
                    success: function(data, status) {
                    	if (!(empresa.length > 3)) {
                    		$('#resultat').html("");
                    	} else {
                    		$('#resultat').html(data);
                    	}
                    }
				});
			});
		});
	</script>
</body>
</html>