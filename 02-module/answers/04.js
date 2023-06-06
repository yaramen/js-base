// вывести матрицу в консоль
const matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
]

for (let line of matrix) {
    let rst = ''
    for (let j of line) {
        rst += j + ' '
    }
    console.log(rst)
}