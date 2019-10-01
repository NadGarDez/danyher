
var accionadores= new Array();//array que llevara un valor boleano por tantas categorias como se almacenen,
							//true si esta activada la categoria, false si no lo esta
var intervalo=null;
//mostrarProductosAjax();						
crearAccionadores();
controlMain();
preloader();
setInterval(rollover,5000);
var angulo=0;//variable necesaria para el preloader

var dirImagenes=["http://localhost/painas/DanyHer/imagenes/ciudad3.jpg","http://localhost/painas/DanyHer/imagenes/paisaje.jpg","http://localhost/painas/DanyHer/imagenes/paisaje2.jpg"];


function rollover(){
			var portada=document.getElementById("portada").src;
			for(var i=0;i<3;i++){
				if(portada=="http://localhost/painas/DanyHer/"){
					document.getElementById("portada").src=dirImagenes[0];
					break;
				}
				if((i<=1)&&(portada==dirImagenes[i])){
					
					document.getElementById("portada").src=dirImagenes[i+1];
					
					break;
				}
				
				if((i==2)&&(portada==dirImagenes[i])){
					
					document.getElementById("portada").src=dirImagenes[0];
					
					break;
				}
	
			}
			fadein();
			setTimeout(fadeout,4000);
			
		}
			
function fadein(){
			var elemento= document.getElementById("portada");
			elemento.style.opacity=0;
			var opacidad=0;
			
			var intervalo=setInterval(function(){
							opacidad=opacidad+0.10;
							elemento.style.opacity=opacidad;
							if(opacidad>1){
								elemento.style.opacity=1;
								clearInterval(intervalo);
							}
						
						},100);
		}
		
		function fadeout(){
			var elemento= document.getElementById("portada");
			elemento.style.opacity=1;
			var opacidad=1;
			
			var intervalo=setInterval(function(){
							opacidad=opacidad-0.10;
							elemento.style.opacity=opacidad;
							if(opacidad<0){
								elemento.style.opacity=0;
								clearInterval(intervalo);
							}
						
						},100);
		
		
		}			
			
			
			
function crearAccionadores(){//la funcion recorre todos los elementos con la clase .categoria. al principio todos
	
	var elementos= document.getElementsByClassName("categoria");						         //son true			
	for(var i=0;i<elementos.length;i++){
		accionadores.push();
		accionadores[i]=true;
	}
}

function controlMain(){
	var elemento=document.getElementById('body');
	var elemento2=document.getElementById('main');
	var limite=100*elemento.offsetHeight/100;
	if(elemento2.offsetHeight<=limite){
		elemento2.style.height=limite+"px";
	}
	else{
		elemento2.style.height="auto";
	}
}
					
function accionadorCategoria(index,categoria,contenedor){//FUNCION PARA ELEJIR LA ACCION SEGUN EL CASO
	var contenedorActuar=document.getElementById(contenedor);
	var categoria=document.getElementById(categoria);
	while(true){
		if(accionadores[index]==false){//SI ES FALSO, ABRIMOS
			contenedorActuar.style.display="block";
			accionadores[index]=true;
			categoria.style.height="auto";
			controlMain();
			break;
		}
					
		if(accionadores[index]==true){//SI ES VERDADERO, CERRAMOS
			contenedorActuar.style.display="none";
			accionadores[index]=false;
			categoria.style.height="auto";
			controlMain();
			break;
		}
					
	}
}

function mostrarProductosAjax(){			
	//peticion ajax
	//creando el objeto http request
	if (window.XMLHttpRequest) { // Si exite el objeto XMLHttpRequest//Mozilla, Safari, ...
		http_request = new XMLHttpRequest();
	} else if (window.ActiveXObject) {//Si existe el objeto ActiveXObject // IE
		http_request = new ActiveXObject("Microsoft.XMLHTTP");
	}
			
	http_request.onreadystatechange= function(){
		if (http_request.readyState == 4) {
		// todo va bien, respuesta recibida
			if (http_request.status == 200) {//el codigo 200 quiere decir “consulta sin fallas”
				alert(this.responseText);
				document.getElementById("main").innerHTML+= this.responseText;
				
			} else {
				// hubo algún problema con la petición,
				// por ejemplo código de respuesta 404 (Archivo no encontrado)
				// o 500 (Internal Server Error)
                  }
		} 

	}
				
	http_request.open("GET","php/mostrar_articulos.php", true);
	http_request.send();
							
}

function mostrar_campo_de_busqueda(){

	var elementos= document.getElementsByClassName("categoria");
	var elemento2= document.getElementById("resultados_busqueda");
	for(var i=0;i<elementos.length;i++){
		elementos[i].style.display="none";
	}
	elemento2.style.display="block";
	
	if(intervalo==null){
		intervalo=setInterval(hola,30);
	};
	
	
}

function ocultar_campo_de_busqueda(){
	var elementos= document.getElementsByClassName("categoria");
	for(var i=0;i<elementos.length;i++){
		elementos[i].style.display="block";
	}
	var elemento2= document.getElementById("resultados_busqueda");
	elemento2.style.display="none";
	clearInterval(intervalo);
	intervalo=null;
	
}

function hola(){
	angulo+=10;
	if(angulo==360){
		angulo=0;
	}
	var a= document.getElementById("preloader");  
	a.style.transform="rotate("+angulo+"deg)";
}

function preloader(){
	var contenedor=document.getElementById("main");
	var ancho=10*contenedor.offsetWidth/100;
	var marIz=contenedor.offsetWidth-ancho;
	marIz=marIz/2;
	var preloader=document.getElementById("preloader");
	preloader.style.width=ancho+"px";
	preloader.style.height=ancho+"px";
	preloader.style.marginLeft=marIz+"px";
}




	














	