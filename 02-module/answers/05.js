// Написать функцию, которая убирает дублирование в массиве строк
function uniq(arr) {
    const rst = []
    for (let value of arr) {
        if (rst.indexOf(value) === -1) {
            rst.push(value)
        }
    }

    return rst
}

const users = ['user1', 'user2', 'user3', 'user2']
console.log(uniq(users)) //['user1', 'user2', 'user3']
