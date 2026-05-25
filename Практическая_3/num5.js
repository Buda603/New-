let weight = 5;
let recommendation;

if (weight < 4) {
    recommendation = 'Пора перекусить';
} else if (weight >= 4 && weight <= 5.5) {
    recommendation = 'Вес в норме';
} else {
    recommendation = 'Пора на тренировку';
}

console.log(recommendation);