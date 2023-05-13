// 06-Значением свойства может быть функция и другой объект

const user = {
    name: 'Jack',
    age: 18,
    show: function() {
        console.log('My name is Jack')
    },
    address: {
        street: 'Main St',
        house: 102,
    }
}

console.log(user.show) // выведет код функции
user.show() // My name is Jack
console.log(user.address.street) // 'Main St'