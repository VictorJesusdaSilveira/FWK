const body = document.getElementsByTagName("body")[0];
const canvas = document.createElement("canvas");
body.appendChild(canvas);
const ctx = canvas.getContext("2d");
const arco = document.querySelector("circulo")

const circulo = {
		x:100,
		y:100,
		r:50,
		desenhar:function(raio){
			ctx.beginPath();
			ctx.arc(this.x , this.y , raio , 0 , 2 * Math.PI);
			ctx.fillSTyle = "#000000";
			ctx.fill();
			ctx.closePath();
	}
};	

if(arco)){
	let raio = arco.getAttribute("raio");
	circulo.desenhar(raio);
}


