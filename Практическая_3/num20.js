function checkVehicle(wheels, weight) {
  if (wheels === 2 && weight < 100) {
    return 'Парковка разрешена';
  } else {
    return 'Вам здесь не место! Мяу!';
  }
}

console.log(checkVehicle(2, 15));   // 'Парковка разрешена' (велосипед)
console.log(checkVehicle(2, 120));  // 'Вам здесь не место! Мяу!' (мотоцикл - слишком тяжёлый)
console.log(checkVehicle(4, 1500)); // 'Вам здесь не место! Мяу!' (машина - 4 колеса)
console.log(checkVehicle(3, 200));  // 'Вам здесь не место! Мяу!' (3 колеса)
console.log(checkVehicle(2, 99));   // 'Парковка разрешена'
console.log(checkVehicle(2, 100));  // 'Вам здесь не место! Мяу!' (вес равен 100, не меньше)