document.addEventListener('DOMContentLoaded', () => {
    const elementos = document.querySelectorAll('[app-url]');
    elementos.forEach((elem) => {
        const url = elem.getAttribute('app-url');
        const targetId = elem.getAttribute('app-target');
        const evento = elem.getAttribute('app-event') || 'click';

        elem.addEventListener(evento, async(e) => {
            e.preventDefault();
            let urlFinal = url;
            if(elem.name && elem.value !== undefined)
                urlFinal= url+"?"+elem.name+"="+encodeURIComponent(elem.value);
                console.log('urlFinal', urlFinal);
            try{
                const resposta = await fetch(urlFinal);
                const conteudoHTML = await resposta.text();
                const elementoAlvo = document.querySelector(targetId);
                if(elementoAlvo) {
                    elementoAlvo.innerHTML = conteudoHTML;
                    const senha = document.querySelector("senha");
                    const respostaSenha = document.querySelector("RespostaSenha");

                    senha.addEventListener('input', () =>{
                        const valor = senha.value;
                        const tamanho = valor.length >= 8;
                        const maiuscula = /[A-Z]/.test(valor);
                        const numero = /[0-9]/.test(valor);
                        const especial = /[!@#$%^&*]/.test(valor);

                         console.log("Senha:", valor);
    console.log("Tamanho:", tamanho);
    console.log("Maiúscula:", maiuscula);
    console.log("Número:", numero);
    console.log("Especial:", especial);


                        if ($tamanho && $maiuscula && numero && especial) {
                             respostaSenha.textContent = "Senha válida!";
                        }else{
                            respostaSenha.textContent = "Senha inválida!";
                        }

                    })
        
                }else{
                    console.error('O elemento '+targetId+' não existe');
                }

            }catch (erro){
                console.error('Falha ao buscar dados');
            }
        });

    });


});
