<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/detalle.css">
	<title>Detalle</title>
</head>
<body>
	<div id="chipid">
		<?php
			echo $_GET['chipid'];
		?>
	</div>
	<template id=tpl__datos>
		<header>
			<a href="https://mattprofe.com.ar/alumno/3816/app-clima/panel.html" class="volver"><</a>
			<div class="seccion2">
				<div class="data__fecha"></div>
				<div class="data__ubicacion"></div>
			</div>
		</header>
		<div class="seccion3">
			<div class="boton" id="buttom-temperatura" onclick="verTemperatura()">
				<div class="icono termometro"></div>
				<div class="centrar data__maxtemperatura"></div>
			</div>
			<div class="boton" id="buttom-humedad" onclick="verHumedad()">
				<div class="icono agua"></div>
				<div class="centrar data__humedad"></div>
			</div>
			<!--<div class="boton" id="buttom-viento" onclick="verViento()">
				<div class="icono viento"></div>
				<div class="contenedor__viento">
					<div class="data__viento"></div>
					<div class="centrar data__veleta"></div>
				</div>
			</div>
			<div class="boton" id="buttom-presion" onclick="verPresion()">
				<div class="icono presion"></div>
				<div class="centrar data__presion"></div>
			</div>
			<div class="boton" id="buttom-fuego" onclick="verFuego()">
				<div class="icono fuego"></div>
				<div class="centrar data__fuego">---</div>
			</div>-->
		</div>

		<div class="contenedor">
			<div class="contenedor-paneles">	
				<div class="panel-temperatura">
					<div class="panel-col">
						<div class="col-items">
							<div class="item">
								<div class="item-title">
									TEMPERATURA
								</div>
							</div>
						</div>
						<div class="col-items">
							<div class="col-important bajar">
								<div class="important-val-int" id="data__temperatura__entero"> -- </div>
								<div class="important-detail">
									<div class="important-val-unit"> ºC </div>
		 							<div class="important-val-dec" id="data__temperatura__decimal"> -- </div>
								</div>
							</div>
							<!--<div class="panel-row">
								<div class="item">
		 							<div class="item-title">
		 								Máxima
		 							</div>
		 							<div class="item-value" id="data__tempmax">
		 								--ºC
		 							</div>
		 						</div>
		 						<div class="item">
		 							<div class="item-title">
		 								Mínima
		 							</div>
		 							<div class="item-value" id="data__tempmin">
		 								--ºC
		 							</div>
		 						</div>
							</div>-->
						</div>
					</div>
					<!--<div class="panel-col">
						<div class="col-items">	 							
	 						<div class="item">
	 							<div class="item-title">
	 								SENSACIÓN
	 							</div>
	 						</div>
	 					</div>
	 					<div class="col-items">
	 						<div class="col-important">
		 						<div class="important-val-int" id="data__sensacion__entero">
		 							--
		 						</div>
								<div class="important-detail">
									<div class="important-val-unit">
		 								ºC
		 							</div>
		 							<div class="important-val-dec" id="data__sensacion__decimal">
		 								--
		 							</div>
		 						</div> 							
		 					</div>
		 					<div class="panel-row">
			 					<div class="item">
		 							<div class="item-title">
		 								Máxima
		 							</div>
		 							<div class="item-value" id="data__sensamax">
		 								--ºC
		 							</div>
		 						</div>
		 						<div class="item">
		 							<div class="item-title">
		 								Mínima
		 							</div>
		 							<div class="item-value" id="data__sensamin">
		 								--ºC
		 							</div>
		 						</div>
		 					</div>
		 				</div>
					</div>-->
				</div>
				<div class="panel-fuego">
					<div class="panel-col">
						<div class="col-items">
							<div class="item">
								<div class="item-title centrar2">
									FUEGO
								</div>
							</div>
						</div>
						<div class="col-items">
							<div class="item bajar">
								<div class="item-title">
	 								FFMC
	 							</div>
	 							<div class="item-value" id="ffmc">
	 								--
	 							</div>
							</div>
							<div class="item">
	 							<div class="item-title">
	 								DMC
	 							</div>
	 							<div class="item-value" id="dmc">
	 								--
	 							</div>
	 						</div>
	 						<div class="item">
	 							<div class="item-title">
	 								DC
	 							</div>
	 							<div class="item-value" id="dc">
	 								--
	 							</div>
	 						</div>
						</div>
					</div>
					<div class="panel-col">
	 					<div class="col-items">
	 						<div class="item bajar">
	 							<div class="item-title">
	 								ISI
	 							</div>
	 							<div class="item-value" id="isi">
	 								--
	 							</div>
	 						</div>
	 						<div class="item">
	 							<div class="item-title">
	 								BUI
	 							</div>
	 							<div class="item-value" id="bui">
	 								--
	 							</div>
	 						</div>
	 						<div class="item">
	 							<div class="item-title">
	 								FWI
	 							</div>
	 							<div class="item-value" id="fwi">
	 								--
	 							</div>
	 						</div>
	 					</div>
	 				</div>
				</div>
				<div class="panel-humedad">
					<div class="panel-col">
						<div class="col-items">
							<div class="item">
								<div class="item-title centrar2">
									HUMEDAD
								</div>
							</div>
						</div>
	 					<div class="col-items">
	 						<div class="col-important bajar">
		 						<div class="important-val-int" id="data__humedad__entero">
		 							--
		 						</div>
								<div class="important-detail">
									<div class="important-val-unit">
		 								%
		 							</div>
		 							<div class="important-val-dec" id="data__humedad__decimal">
		 								--
		 							</div>	
		 						</div> 							
		 					</div>
	 					</div>
	 				</div>
				</div>
				<div class="panel-viento">
					<div class="panel-col">
	 					<div class="col-items">	 							
	 						<div class="item">
	 							<div class="item-title">
	 								VIENTO
	 							</div>
	 						</div>
	 					</div>	 						
	 					<div class="col-items">	 							
	 						<div class="col-important">
		 						<div class="important-val-int" id="data__viento__entero">
		 							--
		 						</div>
								<div class="important-detail">
									<div class="important-val-unit">
		 								Km/H
		 							</div>
		 							<div class="important-val-dec" id="data__viento__decimal">
		 								--
		 							</div>		 							
		 						</div> 							
		 					</div>		 					
			 				<div class="panel-row">
		 						<div class="item">
		 							<div class="item-title">
		 								Máximo
		 							</div>
		 							<div class="item-value" id="data__maxviento">
		 								--Km/H
		 							</div>
		 						</div>
							</div>
	 					</div>
	 				</div>
	 				<div class="panel-col">
						<div class="panel-row">
							<div style="display: flex; align-items: center; gap:5px; font-size: 18px;">
								<div id="data__veletaa">
									--
								</div>
							</div>
						</div>
	 				</div>
				</div>
				<div class="panel-presion">
					<div class="panel-col">
						<div class="col-items">
							<div class="item">
								<div class="item-title centrar2">
									PRESION
								</div>
							</div>
						</div>
	 					<div class="col-items bajar">
	 						<div class="col-important">
		 						<div class="important-val-int" id="data__presion__entero">
		 							--
		 						</div>
								<div class="important-detail">	
									<div class="important-val-unit">
		 								hPa
		 							</div>
		 							<div class="important-val-dec" id="data__presion__decimal">
		 								--
		 							</div>	
		 						</div> 							
		 					</div>
	 					</div>
	 				</div>
				</div>
			</div>
		</div>
	</template>
	<div id="listado"></div>
	<script type="text/javascript" src="js/detalle.js"></script>
</body>
</html>