// Вывести сообщение, исходя из температуры
// до -10 - Очень Холодно
// от -10 - +10 - Холодно
// от +10 - +18 - Прохладно
// от +18 - +25 - Тепло
// от +25 и выше - Жарко

const t = Math.floor(Math.random() * 50) - 20
console.log(`Текущая температура: ${t}`)

if (t < -10) {
    console.log('Очень Холодно')
} else if (t > -10 && t <= 10) {
    console.log('Холодно')
} else if (t > 10 && t <= 18) {
    console.log('Прохладно')
} else if (t > 18 && t <= 25) {
    console.log('Тепло')
} else if (t > 25) {
    console.log('Жарко')
}