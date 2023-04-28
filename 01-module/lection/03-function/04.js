//Пример 1
function sum(a, b) {
    return a + b
}

console.log(sum(1, 2))
console.log(sum(40, 2))
//console.log(hello()) // undefined

//Пример 2
function getWelcomeMessage(age) {
    if (age < 18) {
        return 'Page not access'
    } else {
        return 'Welcome!!!'
    }
}

console.log(getWelcomeMessage(14))
console.log(getWelcomeMessage(42))
