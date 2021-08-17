<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Bootstrap CSS -->
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

	<!--Font Awesome-->
	<link rel="stylesheet" href="<?= base_url() ?>/assets/fontawesome-free-5.15.2-web/css/all.css" />

	<!--CSS PROPIO-->
	<link rel="stylesheet" href="<?= base_url() ?>/assets/css/tiempo.css" />

	<title>El tiempo</title>
</head>

<body>
	<div class="container">
		<!-- HEADER -->
		
		<?php include 'public_header.php';  ?>

		<!-- /HEADER -->

		<!-- CONTENT -->
		<div class="row text-center my-5">
			<h2 class="display-6">El tiempo en <?php echo $weather->name; ?></h2>

			<div class="col-6 align-self-center mt-5">
				<img src="<?= base_url() ?>/assets/images/pamplona.jpg" class="img-thumbnail">
			</div>

			<div class="col-6 align-self-center">
				<div><?php echo $date_es; ?></div>
				<div><?php echo $time_es; ?></div>
				<div><?php echo ucwords($weather->weather[0]->description); ?></div>

				<div class="weather-forecast">
					<img src="http://openweathermap.org/img/w/<?php echo $weather->weather[0]->icon; ?>.png" class="weather-icon" />
				</div>

				<div><span class="max-temperature"><?php echo $weather->main->temp_max . "°C "; ?></span>
					<span class="min-temperature"><?php echo " " .  $weather->main->temp_min; ?>°C</span>
				</div>

				<div>Humedad: <?php echo $weather->main->humidity; ?> %</div>
				<div>Viento: <?php echo $weather->wind->speed; ?> km/h</div>
			</div>
		</div>

		<!-- CONTENT -->

		<hr />

		<!--FOOTER-->
		<?php include 'footer.php';  ?>
		<!--/FOOTER-->
	</div>

	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>

</html>