let number = 12345;
let digitCount;

if (number >= 0 && number <= 9) {
  digitCount = 1;
} else if (number >= 10 && number <= 99) {
  digitCount = 2;
} else if (number >= 100 && number <= 999) {
  digitCount = 3;
} else if (number >= 1000 && number <= 9999) {
  digitCount = 4;
} else if (number >= 10000 && number <= 99999) {
  digitCount = 5;
} else if (number >= 100000 && number <= 999999) {
  digitCount = 6;
} else if (number >= 1000000 && number <= 9999999) {
  digitCount = 7;
} else if (number >= 10000000 && number <= 99999999) {
  digitCount = 8;
} else {
  digitCount = "Слишком большое число или отрицательное";
}

console.log(`Число ${number} содержит ${digitCount} цифр`);