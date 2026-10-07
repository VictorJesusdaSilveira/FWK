//INCOMPLETO (algumas funções erradas)

let dados=[1,3,21,24,5,1,13,2,17,3];
const media=document.getElementById("media");
const mediana=document.getElementById("mediana");
const moda=document.getElementById("moda");
const variancia=document.getElementById("variancia");
const desPadrao=document.getElementById("desvPadrao");
const coefVariacao=document.getElementById("coefVariacao");
function calcularMedia(){
    const media = dados.reduce((soma, valor) => soma + valor); //reduce é uma função que vai somar todos os valores
    return media / dados.length;
}

function calcularMediana(){
    const ordenadas = dados.sort((a, b) => a - b); //.sort serve para ordenar os dados do array
    const valorMeio = Math.floor(dados / 2);

    if(dados % 2 !== 0){
        return valorMeio;
    }else{
        return (ordenadas[meio - 1] + ordenadas[meio]) / 2; //caso o número de dados for par soma os meios e tira a média
    }
}
function calcularModa(){
    const repetidos = dados.filter((item, index) => dados.indexOf(item) !== index); //filter filtra os dados e pega os que se repetem
    return repetidos;

}
function calcularVariancia(){
    let media = calcularMedia()
    let variancia = 0

    for (let i = 0; i < dados.length; i++) {
        variancia += Math.pow(dados[i] - mediaVariancia , 2) / dados; //Math.pow serve para elevar a potência (o primeiro valor é a base e o segundo é a potência) 
    }

    return variancia / (dados.length - 1); // dados.length - 1, pois é a variancia amostral e não a populacional
}
function calcularDesvioPadrao(){
     return Math.sqrt(calcularVariancia());

}
function calcularCoeficienteDeVariacao(){
    let desvio = calcularDesvioPadrao();
    let media = calcularMedia();
    return (desvio / media) * 100;
}
media.innerHTML=calcularMedia().toFixed(2);
mediana.innerHTML=calcularMediana();
moda.innerHTML=calcularModa();
variancia.innerHTML=calcularVariancia();
desPadrao.innerHTML=calcularDesvioPadrao().toFixed(2);
coefVariacao.innerHTML=calcularCoeficienteDeVariacao().toFixed(2)+"%";
