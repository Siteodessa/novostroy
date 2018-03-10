






//Метод split
var names = 'Маша, Петя, Марина, Василий';

var arr = names.split(', ');

for (var i = 0; i < arr.length; i++) {
//  alert( 'Вам сообщение ' + arr[i] );
}



//
//Метод join
//Вызов arr.join(str) делает в точности противоположное split. Он берет массив и склеивает его в строку, используя str как разделитель.
//

var arr = ['Маша', 'Петя', 'Марина', 'Василий'];

var str = arr.join(';');

//alert( str ); // Маша;Петя;Марина;Василий




//Удаление из массива
var arr = ["Я", "иду", "домой"];

delete arr[1]; // значение с индексом 1 удалено

// теперь arr = ["Я", undefined, "домой"];
//alert( arr[1] ); // undefined

var user = {
  name: "Петя",
  age: 30
}

var keys = Object.keys(user);

//alert( keys ); // name, age
