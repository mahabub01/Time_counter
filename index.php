
<?php
header('Access-Control-Allow-Origin: *'); 
?>
<?php
session_start();

?>



<div id="response" style="font-size:30px;"></div>


<h1>Your Questions</h1>




<script type="text/javascript">
	
	var interval = setInterval(function(){
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.open("GET",'http://localhost:8012/timer/response.php',false);
		xmlhttp.send(null);
		result = 
		document.getElementById("response").innerHTML =xmlhttp.responseText;
		if(xmlhttp.responseText == "yes"){
			//console.log("done...");
			clearIn();
			window.location = "result.php";
		}

	},1000);
	
	
	function clearIn(){
    clearInterval(interval);
	}
</script>







