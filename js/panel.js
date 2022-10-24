	loadEstaciones().then(estaciones=>{
			estaciones.forEach(estacion=>{
				createEstacion(estacion)
			})
		})
		function createEstacion(data){
		const tpl=tpl__estacion.content;
		const clon=tpl.cloneNode(true);
		clon.querySelector('.card__title').textContent=data.apodo;
		clon.querySelector('.lugar').textContent=data.ubicacion;
		clon.querySelector('.visitas').textContent=data.visitas;
		clon.querySelector("a").href="detalle.php?chipid="+data.chipId;
		listado.appendChild(clon);
		}
		async function loadEstaciones(){
			const response = await fetch("https://mattprofe.com.ar/alumno/3816/app-clima/api2/estacion/listar");
			const data = await response.json();
			return data;
		}