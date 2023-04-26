# JS Основы языка

## Что изучем?
- Основы языка (базовые типы и функции)
- Array и Object
- DOM и BOM
- Асинхронность

## Правило 20 часов vs 10000 часов
- Что конкретно хочу научиться делать?
- Рефлексия каждого занятия
- Практика 20 часов

https://www.youtube.com/watch?v=J_89IMS5gJQ [https://www.youtube.com/watch?v=J_89IMS5gJQ]

## Стандарты языка
- ES5 - 2009
- ES6 - 2015
- ES7 - 2016
  ...
- Современные стандарт ECMAScript

## Browser и Node.js
- ![img.png](img.png)
- ![img_1.png](img_1.png)

## Вставка JS в Browser
```html
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Страница с JavaScript</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <h1>Это страница с JavaScript</h1>
    <div id="root"></div>
    <script src="js/app.js"></script>
</body>
</html>
```
[demo](01-vars-and-base-types/01-hello-world/index.html)

## Node.JS и console.log
```node <script path>```

```console.log('foo') //foo```

## Объявление и присваивание
```js
// Объявление переменной
let i;
// Присвоение переменной значения
i = 1
console.log(i) // 1
// Объявление и присвоение переменной значение
let j = 24
const pi = 3.14
```
[demo](01-vars-and-base-types/02.js)

## Базовые типы данных
- Number
- String
- Boolean
- BigInt
- Object
- Null
- undefined
- Symbol

## Number
Числовой тип в JS представлен целочисленными значениями и числа с плавающей точкой
```js
const a = 4 // целочисленная 
const b = 4.2 // с плавающей точкой
```
Есть специальные значения Infinity, -Infinity и NaN.
```js
1 / 0 //Infinity
"foo" / 2 // NaN
```
- [demo](01-vars-and-base-types/03.js)
- [demo](01-vars-and-base-types/04.js)

## String

Строка - последовательность символов UTF-16.
```JS
// Три разных способа создать литерал строки
'стр" ffa " ока';
"тоже ст'ро'ка";
`еще одна стока ${'!'}`; //`еще одна стока !`

// Присвоение строки
const js = 'JavaScript'
console.log(js)

// сложение строк
console.log(js + ' ' + ts)
// строковая конкатенация
console.log(`${js} ${ts}`)
```
- [demo](01-vars-and-base-types/05.js)

## Boolean
Логический тип, может быть равен либо true, либо false
```js
// литералы логического типа
true;
false;

// Присвоение boolean
const isFoo = true;
console.log(isFoo)
```
- [demo](01-vars-and-base-types/06.js)

## Null и Undefined
Null - специальное тип значение (ссылкой на несуществующий объект).
undefined - тип для не присвоенных значений
```js
// литералы
null;
undefined;

// null
let user: User = null;
console.log(user)

// undefined
let men;
console.log(men)
```
- [demo](01-vars-and-base-types/07.js)

## Остальные типы
Object - специальный тип в js, рассмотрим позже детально

Symbol - еще один специальные, для создания уникальных идентификаторов в объектах, не будет рассматриваться в курсу

Bigint - новый тип, для целых чисел произвольной длины.