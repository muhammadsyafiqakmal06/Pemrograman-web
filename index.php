<?php include("includes/config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Gallery</title>

	<link href="bootstrap.css" rel="stylesheet">
	<link href="custom.css" rel="stylesheet">
	</head>
<body>

	<?php include("includes/navbar.php"); ?>

	<div class="container body">
		<h1>Recent pictures</h1>
		<div class="gal">
			<?php
			$query = $koneksi->query("SELECT * FROM galeri ORDER BY id DESC") or die($koneksi->error);
			if($query->num_rows){
				while($row = $query->fetch_assoc()){
					echo '<a href="foto.php?id='.$row['id'].'"><img src="gallery/'.$row['nama'].'" alt=""></a>';
				}
			}
			?>
		</div>
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>
