// 07-Проверка наличия свойства

const user = {
    name: 'Jack',
    age: undefined
}

console.log(user.value) // undefined
console.log(user.value === undefined) // true
console.log(user.age === undefined) // true
console.log('age' in user) // true
console.log('value' in user) //false
