// Написать функцию которая меняет key и value местами. Гарантируется что в исходном объект value уникальны
function objectReverse(obj) {
    const rst = {}
    for (let value in obj) {
        rst[obj[value]] = value
    }
    return rst
}

const group = {
    Jek: '18',
    Peeter: '20',
    Anna: '27'
}
console.log(objectReverse(group))
