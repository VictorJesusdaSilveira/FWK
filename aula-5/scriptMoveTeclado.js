const canvas = document.getElementById("meuCanvas");
canvas.height = window.innerHeight - 50;
canvas.width = window.innerWidth - 50;
const label = document.getElementById("distancia");
const ctx = canvas.getContext("2d");

let circulo = {
    x: canvas.width / 2,
    y: canvas.height / 2,
    r: 50,
    desenhar : function(){
        ctx.beginPath();
        ctx.arc(this.x , this.y , this.r , 0 , Math.PI * 2);
        ctx.fillStyle = "#000000";
        ctx.fill();
        ctx.closePath();
    }
};

let circulo2 = {
    x: 100,
    y: 100,
    r: 50,
    desenhar : function(){
        ctx.beginPath();
        ctx.arc(this.x , this.y , this.r , 0 , Math.PI * 2);
        ctx.fillStyle = "#009900";
        ctx.fill();
        ctx.closePath();
    }
};


//evento q quando se pressiona a tecla do teclado a função vai receber a tecla
document.addEventListener("keydown" , function(ev){
    const passo = 5;
    //caso a tecla seja a arrowUP o círculo vai aumentar a altura
    if(ev.key === "ArrowUp") circulo.y -= passo;
    if(ev.key === "ArrowDown") circulo.y += passo;
    if(ev.key === "ArrowLeft") circulo.x -= passo;
    if(ev.key === "ArrowRight") circulo.x += passo;
    ctx.clearRect(0 , 0 , canvas.width , canvas.height)
    atualizar();
});

function atualizar(){
    let raios = circulo.r + circulo2.r;
    let dist = Math.sqrt((circulo.x * circulo2.x) + (circulo.y * circulo2.y)) - raios;
    label.innerHTML = "Distância: " + dist;
    circulo.desenhar();
    circulo2.desenhar();
}

circulo.desenhar();
circulo2.desenhar();
