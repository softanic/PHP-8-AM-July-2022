<html>
	<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

		<Script>
			function loadDist(state)
			{
				$('#district').load('ajax2.php?state='+state);
			}
			
			
			function demo(state)
			{
				//document.getElementById('output').innerHTML="welcome to softanic";
				//alert(state)
				var xhttp = new XMLHttpRequest();
				  xhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
					 document.getElementById("district").innerHTML = this.responseText;
					 //alert(this.responseText);
					}
				  };
				  xhttp.open("GET", "ajax2.php?state="+state, true);
				  xhttp.send();
								
				
			}
		</script>
	</head>
	<body>
		<?php
		$conn=mysqli_connect("localhost","root","","php_bca");
		$q="select distinct(state) from states_data";
		$res=mysqli_query($conn,$q);
		
		?>
		<select  id='state' onchange="loadDist(this.value)">
			<option>---select state----</option>
			<?php 
				while($state=mysqli_fetch_array($res))
				{
					print_r($state);
					echo "<option>". $state['state'] ."</option>";
				}
			
			?>
			
		</select>
		<select id="district">
		
		</select>
	</body>
</html>