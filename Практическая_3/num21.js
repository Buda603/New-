function calculatePressure(density, depth) {
  const gravity = 9.8;
  let pressure = density * gravity * depth;
  return Math.round(pressure);
}

console.log(calculatePressure(1000, 10));

console.log(calculatePressure(1025, 5));

console.log(calculatePressure(800, 20));

console.log(calculatePressure(13546, 1));  