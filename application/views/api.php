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
		// Method GET
		// let require = new XMLHttpRequest();
		// require.open('GET','https://jsonplaceholder.typicode.com/users');
		// require.send();
		// require.onload = () => {
		// 	console.log(require);
		// 	if (require.status === 200) {
		// 		console.log(JSON.parse(require.response))
		// 	}else {
		// 		console.log(`error ${request.status} ${request.statusText}`);
		// 	}
		// } 

		// Method POST
		// let require = new XMLHttpRequest();
		// require.open("POST", "http://localhost:3000/users");
		// require.setRequestHeader("Content-Type", "application/json");
		// let data = `{
		// 	"id": 12,
		// 	"first_name": "test",
		// 	"last_name": "test",
		// 	"email": "hildegard@hotmail.com",
		// }`
		// require.onload = () => console.log(require.responseText);
		// require.send(data);

		fetch('http://localhost:3000/users', {
    	method: 'POST',
    	headers: {
    	    'Accept': 'application/json',
    	    'Content-Type': 'application/json'
    	},
    	body: JSON.stringify({ "id": 12 })
		})
   		.then(response => response.json())
   		.then(response => console.log(JSON.stringify(response)))

	</script>

</html>
