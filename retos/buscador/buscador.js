//array dond estan contenidos la pequeña base de datos donde buscara la heramienta
var arrayDeBuscador=["car", "cartouches", "carpet", "cartoonist", "carrot", "cared", "carton",
    "captain", "cartoon", "carter"];
//array donde se incluiran los resultados de la busqueda
var arrayResultante=[];
//array donde se incljuira los primeros tres elemtos del array resultante ordenados previamente alfabeticamente
var arrayResultanteOrdenado=[];   
//constantes para capturar el valor del input cambiante en la ejecucion
const input = document.querySelector('input');
const log = document.getElementById('valores');
input.addEventListener('input', updateValue);
//funcion que se ejecuta cada que el usuario ingresa o borra una nueva letra en el buscador
function updateValue(e) {
//condicional que sirve para determinar si el usuario ha ingresado mas de un caracter
  if(e.srcElement.value.length>1){
//for que sirve para buscar las coicidencias que hay en el input en todo momento para asi hacer la busqueda en nuestra pequeña
//base de datos (arrayDeBuscador)
   var entradaInput=e.srcElement.value;
   for(i=0;i<arrayDeBuscador.length;i++){
    if(arrayDeBuscador[i].indexOf(entradaInput)!==-1){
        arrayResultante.push(arrayDeBuscador[i]);
    }
   }
//metodo para ordenar el resultado de la busqueda por orden alfabetico
   arrayResultante.sort();
   
//-------------------------------------------------------------------
//lineas para agregar solo las primera tres coicidencias al array que contendra los resultados de la busqueda
   arrayResultanteOrdenado.push(arrayResultante[0]);
   arrayResultanteOrdenado.push(arrayResultante[1]);
   arrayResultanteOrdenado.push(arrayResultante[2]);

//habra que vaciar el array que contendra las coicidencias de la busqueda para poder hacer una asiganacion 
//coreecta de las primeras tres coicidencias siempre que el usuario haga algun cambio en el input(agregue o quite algun caracter) al array final que se mostrara
   arrayResultante=[];
  //------------------------------------------------------------- 
 
    var stringArray=(arrayResultanteOrdenado.toString());
   
    var node = document.createElement("LI");                 // Create a <li> node
    var textnode = document.createTextNode(stringArray);         // Create a text node
    node.appendChild(textnode);                              // Append the text to <li>
    log.appendChild(node);
    arrayResultanteOrdenado=[];
    }else if(e.srcElement.value.length==0){
        arrayResultanteOrdenado=[];
        log.textContent = e.srcElement.value;
        
        }

    
}