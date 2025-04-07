function salvarDados() {
    var nome = document.getElementById('nome').value;

    localStorage.setItem('nome',nome);
   

}


function EntrarDados() {

    var campoLogin = document.getElementById('login').value

    var nomeSalvo = localStorage.getItem('nome');

    if (campoLogin === nomeSalvo) {
        window.location.href = "../html/telasobrenos.html";
    } else {
        alert('O nome está incorreto!')


    
    } 
        
}

