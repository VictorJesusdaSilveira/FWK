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
                }else{
                    console.error('O elemento '+targetId+' não existe');
                }

            }catch (erro){
                console.error('Falha ao buscar dados');
            }
        });

    });
});
