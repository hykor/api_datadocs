<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>javascript API Call</title>
</head>
<body>
	
</body>

 
	<script>
		let require = new XMLHttpRequest();
		require.open('GET','https://jsonplaceholder.typicode.com/users');
		require.send();
		require.onload = () => {
			console.log(require);
			if (require.status === 200) {
				console.log(JSON.parse(require.response))
			}else {
				console.log(`error ${request.status} ${request.statusText}`);
			}
		} 
	</script>

</html>
