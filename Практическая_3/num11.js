let k = 15;

for (let i = 100; i <= 999; i++) {
  let hundreds = Math.floor(i / 100);
  let tens = Math.floor((i % 100) / 10);
  let units = i % 10;
  let sum = hundreds + tens + units;
  
  if (sum === k) {
    console.log(i);
  }
}