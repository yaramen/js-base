// Данные о пользователе хранятся в массиве. В первой ячейки хранится имя, а в третей возраст. Скопируйте эти значения
const user = ['UserName', 'male', 42]

const [name, , age] = user
console.log(name, age)