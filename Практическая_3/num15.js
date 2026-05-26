let number = 1234567;
let lastDigit = number % 10;
let lastDigitOfSquare;

switch (lastDigit) {
  case 0:
    lastDigitOfSquare = 0;
    break;
  case 1:
    lastDigitOfSquare = 1;
    break;
  case 2:
    lastDigitOfSquare = 4;
    break;
  case 3:
    lastDigitOfSquare = 9;
    break;
  case 4:
    lastDigitOfSquare = 6;
    break;
  case 5:
    lastDigitOfSquare = 5;
    break;
  case 6:
    lastDigitOfSquare = 6;
    break;
  case 7:
    lastDigitOfSquare = 9;
    break;
  case 8:
    lastDigitOfSquare = 4;
    break;
  case 9:
    lastDigitOfSquare = 1;
    break;
  default:
    lastDigitOfSquare = "Ошибка";
}

console.log(`Число: ${number}`);
console.log(`Последняя цифра числа: ${lastDigit}`);
console.log(`Последняя цифра квадрата числа: ${lastDigitOfSquare}`);