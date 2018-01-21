    function getParameterByName(name, url) {
      if (!url) url = window.location.href;
      name = name.replace(/[\[\]]/g, "\\$&");
      var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
      if (!results) return null;
      if (!results[2]) return '';
      return decodeURIComponent(results[2].replace(/\+/g, " "));
    };

    function search_any_req(possible_received_args){
     var pral = possible_received_args.length;
    var search_object = {};
    for (k = 0; k < pral; k++) {
      if ((getParameterByName(possible_received_args[k])) != null) {
        var received_arg_name = (possible_received_args[k]);
        var received_args_value = (getParameterByName(possible_received_args[k]));
        search_object[received_arg_name] = received_args_value;
      };
    };
      return search_object;
     };


function log_object(object){
         console.log('{');
      
    jQuery.each(object, function(name, value) { 
       console.log('' + name + ':' + value + '');
  }),    console.log('}');
}








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

