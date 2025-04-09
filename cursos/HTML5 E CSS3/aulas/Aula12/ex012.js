var now = new Date()
var time = now.getHours() //pega  hora atual que está rodando no server
console.log(`Agora são exatamente ${time} horas`)

if (time < 12 && time > 4) {
    console.log('Bom dia!')
} else if (time <= 3) {
    console.log('Boa Madrugada!')
} else if (time <=18){
    console.log('Boa tarde!')
} else {
    console.log('Boa noite!')
}
    
