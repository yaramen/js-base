// Создать функцию, которая возвращает аргумент, переданный ей в качестве параметра.
// Если аргументов нет, то вывести в консоль "Функция вызвана без параметров"

function getFirstArgument(firstArg) {
    // ваш код
    if (arguments.length === 0) {
        console.log("Функция вызвана без параметров")
    }

    return firstArg
}

console.log(getFirstArgument(42)) //42
console.log(getFirstArgument("foo")) // foo
console.log(getFirstArgument(42, "foo")) // 42
console.log(getFirstArgument()) // Функция вызвана без параметров\n undefined
console.log(getFirstArgument(undefined)) // Функция вызвана без параметров\n undefined
