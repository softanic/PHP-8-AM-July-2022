<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

		<Script>
			function autosuggest(d)
			{
				$('#suggest').load('suggest.php?data='+d);
			}
			
		
		</script>
	</head>
	<body>
		<input type="text" id="data" onkeyup="autosuggest(this.value)">
		<div id="suggest">
			
		</div>
	</body>
</html>