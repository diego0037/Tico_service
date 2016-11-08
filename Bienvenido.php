<!doctype html>
<html>
<head>
	<title>Bienvenido a Tico-Service</title>
	<meta name = "viewport" content = "user-scalable=no, width=device-width">
	<!-- <meta name=viewport content="width=device-width, initial-scale=1"> -->
<META HTTP-EQUIV="REFRESH" CONTENT="5;URL=Principal.html">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/modernizr.js" type="text/javascript"></script>
	<link rel="stylesheet" href="./material.min.css">



	<script>
		$(document).ready(function() {
			if(!Modernizr.meter){
				alert('Sorry your brower does not support HTML5 progress bar');
			} else {
				var progressbar = $('#progressbar'),
					max = progressbar.attr('max'),
					time = (1000/max)*5,
			        value = progressbar.val();

			    var loading = function() {
			        value += 1;
			        addValue = progressbar.val(value);

			        $('.progress-value').html(value + '%');

			        if (value == max) {
			            clearInterval(animate);
			        }
			    };

			    var animate = setInterval(function() {
			        loading();
			    }, time);
			};
		});
	</script>
</head>
<body>
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--4-col"></div>
			<div class="mdl-cell mdl-cell--4-col " >
					<img src="images/logo.png" alt="" id="moverImagen"/>
			</div>
			<div class="mdl-cell mdl-cell--4-col"></div>
		</div>

		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--4-col"></div>
			<div class="mdl-cell mdl-cell--4-col">
				<div class="Barra-wrapper html5-progress-bar">
					<div class="progress-bar-wrapper">
						<progress id="progressbar" value="0" max="100"></progress>
					</div>
				</div>
			</div>
			<div class="mdl-cell mdl-cell--4-col"></div>

		</div>

</body>
</html>
