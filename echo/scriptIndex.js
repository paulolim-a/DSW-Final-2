const formulario = document.querySelector("form");

const Inome = document.querySelector(".nome");
const Icpf = document.querySelector(".cpf");
const IdataNasc = document.querySelector(".dataNasc");
const Isenha = document.querySelector(".senha");

function cadastrar (){
    fetch("http://localhost:8081/perfis",
    {
        headers: {
            'Accept':'application/json',
            'Content-Type': 'application/json'
        },
        method: "POST",
        body: JSON.stringify({
            nome: Inome.value,
            cpf: Icpf.value,
            dataNasc: IdataNasc.value,
            senha: Isenha.value
        })
    })
    .then(function(res){console.log(res)})
    .catch(function(res){console.log(res)})
};

function limpar(){
    Inome.value = "";
    Icpf.value = "";
    IdataNasc.value = "";
    Isenha.value = "";
}

formulario.addEventListener('submit',function(event){
    event.preventDefault();

    cadastrar();
    limpar();
})