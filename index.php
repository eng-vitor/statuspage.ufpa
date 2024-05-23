<?php
date_default_timezone_set('America/Belem');
$hora=date('H:i');
$dia=date('d/m/Y');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="description" content="Statuspage dos serviços para os acadêmicos da UFPA">
	  	<meta name="keywords" content="HTML, CSS, Javascript">
	  	<meta name="author" content="Vitor G. Dantas">
	  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>UFPA- Statuspage</title>
		<link rel="icon" type="image/ico" href="src/logoicon.png">
		<link rel="stylesheet" href="styles/styles.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	</head>
	<body>
		<center>
		<div class="menutop" align="center">
			<a href="" id="campis" data-bs-toggle="dropdown" aria-expanded="false" style="color:white">
	    		<i class="bi bi-arrow-repeat"></i> Portal dos Campus <i class="bi bi-building"></i>
	  		</a>
	 		<ul class="dropdown-menu" aria-labelledby="dLabel">
	 			<li><a href="https://www.cubt.ufpa.br/" target="target" style="color:#27ae60">Abaetetuba</a></li>
	 			<li><a href="http://altamira.ufpa.br/" target="target" style="color:#27ae60">Altamira</a></li>
	 			<li><a href="http://campusananindeua.ufpa.br/" target="target" style="color:#27ae60">Ananindeua</a></li>
	 			<li><a href="https://portal.ufpa.br/" target="target" style="color:#27ae60">Belém</a></li>
	 			<li><a href="https://www.campusbraganca.ufpa.br/" target="target" style="color:#27ae60">Bragança</a></li>
	 			<li><a href="http://www.campusbreves.ufpa.br/" target="target" style="color:#27ae60">Breves</a></li>
	 			<li><a href="http://www.campuscameta.ufpa.br/" target="target" style="color:#27ae60">Cametá</a></li>
	 			<li><a href="http://campuscapanema.ufpa.br/index.php/en/" target="target" style="color:#27ae60">Capanema</a></li>
	 			<li><a href="https://campuscastanhal.ufpa.br/" target="target" style="color:#27ae60">Castanhal</a></li>
	 			<li><a href="https://salinopolis.ufpa.br/" target="target" style="color:#27ae60">Salinópolis</a></li>
	 			<li><a href="https://soure.ufpa.br/" target="target" style="color:#27ae60">Soure</a></li>
	 			<li><a href="https://www.camtuc.ufpa.br/" target="target" style="color:#27ae60">Tucuruí</a></li>
	 		</ul>
			<a href="https://portal.ufpa.br/" style="color:white"><i class="bi bi-bank"></i> Portal da UFPA</a>
			<span id="horadia"><i class="bi bi-alarm-fill"></i>
				<?php echo $hora;?> 
				de <i class='bi bi-calendar-event-fill'></i>
				<?php echo $dia;?>
			</span>
		</div>
		<div class="top" align="center">
			<h1>Statuspage Datacenter UFPA</h1>
			<h3>Página de status dos serviços para os alunos da UFPA!</h2>
		</div>
		<h1 id="maintitle"><i class="bi bi-activity"></i> Monitoramento do Datacenter</h1>
		<div class="dashboard">
			<p><span id="itemtitle" style="color: #fbc531">Ainda não funcional devido não ter o protocolo ICMP habilitado nos hosts</span>
			</p>
			<p><span id="itemtitle"><i class="bi bi-globe"></i> Backbone UFPA-RNP</span> <i class="bi bi-link-45deg"></i>ufpa-pa.bkb.rnp.br<span id="statusservicebkb">
			<i class="bi bi-check-circle"></i> Online - 100ms <i class="bi bi-reception-4">
			</i></span></p>
			<ul id="lists">
				<li><span id="itemtitle"><i class="bi bi-arrow-return-right"></i> <i class="bi bi-hdd-rack-fill"></i> Datacenter UFPA</span> <i class="bi bi-link-45deg"></i> host-200-239-10.ufpa.br<span id="statusservicehost"><i class="bi bi-check-circle"></i> Online - 100ms <i class="bi bi-reception-4"></i></span>
				</li>
			</ul>
			<div class="container" align="left">
					<div class="row">
				  		<div class="col">
				     		<span id="itemtitle"><i class="bi bi-arrow-return-right"></i> <i class="bi bi-server"></i> SIGAA</span> <i class="bi bi-link-45deg"></i> cupuacu.ufpa.br
				    	</div>
				    	<div class="col">
				     		<span id="statusservices"><i class="bi bi-check-circle"></i> Online - 100ms <i class="bi bi-reception-4"></i></span>
				    	</div>
					</div>
					<div class="row">
						<div class="col">
							<span id="itemtitle"><i class="bi bi-arrow-return-right"></i> <i class="bi bi-server"></i> SAGITTA</span> <i class="bi bi-link-45deg"></i> carimbo.ufpa.br
				  		</div>
				  		<div class="col">
				  			<span id="statusservices"><i class="bi bi-check-circle"></i> Online - 100ms <i class="bi bi-reception-4"></i></span>
				  		</div>
					</div>
					<div class="row">
						<div class="col">
							<span id="itemtitle"><i class="bi bi-arrow-return-right"></i> <i class="bi bi-server"></i> COC</span> <i class="bi bi-link-45deg"></i> carimbo.ufpa.br
						</div>
						<div class="col">
							<span id="statusservices"><i class="bi bi-check-circle"></i> Online - 100ms <i class="bi bi-reception-4"></i></span>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<span id="itemtitle"><i class="bi bi-arrow-return-right"></i> <i class="bi bi-server"></i> SIGAEST</span> <i class="bi bi-link-45deg"></i> aveiro.ufpa.br
						</div>
						<div class="col">
							<span id="statusservices"><i class="bi bi-check-circle"></i> Online - 100ms <i class="bi bi-reception-4"></i></span>
						</div>
					</div>
			</div>
		</div>
		<footer>
			<div class="container">
				<div class="row">
				    <div class="col">
				      	<h3>Statuspage.ufpa</h3>
				      	<p><a href="" target="blank" id="socialpage"><i class="bi bi-twitter"></i> O SIGAA caiu hoje?</a></p>
				    </div>
					<div class="col">
						<h3><i class="bi bi-terminal-fill"></i> Desenvolvedor</h3>
						<p>	
							<a href="https://twitter.com/vi_Throl" target="blank" id="socialtt"><i class="bi bi-twitter"></i></a>
							<a href="https://instagram.com/vithorbiel" target="blank" id="socialinsta"><i class="bi bi-instagram"></i></a>
							<a href="https://github.com/r0t1v" target="blank" id="socialgit"><i class="bi bi-github"></i></a>
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<p>Desenvolvido pelo acadêmico de Engenharia de Computação <a href="https://github.com/r0t1v" target="blank" style="text-decoration-line: none">Vitor Gabriel</a>.<br>Todos os direitos reservados 2022.</p>
					</div>
				</div>
			</div>
		</footer>
		</center>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	</body>
</html>