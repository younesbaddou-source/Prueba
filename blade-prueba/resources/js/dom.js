const claves= document.getElementById("clave");
const boton= document.getElementById("comprobar");
const resultado1=document.getElementById("resultado");

boton.addEventListener("click", function(){
    const texto=claves.value;
    let resultado=texto.trim();
    if (resultado.length >=6){
        resultado1.innerHTML="contraseña correcta";
        resultado1.style.color="green";
    }else{
        resultado1.innerHTML="demasiado corta";
        resultado1.style.color="red";
    }

})