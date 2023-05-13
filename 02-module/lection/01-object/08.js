// 08-Добавление и удаление свойств в объекте

const user = {
    name: 'Jack',
    age: undefined
}

for (let key in user) {
    console.log(key, user[key])
}

console.log(Object.keys(user));
console.log(Object.values(user));
