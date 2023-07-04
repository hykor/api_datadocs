<?php
defined('BASEPATH') or exit('No direct script access allowed');
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
	<!-- JavaScript -->
	<p id="loadData_g"></p>
	<br>

	<?php
	$json = file_get_contents('http://localhost:3000/users');
	$obj = json_decode($json);
	// print_r($obj);
	?>
	<center>
		<table style="width: 50%;">

			<thead>
				<th>id</th>
				<th>first_name</th>
				<th>last_name</th>
				<th>email</th>
			</thead>
			<?php foreach ($obj as $val) { ?>
				<tbody>
					<tr>
						<td><?php echo $val->id ?></td>
						<td><?php echo $val->first_name ?></td>
						<td><?php echo $val->last_name ?></td>
						<td><?php echo $val->email ?></td>
					</tr>
				</tbody>
			<?php } ?>
		</table>
	</center>
</body>


<script>
	// Method GET

	var require = new XMLHttpRequest();
	require.open('GET', 'https://api.github.com/users/hykor');
	require.send();
	require.onload = () => {
		console.log(require);
		if (require.status === 200) {
			// console.log(JSON.parse(require.response))
			var test = JSON.parse(require.response);

			document.getElementById("loadData_g").innerHTML = require.responseText;
			// let test = require.response;
			// console.log(test)
			// console.log(test.id,test.login,test.node_id,test.html_url)

			//  id_r = test.id
			//  login_r = test.login
			//  node_id_r = test.node_id
			//  html_url_r = test.html_url

			// console.log(test); 
			// console.log(test[0]);
			// console.log(test[0].name);
			// console.log(test.name);
			// console.log(test[1].name,test[1].email);
			// console.log(id_r)
			// console.log(login_r)
			// console.log(node_id_r)
			// console.log(html_url_r)

			let require_p = new XMLHttpRequest();
			require_p.open("POST", "http://localhost:3000/users");
			require_p.setRequestHeader("Content-Type", "application/json");
			let p_json = {
				"id": test.id,
				"first_name": test.login,
				"last_name": test.node_id,
				"email": test.html_url
			}
			console.log(p_json)
			let s_json = JSON.stringify(p_json)
			require_p.onload = () => console.log(require_p.responseText);
			require_p.send(s_json);


		} else {
			console.log(`error ${request.status} ${request.statusText}`);
		}
	}

	// Method POST
	// let require = new XMLHttpRequest();
	// require.open("POST", "http://localhost:3000/users");
	// require.setRequestHeader("Content-Type", "application/json");
	// let data = `{
	// 	"id": 13,
	// 	"first_name": "test",
	// 	"last_name": "test",
	// 	"email": "hildegard@hotmail.com"
	// }`
	// require.onload = () => console.log(require.responseText);
	// require.send(data);

	// // fetch('http://localhost:3000/users', {
	// fetch('https://api.github.com/users/hykor', {
	// 		method: 'GET',
	// 		headers: {
	// 			'Accept': 'application/json',
	// 			'Content-Type': 'application/json',
	// 			// 'DD-API-KEY': '#',
	// 			// 'DD-APPLICATION-KEY': '#'
	// 		}
	// 		// body: JSON.stringify({
	// 		// 	"id": 12
	// 		// })
	// 	})
	// 	.then(response => response.json())
	// 	.then(response => console.log(response))
	// .then(response => console.log(JSON.stringify(response)))

	// fetch(`https://famous-quotes4.p.rapidapi.com/random?category=all&count=2`, {
	// 		method: 'GET',
	// 		headers: {
	// 			'X-RapidAPI-Key': 'your-rapid-key',
	// 			'X-RapidAPI-Host': 'famous-quotes4.p.rapidapi.com'
	// 		}
	// 	})
	// 	.then(response => response.json())
	// 	.then(data => console.log(data))
	// 	.catch(err => console.error(err));

	// let data = ""
	// fetch('https://api.github.com/users/hykor', { 
	// 	method: 'GET', 
	// 	headers: { 
	// 		'Accept': 'application/json', 
	// 		'Content-Type': 'application/json',
	// 	}
	// })
	// .then(response => response.json())
	// // .then(response => console.log(response))
	// .then(data => console.log(data.id,data.login,data.node_id,data.html_url))


	// // var data = {"id":data.id,"first_name":data.login,"last_name":data.node_id,"email":data.html_url}
	// console.log(data)

	// fetch('http://localhost:3000/users',{
	// 	method: 'POST',
	// 	headers: {
	// 		'Accept': 'application/json', 
	// 		'Content-Type': 'application/json',
	// 	},
	// 	body: data
	// 	// body: JSON.stringify({
	// 	// 	"id": 14,
	// 	// 	"first_name": "test",
	// 	// 	"last_name": "test",
	// 	// "email": "hildegard@hotmail.com"
	// 	// })
	// })
	// .then(response => console.log(response))
	// .then(response => console.log(JSON.stringify(response)))
</script>


</html>
