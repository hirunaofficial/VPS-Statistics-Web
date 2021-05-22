<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>VPS Statistics Web</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.7/css/mdb.min.css" />
	</head>
	<body style="background-color:black;">
		<div class="container-fluid py-2">
			<div class="row">
				<div class="col">
					<center><div class="alert alert-dark" role="alert" id="general_info">VPS Statistics Web</div></center>
					<div align="center" class="card-header alert-dark">
							<?php echo php_uname(); ?>
						</div>
					<section class="alert alert-light" id="mainchart"></section>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="card" id="cpu">
						<div class="card-header alert-dark">
							System Information
						</div>
						<ul class="list-group list-group-flush">
							<li class="list-group-item">OS: <?php system("uname -s"); ?></li>
							<li class="list-group-item">Host Name: <?php system("uname -n"); ?></li>
							<li class="list-group-item">Relese Name: <?php system("uname -r"); ?></li>
							<li class="list-group-item">Version Name: <?php system("uname -v"); ?></li>
							<li class="list-group-item">Machine Type: <?php system("uname -m"); ?></li>
							<li class="list-group-item">Up Time: <?php system("uptime"); ?></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card" id="cpu2">
						<div class="card-header alert-dark">
							CPU Information
						</div>
						<ul class="list-group list-group-flush">
							<li class="list-group-item"><?php system("cat /proc/cpuinfo | grep \"model name\\|processor\""); ?></li>
						</ul>
						<div class="card-body">
							<canvas id="doughnut-cpu"></canvas>
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="card" id="ram">
						<div class="card-header alert-dark">
							RAM Usage
						</div>
						<ul class="list-group list-group-flush">
							<li class="list-group-item">Usage: <span class="usage">0</span></li>
							<li class="list-group-item">Total: <span class="total">0</span> GB</li>
							<li class="list-group-item">Free: <span class="free">0</span> GB</li>
						</ul>
						<div class="card-body">
							<canvas id="doughnut-ram"></canvas>
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="card" id="hdd">
						<div class="card-header alert-dark">
							HDD Usage
						</div>
						<ul class="list-group list-group-flush">
							<li class="list-group-item">Usage: <span class="usage">0</span> GB</li>
							<li class="list-group-item">Total: <span class="total">0</span> GB</li>
							<li class="list-group-item">Free: <span class="free">0</span> GB</li>
						</ul>
						<div class="card-body">
							<canvas id="doughnut-hdd"></canvas>
						</div>
					</div>
				</div>
		</div>	
		<br>
		<div class="row">
				<div class="col">
					<div align="center" class="card-header alert-dark">
							&copy; Copyright <?php echo date("Y"); ?> <a href="https://github.com/hirunaofficial/VPS-Statistics-Web" target="_blank">VPS Statistics Web</a> | Created By <a href="http://hirunaofficial.github.io/" target="_blank">GD Hiruna</a>
						</div>
				</div>
		</div>
		<script> 
		document.addEventListener('contextmenu', event=> event.preventDefault()); 
		document.onkeydown = function(e) { 
		if(event.keyCode == 123) { 
		return false; 
		} 
		if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){ 
		return false; 
		} 
		if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){ 
		return false; 
		} 
		if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){ 
		return false; 
		} 
		} 
		</script>

		<script type="text/JavaScript">
		//VPS Statistics Web
		function killCopy(e){
		return false
		}
		function reEnable(){
		return true
		}
		document.onselectstart=new Function ("return false")
		if (window.sidebar){
		document.onmousedown=killCopy
		document.onclick=reEnable
		}
		</script>
		
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.7/js/mdb.min.js"></script>
		<script src="https://code.highcharts.com/stock/highstock.js"></script>
		<script type="text/javascript" src="main.js"></script>
	</body>
</html>