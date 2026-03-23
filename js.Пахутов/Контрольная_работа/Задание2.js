let arr = [
    { name: "Вася", surname: "Иванов",
height: 185, weigth: 78 },
    { name: "Петя", surname: "Петров",
height: 168, weigth: 70 },
    { name: "Маша", surname: "Сидорова", 
height: 172, weigth: 65 },
    { name: "Коля", surname: "Николаев",
height: 190, weigth: 85 }       
];

function sectionBasket(arr) {
    return arr.filter(student =>
        student.height > 170).length;
}

console.log(sectionBasket(arr));