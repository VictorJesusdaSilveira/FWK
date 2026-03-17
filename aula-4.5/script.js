const canvas = document.getElementById("meuCanvas");
const ctx = canvas.getContext("2d"); //ctx = contexto

//Desenho de Círculos
let circulo = {
    x:100,
    y:100,
    raio:50,
    cor: ctx.strokeStyle="#000000",
    desenhar:function(y){
        ctx.beginPath();
        ctx.arc(this.x , y , this.raio , 0 , Math.PI * 2);
        ctx.fill();
        ctx.stroke();
        ctx.closePath();
    },
    mover:function(){
        this.x++;
    }
};

//Desenho de Retângulo
let ret = {
    x:100,
    y:100,
    altura:200,
    largura: 100,
    cor: ctx.strokeStyle="#005500",
    desenhar:function(){
        ctx.beginPath();
        ctx.rect(this.x , this.y , this.altura , this.largura);
        ctx.fill();
        ctx.stroke();
        ctx.closePath();
    },
    mover:function(){
        this.x++;
    }
};


function executar(){
    ctx.clearRect(0 , 0 , canvas.width , canvas.height);
    circulo.desenhar(100);
    circulo.desenhar(200);
    circulo.mover();
    ret.desenhar(100);
    ret.desenhar(200);
    ret.mover();
    requestAnimationFrame(executar);
}

executar();
