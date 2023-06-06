// Подсчитать средний возраст группы
function avgAge(group) {
    let sum = 0
    for (let name in group) {
        sum += group[name]
    }
    return sum / Object.keys(group).length
}

const group = {
    Jek: 18,
    Peeter: 20,
    Anna: 27
}
console.log(avgAge(group)); //21.666666
