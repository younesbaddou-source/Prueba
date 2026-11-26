let frutas = ["manzana", "pera", "uva"];
console.log(frutas[0]);                  // manzana  (se empieza en 0)
console.log(frutas.length);              // 3
frutas.push("kiwi");                     // añade al final
frutas.splice(1, 1);                     // quita 1 elemento desde la posición 1 (la pera)
console.log(frutas.includes("uva"));     // true
console.log(frutas);                     // [ 'manzana', 'uva', 'kiwi' ]
console.log(frutas[frutas.length - 2]);  // kiwi  (el último)