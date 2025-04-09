var soma = 3 + "3";

console.log(soma)


function formulario(event) {

    event.preventDefault();
    
    let nome = document.getElementById("nome").value;
    let email = document.getElementById("email").value;
    let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!emailRegex.test(email)) {
    alert("[ERRO] Por favor, insira um e-mail válido");
    return false;
    }

    if (nome === "") {
        alert("[ERRO] Por favor, preencha seu nome")
        return false;
    }

    if (email === "") {
        alert("[ERRO] Por favor, insira um e-mail")
        return false;
    }
    alert('Dados cadastrados com sucesso!')
    document.getElementById("nome"  ).value = "";
    document.getElementById("email").value = "";
    return true;
}