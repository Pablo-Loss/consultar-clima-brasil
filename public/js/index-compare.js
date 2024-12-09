function clearFields() {
    $("#cidade1").val("");
    $("#cidade2").val("");
}

function mostrarErro(text) {
    Swal.fire({
        title: 'Ops!',
        text,
        icon: 'error',
        confirmButtonText: 'Entendi'
    })
}

function addBlurCep(nroElemento) {
    $("#cep" + nroElemento).blur(function() {
        let cep = $(this).val().replace(/\D/g, '');
        if (cep != "") {
            let validaCep = /^[0-9]{8}$/;
            if (validaCep.test(cep)) {
                $("#cidade" + nroElemento).val("...");

                $.getJSON(`https://viacep.com.br/ws/${cep}/json/?callback=?`, function(dados) {
                    if (dados.hasOwnProperty('erro')) {
                        clearFields();
                        mostrarErro("CEP não encontrado");
                    } else {
                        $("#cidade" + nroElemento).val(dados.localidade);
                    }
                });
            } else {
                clearFields();
                mostrarErro("Formato de CEP inválido");
            }
        } else {
            clearFields();
        }
    });
}

$(document).ready(function() {
    addBlurCep(1);
    addBlurCep(2);
    clearFields();
});