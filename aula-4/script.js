const canvas = document.getElementById("meuCanvas");
const ctx = canvas.getContext("2d"); //ctx = contexto

//Círculo
ctx.beginPath();
ctx.arc(100 , 100 , 50, 0, Math.PI * 2);
ctx.fillStyle="#000000"; //pega a cor
ctx.fill(); //preenche com a cor
ctx.stroke(); //borda
ctx.closePath(); //finaliza o primeiro desenho para iniciar o próximo

//Retângulo
ctx.beginPath();
ctx.rect(150 , 40 , 100 , 60);
ctx.fillStyle="#990099";
ctx.fill();
ctx.stroke();
ctx.closePath();

//Outras formas geométricas
ctx.beginPath();
ctx.moveTo(70 , 170);//Começa o movimento com coordenadas x e y
ctx.lineTo(30 , 240);//Prossegue com o movimento alterando as coordenadas x e y em linha
ctx.lineTo(110 , 240);
ctx.fillStyle="#005500";
ctx.fill();
ctx.closePath();
ctx.stroke();
