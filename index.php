<!DOCTYPE html>

<html lang=ko>

	<head>
		<meta charset=utf-8>
		<title>JAYPIPOST CLUB</title>
	</head>

	<style type="text/css">
	body {
		background-image: url('water_texture.jpg');
	}

	textarea {
		resize: none;
	}

	h3 {
		color: red;
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

	.in {
		border: 10px outset blue;
		padding: .5rem;
		display: inline-block;
		width:500px;
		text-align: center;
	}

	</style>

	<body>
		<div id="container">
			<span>
				<div class="in">
					<h1>JAYPIPOST CLUB</h1>
				</div>
				<br><br>

				<div class="in">
					<h3>Server Open Times: 09:00~21:00 SAT, SUN (UTC+9)</h3>
				</div>
				<br><br>
				
				<div class="in">
					<form action="process_create.php" method="POST">
						<p><input type="text" name="name" placeholder="Who?" /></p>
						<p><textarea name="post" rows="5" cols="47" placeholder="What's Happening?">
						</textarea></p>
						<input class="button" name="submit" type="submit" value="Upload!" />
					</form>
				</div>
				<br><br>

				<?php
	 			$conn = mysqli_connect('localhost', 'jaycho', 'dkssud1337@', 'db');
	 			$sql = "SELECT * FROM Posts ORDER BY id DESC";
	 			$result = mysqli_query($conn, $sql);

				while($row = mysqli_fetch_row($result)) {
					echo '<div class="in">';
	 				echo '<p><b>'.$row[2].'</b></p>';
					echo 'Written By <u>'.$row[1].'</u>';
					echo '</div>';
					echo '<br><br>';
	 			}
	 			?>
	</body>
</html>

