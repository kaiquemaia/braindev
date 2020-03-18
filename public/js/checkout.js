console.log('\n\n%cScript contato.js carregado!\n\n\n', 'background-color:yellowgreen;color:#000;');

/*
 * Variáveis
 */

// Formulário
const formulario = document.querySelector('#formContato');

// Inputs do Formulário
const nome = formulario.querySelector('#nome'),
    email = formulario.querySelector('#email'),
    cep = formulario.querySelector('#cep'),
    cidade = formulario.querySelector('#cidade'),
    endereco = formulario.querySelector('#endereco'),
    telefone = formulario.querySelector('#telefone'),
    numero = formulario.querySelector('#numero'),
    complemento = formulario.querySelector('#complemento'),
    mensagem = formulario.querySelector('#mensagem');



formatarCep = function () {

    cepDigitado = this.value;

    if ( cepDigitado.length === 5 ) {

        this.value += '-';

    } else if (cepDigitado.length > 0 && cepDigitado.length <= 9 ) {

        console.log(`Caractere incluso no campo CEP: ${cepDigitado}`)

    };

}

cep.addEventListener('keyup', formatarCep);

function retorno_callback_viacep (resposta) {

    if(!('erro' in resposta)) {

        endereco.value = resposta.endereco;
        bairro.value = resposta.bairro;
        cidade.value = resposta.localidade;

        let estados = formulario.querySelectorAll('option');

        for(cadaEstado of estados) {
            if ( cadaEstado === resposta.uf ) {
                cadaEstado.setAttribute('selected', '');
            }
        };

        numero.focus();
        
    } else {
        alert('Opa! parece que esse CEP nao existe! Digite um CEP válido, por favor');

        cidade.value = '';
        estado.firstElementChild.setAttribute('selected', '');
        enderecovalue = '';
        bairrovalue = '';
    }

}

function pesquisarCep (el) {

    let cepLimpo = el.replace(/\D/g, '');

    let cepParte1 = cepLimpo.substr(0,5);
    let cepParte2 = cepLimpo.substr(5,3);
    cep.value = `${cepParte1}-${cepParte2}`;

    if(cep.value.length !== 9) {

        cep.focus();

        cep.previousElementSibling.innerText = 'CEP = Verifique o CEP';
        cep.previousElementSibling.classList.add('text-danger');

    }

    if ( cepLimpo != '') {
        let formatoCep = /^[0-9]{8}$/;

        if(formatoCep.test(cepLimpo)) {
            endereco.value = '...';
            bairro.value = '...';
            cidade.value = '...';

            scriptCep = document.createElement('script');

            scriptCep.src = `https://viacep.com.br/ws/${cepLimpo}/json/?callback=retorno_callback_viacep`;

            document.body.appendChild(scriptCep);
        }
    }
}