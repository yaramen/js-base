# DOM. Object. Array

## Object
Объект - тип в JS, созданный для хранения коллекции различных значений и более сложных сущностный
- [01-Создание объекта](01-object/01.js)
- [02-Создание объекта](01-object/02.js)
- [03-Обращение к свойству](01-object/03.js)
- [04-Добавление и удаление свойств в объекте](01-object/04.js)
- [05-Вычисляемое поле](01-object/05.js)
- [06-Значением свойства может быть функция и другой объект](01-object/06.js)
- [07-Проверка  наличия свойства](01-object/07.js)
- [08-Добавление и удаление свойств в объекте](01-object/08.js)

## DOM (Document Object Model)
DOM – это представление HTML-документа в виде дерева вложенных HTML-элементов и их содержимого
```html
<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <div id="root">
        <button class="button">Click</button>
        <p class="text">Hello, world!</p>
        <ul>
            <li>JavaScript</li>
            <li>TypeScript</li>
        </ul>
    </div>
</html>
```

## Select
```js
document.querySelector('p')
document.querySelector('.button')
document.querySelector('#root')
```
- [01-querySelector](02-dom/01-query/index.html)

## Event
```js
function toggleClass() {
    button.classList.toggle('button_active')
}

button.addEventListener('click', toggleClass)
button.removeEventListener('click', toggleClass)
```
- [02-event](02-dom/02-event/index.html)
- [03-menu](02-dom/03-menu/index.html)
- [04-menu](02-dom/04-popup/index.html)

## Подключение внешних библиотек
- [01-CDN](03-libs/01-cdn/index.html)
- [02-Local lib](03-libs/02-lib/index.html)
- [03-Yandex map](03-libs/03-map/index.html)

## Array
Массивы - упорядоченные коллекции данных
- [01-Объявление](04-array/01.js)
- [02-Создание и доступ к элементами массива](04-array/02.js)
- [03-Длина массива](04-array/03.js)
- [04-Изменение элементов в массиве](04-array/04.js)
- [05-Итерация по массиву](04-array/05.js)
- [06-Манипуляции с массивами](04-array/06.js)

## Destructuring assignment and 
- [01-Destructuring assignment](05-dist/01.js)
- [02-Rest parameters](05-dist/02.js)