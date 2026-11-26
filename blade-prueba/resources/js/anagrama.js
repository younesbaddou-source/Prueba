const entrada=document.getElementById("entrada");
const boton=document.getElementById("processar");
const control=document.getElementById("control");

function ordenar(palabras){
    let letras=palabras.split("");
    letras=letras.sort().join("");
    return letras;

}

boton.addEventListener("click", function(){
    let error="";
    let ok="";
    let totanagrama=0;
    let anagrama=false;
    let todos=false;
    
    const texto=entrada.value;
    
    let palabras=texto.split(" ");
    let soloLetras=true;
    for( let i= 1; i<palabras.length-1; i++){
        if (!/^[a-zA-Z]+$/.test(palabras[i])){
            soloLetras=false;
        }
    }
    
    if (!palabras.includes("F")){
        error="ERROR: Falta el separador final 'F'.";
        
    }else if (palabras[palabras.length-1] != 'F'){
        error="ERROR: 'F' ha d'estar al final.";
        
    }else if(palabras.length< 3){
        error="ERROR: Cal almenys una paraula candidata.";
        
        
    }else if(palabras[0]==""){
        error="ERROR: La paraula base és incorrecta.";
    }else if(!/^[a-zA-Z]+$/.test(palabras[0])){
        error="ERROR: La paraula base només pot contenir lletres.";
    }
    
    else if(!soloLetras){
        error="ERROR: Només es permeten lletres.";
    }else if(palabras.length>51){
        error="ERROR: Massa paraules (màxim 50).";
    }
    for (let y=1; y <palabras.length-1; y++){
        if (ordenar(palabras[0])==ordenar(palabras[y]) && palabras[y]!==palabras[0]){
            ok+=palabras[y]+" ";
            totanagrama++;
            anagrama=true;
        }
        
    }
    if (totanagrama==palabras.length-2 ){
        todos=true;
    }
    if (error===""){
        if (todos){
            control.innerHTML="TOTS SÓN ANAGRAMES";
            control.style.color='green';
        }
        else if (anagrama){
            control.innerHTML=ok;
            control.style.color='green';

        }else{
            control.innerHTML="CAP ANAGRAMA TROBAT";
            control.style.color='red';
        }
    }else{  
        control.innerHTML=error;
        control.style.color='red';
    }
    
    
    


})