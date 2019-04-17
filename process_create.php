<!DOCTYPE HTML>

<html lang=ko>
	<head>
		<meta charset=utf-8>
		<title>UPLOADING</title>
	</head>

	<style type="text/css">
	body {
		background-image: url('water_texture.jpg');
	}

	#container {
		display:table;
		width:100%;
		height:100%;
		text-align:center;
	}

	#container span {
		display:table-cell;
		vertical-align:middle;
	}

	.button {
		background-color: #00008B;
		border: none;
		color: white;
		padding: 15px 64px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
	}	

	.in {
		border: 10px outset blue;
		padding: .5rem;
		display: inline-block;
		width: 500px;
		text-align: center;
	}
	</style>

	<body>
		<div id="container">
			<span>
				<div class="in">
					<?php
	
					$conn = mysqli_connect('localhost', 'jaycho', 'dkssud1337@','db');
					if($conn === false) {
						die("ERROR: Could not connect. " . mysqli_connect_error());
					}
		
					if(isset($_POST['submit'])) {
						$name = $_POST['name'];
						$post = $_POST['post'];
		
						$query = "INSERT INTO Posts(name, post) VALUES ('$name','$post')";
						$result = mysqli_query($conn, $query);

				
						if($result) {
							echo "<h2>INSERTED SUCCESSFULLY</h2>";
						}
						else {
							echo "<h2>FAILED TO INSERT</h2>";
						}
					}

					mysqli_close($conn);
					?>
					<a href=".." class="button">BACK</a>
				</div>
			</span>
		</div>
	</body>
</html>

