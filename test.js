let myObj = {
    name: "Aindi",
    age: 23,
    rost: 171,
    secondName: "Makhmudov"
};

console.log(myObj.secondName);

for (let key in myObj){
    console.log('Свойство (' + key + ') имеет значение (' + myObj[key] + ')');
}

let myArr = ['Usman', 'Rukiyat', 'Adlan', 'Aindi'];

myArr.forEach(function(item, i) {
    console.log(i + ': ' + item);
});