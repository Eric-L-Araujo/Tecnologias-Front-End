TESTE

function validarEmail(email) {
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regex.test(email);
}

// Exemplo de uso
const email = "teste@example.com";
if (validarEmail(email)) {
    console.log("E-mail válido!");
} else {
    console.log("E-mail inválido!");
}
