
function Inserirmedia() {
    var n1 = (document.getElementById("primeiranota").value);
    var n2 = (document.getElementById("segundanota").value);

    // Verifica se os campos estão vazios
    if (n1 === "") {
        alert("O campo da primeira nota precisa ser preenchido");
        return; // Sai da função se o campo estiver vazio
    }

    if (n2 === "") {
        alert("O campo da segunda nota precisa ser preenchido");
        return; // Sai da função se o campo estiver vazio
    }

    //Converte os valores para numéricos
    n1 = parseFloat(n1);
    n2 = parseFloat(n2);

    var media = (n1 + n2) / 2;

    // Função de condição das notas aninhada
    function mostraSituacao(media) {
        if (media >= 7) {
            alert("Sua média é: " + media + ", Você foi aprovado(a)!");
        } else {
            alert("Sua média é: " + media + ", Você foi reprovado(a)!");
        }
    }

    // Chama a função aninhada
    mostraSituacao(media);
}


