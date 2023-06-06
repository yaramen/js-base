// Дописать функцию для подсчета суммы нечетных чисел в массиве
function sumOdd(arr) {
    let sum = 0
    for(let value of arr) {
        if (value % 2 === 1) {
            sum += value
        }
    }
    return sum
}

const nums = [1, 2, 3]
console.log(sumOdd(nums)) // 4
