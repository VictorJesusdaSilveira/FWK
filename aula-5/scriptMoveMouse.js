const canvas = document.getElementById("meuCanvas");
canvas.height = window.innerHeight - 50;
canvas.width = window.innerWidth - 50;
const label = document.getElementById("distancia");
const ctx = canvas.getContext("2d");


const velo = 5;

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

let alvoX = circulo.x;
let alvoY = circulo.y;

canvas.addEventListener("mousedown" , function (ev){
    const rect = canvas.getBoundingClientRect();
    alvoX = ev.clientX - rect.left; //client é onde foi clicado
    alvoY = ev.clientY - rect.top;
    mover();
})

function mover(){
    let dx = alvoX - circulo.x;
    let dy = alvoY - circulo.y;
    let distancia = Math.sqrt((dx * dx) + (dy * dy));

    if(distancia > velo){
        circulo.x += (dx/distancia) * velo;
        circulo.y += (dy/distancia) * velo;
        ctx.clearRect(0 , 0 , canvas.width , canvas.height);
        atualizar();
        requestAnimationFrame(mover);
    }else {
        circulo.x = alvoX;
        circulo.y = alvoY;
        ctx.clearRect(0 , 0 , canvas.width , canvas.height);
        atualizar();
    }

};

function atualizar(){
    let raios = circulo.r + circulo2.r;
    let dist = Math.sqrt((circulo.x * circulo2.x) + (circulo.y * circulo2.y)) - raios;
    label.innerHTML = "Distância: " + dist;
    circulo.desenhar();
    if(dist > 0);
    circulo2.desenhar();
}

circulo.desenhar();
circulo2.desenhar();