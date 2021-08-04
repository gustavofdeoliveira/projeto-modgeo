
//Js da navbar
const navSlide = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-links li');
    burger.addEventListener('click', () => {
        nav.classList.toggle('nav-active');
        navLinks.forEach((link, index) => {
            if (link.style.animation) {
                link.style.animation = '';
            } else {
                link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.3}s`;
            }
        });
        burger.classList.toggle('toggle');
    });
}

navSlide();

//MASCARAS DE INPUT
function inputHandler(masks, max, event) {
    debugger;
    if (masks != null || masks != '') {
        var c = event.target;
        var v = c.value.replace(/\D/g, '');
        var m = c.value.length > max ? 1 : 0;
        VMasker(c).unMask();
        VMasker(c).maskPattern(masks[m]);
        c.value = VMasker.toPattern(v, masks[m]);
    }
}

var telMask = ['(99) 9999-99999', '(99) 99999-9999'];
var tel = document.querySelector('#nrTelefone');
if (tel != null & tel != "") {
    VMasker(tel).maskPattern(telMask[0]);
    tel.addEventListener('input', inputHandler.bind(undefined, telMask, 14), false);
}
var docMask = ['999.999.999-999', '99.999.999/9999-99'];
var doc = document.querySelector('#nrCnpj');
if (doc != null & doc != "") {
    VMasker(doc).maskPattern(docMask[0]);
    doc.addEventListener('input', inputHandler.bind(undefined, docMask, 14), false);
}
//Somente numeros
function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
//VALIDAÇÃO DOS DADOS
const fields = document.querySelectorAll("[required]")
function ValidateField(field) {
    // logica para verificar se existem erros
    function verifyErrors() {
        let foundError = false;

        for (let error in field.validity) {
            // se não for customError
            // então verifica se tem erro
            if (field.validity[error] && !field.validity.valid) {
                foundError = error
            }
        }
        return foundError;
    }
    function customMessage(typeError) {
        const messages = {
            text: {
                valueMissing: "Por favor, preencha este campo"
            },
            email: {
                valueMissing: "Email é obrigatório",
                typeMismatch: "Por favor, preencha um email válido"
            },
            date: {
                valueMissing: "Por favor, preencha este campo"
            },
            color:{
                valueMissing: "Por favor, preencha este campo"
            }
        }

        return messages[field.type][typeError]
    }

    function setCustomMessage(message) {
        const spanError = field.parentNode.querySelector("span.error")
        if (message) {
            spanError.classList.add("active")
            spanError.innerHTML = message
        } else {
            spanError.classList.remove("active")
            spanError.innerHTML = ""
        }
    }

    return function () {
        const error = verifyErrors()
        if (error) {
            const message = customMessage(error)

            field.style.borderColor = "red"
            setCustomMessage(message)
        } else {
            field.style.borderColor = "green"
            setCustomMessage()
        }
    }
}

function customValidation(event) {
    const field = event.target
    const validation = ValidateField(field)
    validation()
}

for (field of fields) {
    field.addEventListener("invalid", event => {
        // eliminar o bubble
        event.preventDefault()

        customValidation(event)
    })
    field.addEventListener("blur", customValidation)
}

document.querySelector("form")
    .addEventListener("submit", event => {
        console.log("enviar o formulário")

    })

//Listar hachuras
$(document).ready(function () {
    carregar_json('tipoRocha');

    function carregar_json() {
        var html = '';
        var tiposRocha = {
            'rocha': [
                "Água",
                "Andesito",
                "Arenito",
                "Arenito Argiloso",
                "Arenito com Níveis Calcários",
                "Argila/Argiloso",
                "Argilito",
                "Basalto",
                "Basalto Vesículo-Amigdaloidal",
                "Brecha",
                "Calcário",
                "Calcário Estratificado",
                "Calcário Oolitico",
                "Calcarenito",
                "Conglomerado",
                "Diabasio",
                "Dolomito",
                "Diamictito",
                "Filito",
                "Folhelho",
                "Folhelho Carbonoso",
                "Folhelho com Níveis Calcários",
                "Gabro/Piroxenito",
                "Gnaisse",
                "Granito",
                "Mármore Calcítico",
                "Mármore Dolomítico",
                "Metassiltito",
                "Metarritmito",
                "Migmatito",
                "Quartzito",
                "Riolito",
                "Sienito",
                "Siltito",
                "Tilito",
                "Xisto"
            ]
        };
        html += '<option>Selecionar</option>';
        for (var i = 0; i < tiposRocha.rocha.length; i++) {
            html += '<option value=' + tiposRocha.rocha[i] + '>' + tiposRocha.rocha[i] + '</option>';
        }
        $('#tipoRocha').html(html);
        console.log(tiposRocha)
    }
})

//Lista cidade e estados
debugger
$(document).ready(function(){
    carregar_json('Estado');
    function carregar_json(id, cidade_id){
        var html = '';

        $.getJSON('https://gist.githubusercontent.com/letanure/3012978/raw/36fc21d9e2fc45c078e0e0e07cce3c81965db8f9/estados-cidades.json', function(data){
            html += '<option>Selecionar '+'</option>';
            console.log(data);
            if(id == 'Estado' && cidade_id == null){
                for(var i = 0; i < data.estados.length; i++){
                    html += '<option value='+ data.estados[i].nome +'>'+ data.estados[i].nome+'</option>';
                }
            }else{
                for(var i = 0; i < data.estados.length; i++){
                    if(data.estados[i].sigla == cidade_id){
                        for(var j = 0; j < data.estados[i].cidades.length; j++){
                            html += '<option value='+ data.estados[i].cidades[j] +'>'+data.estados[i].cidades[j]+ '</option>';
                        }
                    }
                }
            }

            $('#'+id).html(html);
        });
        
    }

    $(document).on('change', '#Estado', function(){
        var cidade_id = $(this).val();
        console.log(cidade_id);
        if(cidade_id != null){
            carregar_json('Cidade', cidade_id);
        }
    });

});