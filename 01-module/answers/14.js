// Вывести n чисел в не четной последовательность 1 3 5 7 ... (не четность определяется i % 2 === 1).
// Для хранения результата использовать строку

function odd(n) {
    let rst = ""
    let i = 1
    while (i !== n) {
        if (i % 2 === 1) {
            rst += i + " "
        }
        i++
    }
    return rst
}

console.log(odd(10))
console.log(odd(100))