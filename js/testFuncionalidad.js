//alert("Hola mundo\nEsta es otra línea");

/* CONFIRMAR DATOS 
var ok = confirm("¿Enviar los datos?");
if( ok == true )
{
    ...
}
else
{
    ...
}
*/

/* PEDIR DATOS 
var valor = prompt("Dime la contraseña", "");
if( valor == "33PPXX" )
{
    alert("La contraseña es correcta");
}
else
{
    alert("Contraseña no válida: [" + valor + "]");
}
*/

// VALIDAR QUE SE INGRESAN TODOS LOS DATOS NECESARIOS EN EL FORMULARIO 
function validar()
             {
                 var ok = true;
 
                 if( document.getElementById("titulo").value == "")
                 {
                     alert("Introduzca todos los datos");
                     ok = false;
                 }
 
                 return ok;
}

