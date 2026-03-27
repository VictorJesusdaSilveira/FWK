onst body = document.getElementsByTagName("body")[0];
const canvas = document.createElement("canvas");
body.appendChild(canvas);
const ctx = canvas.getContext("2d");

const circulo = {
		x:100,
		y:100,
		r:50,
		desenhar:function(){
			ctx.beginPath();
			ctx.arc(this.x , this.y , this.r , 0 , 2 * Math.PI);
			ctx.fillSTyle = "#000000";
			ctx.fill();
			ctx.closePath();
	}
};	

circulo.desenhar();
