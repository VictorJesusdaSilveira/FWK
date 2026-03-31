const body = document.getElementsByTagName("body")[0];
const canvas = document.createElement("canvas");
canvas.height = window.innerHeight - 50;
canvas.width = window.innerWidth - 50;
body.appendChild(canvas);
const ctx = canvas.getContext("2d");
const arco = document.getElementsByTagName("arco");

const objArco = {
		x:100,
		y:100,
		r:50,
        cor:"#990000",
		desenhar:function(x , y , raio , cor , rad){
			ctx.beginPath();
			ctx.arc(x || this.x , y || this.y , raio || this.r , 0 , rad || 2 * Math.PI , true);
			ctx.fillSTyle = cor || this.cor;
			ctx.fill();
			ctx.closePath();
	}
};	

function desenharFormas(){
    ctx.clearRect(0 , 0 , canvas.width , canvas.height);
    let velocidade = 2;
    if(arco){
        for (let a of arco) {
            let raio = a.getAttribute("raio");
            let posX = parseInt(a.getAttribute("posX"));
            let posY = parseInt(a.getAttribute("posY"));
            let cor = a.getAttribute("cor");
            let graus = parseInt(a.getAttribute("graus")); //parseInt serve para interpretar uma string para int
            let rad = graus * (Math.PI/180);
            let mover = a.getAttribute("mover");
            if (mover) {
                if (mover === "acima") {
                    posY -= velocidade;
                    a.setAttribute("posY" , posY);
                }
                if (mover === "abaixo") {
                    posY += velocidade;
                    a.setAttribute("posY" , posY);
                }
                 if (mover === "esquerda") {
                    posX -= velocidade;
                    a.setAttribute("posX" , posX);
                }
                
                 if (mover === "direita") {
                    posY += velocidade;
                    a.setAttribute("posX" , posX);
                }
            }
            objArco.desenhar(posX , posY , raio , cor , rad);
        
        }
	
    }
    requestAnimationFrame(desenharFormas);
}

desenharFormas();

