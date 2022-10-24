loadDataStation().then(estaciones =>{
	estaciones.forEach(estacion =>{
		createEstacion(estacion)
	})
})

function createEstacion(data){
	const tpl = tpl__datos.content;
	const clon = tpl.cloneNode(true);
	clon.querySelector(".data__fecha").textContent = data.fecha;
	clon.querySelector("#data__temperatura__entero").textContent = data.temperatura.split(".")[0]+".";
	clon.querySelector("#data__temperatura__decimal").textContent = data.temperatura.split(".")[1];
	//clon.querySelector("#data__tempmax").textContent = data.tempmax;
	//clon.querySelector("#data__tempmin").textContent = data.tempmin;
	/*clon.querySelector("#data__sensacion__entero").textContent = data.sensacion.split(".")[0]+".";
	clon.querySelector("#data__sensacion__decimal").textContent = data.sensacion.split(".")[1];
	clon.querySelector("#data__sensamax").textContent = data.sensamax;
	clon.querySelector("#data__sensamin").textContent = data.sensamin;*/
	clon.querySelector(".data__humedad").textContent = data.humedad.split(".")[0]+"%";
	/*clon.querySelector(".data__viento").textContent = data.viento.split(".")[0]+"Km/H";
	clon.querySelector(".data__veleta").textContent = data.viento;*/
	clon.querySelector(".data__maxtemperatura").textContent = data.tempmax.split(".")[0]+"°C";
	/*clon.querySelector(".data__presion").textContent = data.presion.split(".")[0]+"hPa";
	clon.querySelector(".data__fuego").textContent = msgDePeligro(data.fwi);
	clon.querySelector("#ffmc").textContent = data.ffmc;
	clon.querySelector("#dmc").textContent = data.dmc;
	clon.querySelector("#dc").textContent = data.dc;
	clon.querySelector("#isi").textContent = data.isi;
	clon.querySelector("#bui").textContent = data.bui;
	clon.querySelector("#fwi").textContent = data.fwi;*/
	clon.querySelector("#data__humedad__entero").textContent = data.humedad.split(".")[0]+".";
	clon.querySelector("#data__humedad__decimal").textContent = data.humedad.split(".")[1];
	/*clon.querySelector("#data__viento__entero").textContent = data.viento.split(".")[0]+".";
	clon.querySelector("#data__viento__decimal").textContent = data.viento.split(".")[1];
	clon.querySelector("#data__maxviento").textContent = data.vientomax.split(".")[0]+"Km/H";
	clon.querySelector("#data__presion__entero").textContent = data.presion.split(".")[0]+".";
	clon.querySelector("#data__presion__decimal").textContent = data.presion.split(".")[1];*/
	listado.appendChild(clon);
}

async function loadDataStation(){ 
	const response = await fetch("https://mattprofe.com.ar/alumno/3765/app-estacion/api/estacion/info/"+chipid.textContent+"/1");

	const data = await response.json();
	return data;
}

const MAX_DATOS = 7;
const INTERVAL_REFRESH = 10000;

let botones = [
	["temperatura"],

	["fuego"],
	["humedad"],
	["viento"],
	["presion"]
]

function verTemperatura(){
	botones.forEach(function(botones, i){
		if (botones[0]=='temperatura'){
			document.querySelector(".panel-"+botones[0]).setAttribute("style","display: grid")
		} else {
			document.querySelector(".panel-"+botones[0]).setAttribute("style","display: none")
		}
	})
}

function verFuego(){
	botones.forEach(function(botones, i){
		if (botones[0]=='fuego'){
			document.querySelector(".panel-"+botones[0]).setAttribute("style","display: grid")
		} else {
			document.querySelector(".panel-"+botones[0]).setAttribute("style","display: none")
		}
	})
}

function verHumedad(){
	botones.forEach(function(botones, i){
		if (botones[0]=='humedad'){
			document.querySelector(".panel-"+botones[0]).setAttribute("style","display: grid")
		} else {
			document.querySelector(".panel-"+botones[0]).setAttribute("style","display: none")
		}
	})
}

function verViento(){
	botones.forEach(function(botones, i){
		if (botones[0]=='viento'){
			document.querySelector(".panel-"+botones[0]).setAttribute("style","display: grid")
		} else {
			document.querySelector(".panel-"+botones[0]).setAttribute("style","display: none")
		}
	})
}

function verPresion(){
	botones.forEach(function(botones, i){
		if (botones[0]=='presion'){
			document.querySelector(".panel-"+botones[0]).setAttribute("style","display: grid")
		} else {
			document.querySelector(".panel-"+botones[0]).setAttribute("style","display: none")
		}
	})

}

function msgDePeligro(fwi){
	let fwiFloat = parseFloat(fwi)
	if(fwiFloat>=50){
		return "Extremo"
	}else{
		if(fwiFloat>=38){
			return "Muy alto"
		}else{
			if(fwiFloat>=21.3){
				return "Alto"
			}else{
				if(fwiFloat>=11.2){
					return "Moderado"
				}else{
					if(fwiFloat>=5.2){
						return "Bajo"
					}else{
						return "Muy bajo"
					}
				}
			}
		}
	}
}