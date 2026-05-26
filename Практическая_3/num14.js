let dayNumber = 3; 

switch (dayNumber) {
  case 1: // Понедельник
    console.log("6 уроков");
    break;
  case 2: // Вторник
    console.log("5 уроков");
    break;
  case 3: // Среда
    console.log("6 уроков");
    break;
  case 4: // Четверг
    console.log("5 уроков");
    break;
  case 5: // Пятница
    console.log("7 уроков");
    break;
  case 6: // Суббота
    console.log("4 урока");
    break;
  case 7: // Воскресенье
    console.log("Выходной, уроков нет");
    break;
  default:
    console.log("Ошибка: введите число от 1 до 7");
}